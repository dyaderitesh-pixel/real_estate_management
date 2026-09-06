<?php
session_start(); // Start a session to track registration status

// Initialize error and success message variables
$error_message = ""; 
$success_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form input
    $username = trim($_POST['username']);
    $mobile = trim($_POST['mobile']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($mobile) || empty($password)) {
        $error_message = "All fields are required.";
    } else {
        // Validate username: must be alphanumeric and between 3 to 20 characters
        if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
            $error_message = "Username must be alphanumeric and between 3 to 20 characters.";
        } elseif (!preg_match('/^\d{10,15}$/', $mobile)) { // Validate mobile number
            $error_message = "Mobile number must be numeric and between 10 to 15 digits.";
        } else {
            // Check if the users.json file exists and read the content
            if (file_exists('users.json')) {
                $fileContents = file_get_contents('users.json');
                $users = json_decode($fileContents, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    $users = []; // Reset to empty array if decoding fails
                    $error_message = "Failed to read user data. Please contact support.";
                }
            } else {
                $users = []; // Initialize empty array if file doesn't exist
            }

            // Check if user already exists
            if (is_array($users) && array_key_exists($username, $users)) {
                $error_message = "Username already exists. Please choose another.";
            } else {
                // Save the user to the file
                $users[$username] = [
                    'username' => $username,
                    'mobile' => $mobile,
                    'password' => password_hash($password, PASSWORD_DEFAULT) // Hash the password for security
                ];

                // Attempt to write the new user data to the JSON file
                if (file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT)) === false) {
                    $error_message = "Failed to save user data. Please try again.";
                } else {
                    // Log in the user by setting session variables
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_info'] = $users[$username]; 
                    $_SESSION['success_message'] = "Registration successful!"; 

                    // Redirect to login page
                    header("Location: login.php");
                    exit();
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <style>
        body {
            background-image: url('images/image12.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); 
            padding: 30px;
            border-radius: 10px;
            margin-top: 100px;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #FFD700;
        }
        .form-group label {
            color: #FFD700;
            font-size: 16px;
        }
        .alert {
            text-align: center;
        }
        .form-control {
            border-radius: 5px;
            height: 40px;
            font-size: 15px;
        }
        .btn {
            background-color: #FFD700;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #FFC300;
        }
        a {
            color: #FFD700;
        }
        a:hover {
            color: #FFC300;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>

        <?php if (!empty($error_message)) { ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php } ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="register">Register</button>
        </form>
    </div>
</body>
</html>
