<?php
// session_start();
include("connect.php");
$Email = $_GET['Email'];
// error_reporting(0);
// $userprofile = $_SESSION['user_name'];
// if($userprofile == true)
$query = "SELECT * FROM `appointments` WHERE doctor = '$Email'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment request Details</title>
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
    <nav>       <ul>
                <li><a href="http://localhost/mini/web.php">Home</a></li>
            </ul>

        </nav>
</head>
<body>
    <h1>Appointment request Details</h1>
	
    <table border="1">
        <tr>
        <th>Patient name</th>
        <th>Patient number</th>
        <th>Patient Email</th>
	    <th>Time slot</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>$result[user].</td>
              <td>$result[number].</td>
              <td>$result[uemail].</td>
              <td>$result[timeslot].</td>
              </tr>";
    }
}
else
{
    echo "No records found";
}
?>