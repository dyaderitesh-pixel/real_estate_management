<?php
session_start(); // Start session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}


// Ensure user info is set in the session
if (!isset($_SESSION['user_info'])) {
    echo "User info not set in session.";
    exit();
}

// Retrieve user information from session
$username = $_SESSION['user_info']['username'] ?? 'N/A'; // Fallback in case it's not set
$mobile = $_SESSION['user_info']['mobile'] ?? 'N/A'; // Fallback for mobile number

// Load user data from the JSON file to retrieve the courses
$filePath = 'users.json';
$courses = []; // Initialize an empty array for courses

if (file_exists($filePath)) {
    $fileContents = file_get_contents($filePath);
    $users = json_decode($fileContents, true);

    // Check for JSON decode errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Failed to read user data. Please contact support.";
        exit;
    }

    // Check if the user exists in the data
    if (isset($users[$username])) {
        $userInfo = $users[$username];
        $courses = $userInfo['courses'] ?? []; // Get the user's courses or an empty array
    }
} else {
    echo "User data file not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/image12.jpg'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            color: white;
        }
        .container {
            text-align: center;
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px; /* Rounded corners */
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px; /* Increased width for better visibility */
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9); /* Slight transparency for sidebar */
            padding-top: 20px;
            padding-left: 15px;
        }
        .sidebar h2 {
            color: #FFD700; /* Gold color for sidebar heading */
        }
        .sidebar a {
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Slight hover effect */
        }
        .profile-info {
            background-color: rgba(255, 255, 255, 0.1); /* Light background for profile info */
            padding: 15px;
            border-radius: 10px; /* Rounded corners */
            margin-bottom: 20px;
        }
        .content {
            margin-left: 270px; /* Margin to make space for the sidebar */
            padding: 20px;
            color: white;
        }
        .courses {
            margin-top: 20px;
        }
        h1, p {
            color: #FFD700; /* Gold color for headings and text */
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #FFD700;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Profile Info</h2>
        <div class="profile-info">
            <img src="images/profile.jpg" class="profile-img" 
                onerror="this.onerror=null; this.src='https://via.placeholder.com/80';">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
            <p><strong>Mobile:</strong> <?php echo htmlspecialchars($mobile); ?></p>
        </div>
        <h2>Menu</h2>
        <a href="index.php">Home</a>
        <a href="explore.php">EXplore Properties</a>
        
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <div class="container">
            <h1>Welcome to Your Profile</h1>
            <p>Explore your Properties and account details from the sidebar menu.</p>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
