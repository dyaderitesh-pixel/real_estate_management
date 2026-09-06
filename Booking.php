<?php
session_start(); // Make sure to start the session

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); 
    exit();
}
if (isset($_SESSION['profile_created']) && $_SESSION['profile_created'] === true) {
    header("Location: booking.php?villa=LuxuryVilla"); // Or any other villa param
    exit();
}



$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db = "real estate management";
    $user = "root";
    $pass = "";

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $PROPERTYNAME = isset($_POST['villa-name']) ? $_POST['villa-name'] : '';
    $NAME         = $_POST['full-name'];
    $EMAIL        = $_POST['email'];
    $PHONE        = $_POST['phone'];
    $DATE         = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO boooking (PROPERTYNAME, NAME, EMAIL, PHONE, DATE) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $PROPERTYNAME, $NAME, $EMAIL, $PHONE, $DATE);

    if ($stmt->execute()) {
        $success = true;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

$villa_name = isset($_GET['villa']) ? htmlspecialchars($_GET['villa']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Your Villa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            background-image: url('images/BG.JPG'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .booking-container {
            width: 40%;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .booking-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-submit {
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit:hover {
            background: #219150;
        }

        .popup {
            display: <?php echo $success ? 'block' : 'none'; ?>;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-align: center;
            z-index: 1000;
        }

        .popup h3 {
            color: #27ae60;
        }

        .popup button {
            background: #219150;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="booking-container">
    <h2>Book Your Luxury Villa</h2>
    <form method="POST" action="">
        <label for="villa-name">Villa Name:</label>
        <input type="text" id="villa-name" name="villa-name" value="<?php echo $villa_name; ?>" readonly class="form-control">

        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full-name" required class="form-control">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required class="form-control">

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required class="form-control">

        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="date" required class="form-control">

        <button type="submit" class="btn-submit mt-3">Confirm Booking</button>
    </form>
</div>

<!-- Success Popup -->
<div class="popup" id="success-popup">
    <h3>🎉 Booking Successful!</h3>
    <p>Your villa booking has been confirmed. We will contact you soon.</p>
    <button onclick="window.location.href='index.php'">OK</button>
</div>

</body>
</html>
