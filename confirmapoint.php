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

        <h2>Confirm Appointment</h2>

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="number">Time slot:</label>
        <input type="text" id="number" name="number" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
        
        include("connect.php");
        $Email = $_GET['Email'];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $doctor = $_POST['email'];
            $user = $_POST['name'];
            $timeslot = $_POST['number'];
        
            $sql = "INSERT INTO `appointments` (`doctor`, `user`, `timeslot`) VALUES ('$doctor', '$user', '$timeslot')";            
            $data = mysqli_query($conn, $sql);
        
            if ($data) {
                echo "1";
            } else {
                echo "Failed";
            }
        }
        
?>
