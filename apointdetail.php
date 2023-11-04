<?php
// session_start();
include("connect.php");
// error_reporting(0);
// $userprofile = $_SESSION['user_name'];
// if($userprofile == true)
$query = "SELECT * FROM `appointments`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Details</title>
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
    <nav>       <ul>
                <li><a href="http://localhost/mini/web.php">Home</a></li>
            </ul>

        </nav>
</head>
<body>
    <h1>Appointment Details</h1>
	
    <table border="1">
        <tr>
        <th>Doctor Email</th>
        <th>Patient Name</th>
        <th>Time Slot</th>
        <th>Confirmation</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>$result[doctor]</td>
              <td>$result[user]</td>
	          <td>$result[timeslot]</td>
              <td>$result[confirmation]</td>
              </tr>";
        // echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
    }
}
else
{
    echo "No records found";
}
?>