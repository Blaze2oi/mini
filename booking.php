<!DOCTYPE html>
<html lang="en">
<head>
    


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="booking.css">
    <nav>       <ul>
                <li><a href="http://localhost/mini/web.php">Home</a></li>
            </ul>

        </nav>
    <title>Input Form</title>
</head>
<body>
    <form method="POST" action="booking.php">

        <h2>Book an Appointment</h2>

        <label for="email">Doctor Email:</label>
        <input type="email" name="email"><br>

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="number">Your Number:</label>
        <input type="text" id="number" name="number" required><br>

        <label for="uemail">Your Email:</label>
        <input type="text" id="uemail" name="uemail" required><br>

        <label for="time">Time slot:</label>
        <input type="text" id="time" name="time" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
        
        include("connect.php");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $doctor = $_POST['email'];
            $user = $_POST['name'];
            $number = $_POST['number'];
            $uemail = $_POST['uemail'];
            $timeslot = $_POST['time'];
        
            $sql = "INSERT INTO `appointments` (`doctor`, `user`, `timeslot`, `number`, `uemail`) VALUES ('$doctor', '$user', '$timeslot', '$number', '$uemail')";            
            $data = mysqli_query($conn, $sql);
        
            if ($data) {
                echo "1";
            } else {
                echo "Failed";
            }
        }
        
?>
