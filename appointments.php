<?php
// session_start();
include("connect.php");
// error_reporting(0);
// $userprofile = $_SESSION['user_name'];
// if($userprofile == true)
$Email = $_GET['Email'];
$query = "SELECT FROM DOCTORS WHERE Email = '$Email' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Registration Details</title>
    <link rel="stylesheet" href="user_display.css?v=<?php echo time(); ?>">
</head>
<body>
    <h1>Doctor Registration Details</h1>
	
    <table border="1">
        <tr>
        <th>Patient name</th>
	    <th>Patient number</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>$result[appointment_name].</td>
              <td>$result[appointment_number].</td>
              </tr>";
        // echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
    }
}
else
{
    echo "No records found";
}
?>