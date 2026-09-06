<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $contact = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
        'timestamp' => date("Y-m-d H:i:s")
    ];

    // JSON file path
    $file = 'contacts.json';

    // Check if file exists, then decode current data
    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    } else {
        $data = [];
    }

    
    $data[] = $contact;

    
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

   
    echo '<div style="text-align: center; margin-top: 20px; font-size: 18px; color: green;">
            Contact information saved successfully!
          </div>';
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
            background-color:rgb(152, 152, 63);
            background-image: url('images/BG.JPG'); 
          
    }
    .contact-container {
            width: 40%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="contact-container">
    <div class="popup" id="success-popup">
    <h3>THANK YOU  </h3>
    <p>. We will Reach you soon.</p>
    <button onclick="window.location.href='index.php'"> OK</button>
</div>
</div>
