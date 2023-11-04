<?php
// session_start();
include("connect.php");
// error_reporting(0);
// $userprofile = $_SESSION['user_name'];
// if($userprofile == true)
$query = "SELECT * FROM DOCTORS";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Registration Details</title>
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
</head>
<body>
    <h1>Doctor Registration Details</h1>
	
    <table border="1">
        <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Gender</th>
        <th>hospitalname</th>
        <th>Address of clinic/hospital</th>
	    <th>City</th>
        <th>Years of Experience</th>
        <th>Speciality</th>
	    <th>Email</th>
        <th>Avaliable time slot</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>$result[Name]<x/td>
              <td>$result[Number]</td>
	          <td>$result[Gender]</td>
              <td>$result[hospitalname]</td>
              <td>$result[location1]</td>
	          <td>$result[Locationmain]</td>
              <td>$result[yearsofexp]</td>
              <td>$result[Speciality]</td>
	          <td>$result[Email]</td>
              <td>$result[timeslot]</td>
              </tr>";
        // echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
    }
}
else
{
    echo "No records found";
}
?>