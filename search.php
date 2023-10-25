<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Young Serif:400,700&display=swap">
    <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">

</head>

<body>

        <div class="container">
            <form method="post">
            <center>
                <h1>Search for doctors</h1>
            </center>

            <div class="form-group">
                <label for="Location">Location:</label>
                <input type="text" id="Location" name="Location" placeholder="Location" maxlength="32" required>
            </div>

            <div class="form-group">
                <label for="Speciality">Speciality:</label>
                <input type="text" id="Speciality" name="Speciality" placeholder="Speciality" maxlength="32" required>
            </div>

            <div class="form-group">
                <button type="submit" class="registerbtn" name="register">Search</button>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
</form>
</body>
</html>
<?php

include("connect.php");
// ini_set('display_errors','Off');
if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
            $Location   = $_POST['Location'];
            $Speciality   = $_POST['Speciality'];
            echo "Searched for location - $Location. <br>";
            echo "Searched for Speciality - $Speciality. <br>";

        $query = "SELECT * FROM `doctors` WHERE `Location` = '$Location' && `Speciality` = '$Speciality';" ;
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total != 0)
{
 ?>
 
 <h1>No of Doctors found <?php echo $total ?></h1>
	
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
	    <th>Gender</th>
	    <th>Location</th>
        <th>Speciality</th>
	    <th>Email</th>
        </tr>
 
 <?php
 while($result = mysqli_fetch_assoc($data))
 {
     echo "<tr>
           <td>$result[Name]</td>
           <td>$result[Number]</td>
           <td>$result[Gender]</td>
           <td>$result[Location]</td>
           <td>$result[Speciality]</td>
           <td>$result[Email]</td> 
           </tr>";

           
           
     // echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
 }
 echo "Copy the Email of the Doctor you want to send appointment request.";
 ?> <a class="btn" href="http://localhost/mini/booking.php">place Request</a> <?php

}
else
{
 echo "No Doctors of Specified speciality found in specified region.";
}
        }
        
?>

