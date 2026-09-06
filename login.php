<?php
session_start(); // Start a session to track login status

$error_message = ""; // Initialize error message variable
$success_message = ""; // Initialize success message variable 

// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: profile.php"); // Redirect to profile page if logged in
    exit;
}

// Display success message from registration, if exists
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // Clear the message after displaying
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Load users from the file
    if (file_exists('users.json')) {
        $fileContents = file_get_contents('users.json');
        $users = json_decode($fileContents, true);

        if ($users && isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
            // Store user details in session
            $_SESSION['loggedin'] = true;
            $_SESSION['user_info'] = $users[$username];
            header("Location: profile.php");
            exit;
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "User data file not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/image12.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #FFD700;
        }
        .alert {
            text-align: center;
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 16px;
            color: #FFD700;
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
        p {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="main-content">
        <div class="login-container">
            <h2>Login</h2>

            <?php if (!empty($error_message)) { ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error_message); ?>
                </div>
            <?php } ?>

            <?php if (!empty($success_message)) { ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars($success_message); ?>
                </div>
            <?php } ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn" name="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
