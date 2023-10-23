<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="booking.css">
    <title>Input Form</title>
</head>
<body>
        <form method="POST" action="booking.php">

        <label for="email">Doctor Email:</label>
        <input type="email" name="email"><br><br>

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">Your Number:</label>
        <input type="text" id="number" name="number" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
        
        include("connect.php");
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = $_POST['email'];
            $appointment_name = $_POST['name'];
            $appointment_number = $_POST['number'];
        
            $sql = "UPDATE `doctors` SET `appointment_name`='$appointment_name', `appointment_number`='$appointment_number' WHERE `Email`='$email'";
            $data = mysqli_query($conn, $sql);
        
            if ($data) {
                echo "Data inserted";
            } else {
                echo "Failed";
            }
        }
        
?>
