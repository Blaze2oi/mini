<?php
// session_start();
include("connect.php");
// error_reporting(0);
// $userprofile = $_SESSION['user_name'];
// if($userprofile == true)
$query = "SELECT * FROM USERS";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Details</title>
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
    <nav>       <ul>
                <li><a href="http://localhost/mini/web.php">Home</a></li>
            </ul>

        </nav>
</head>
<body>
    <h1>User Registration Details</h1>
	
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
	    <th>Gender</th>
	    <th>Location</th>
	    <th>Email</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>$result[Name]</td>
              <td>+91 $result[Number]</td>
	          <td>$result[Gender]</td>
	          <td>$result[Address]</td>
	          <td>$result[Email]</td>
              </tr>";
        // echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
    }
}
else
{
    echo "No records found";
}
?>