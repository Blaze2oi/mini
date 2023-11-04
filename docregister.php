<?php  include("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Doctor Registration Form</title>
    <link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Young Serif:400,700&display=swap">

</head>

<body>
        <div class="container">
            <form action="docregister.php" method="post">
            <center>
                <h1>Registration Form</h1>
            </center>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" placeholder="Name" maxlength="32" required>
            </div>
            <!-- <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname" maxlength="32" required>
            </div> -->
            <!-- <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div> -->
            <div class="form-group">
              <label for="Number">Phone no:</label>
              <div class="phone-input">
              <input type="tel" id="Number" name="Number" placeholder="+91" maxlength="10" required>
              </div>
          </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" id="male" value="Male" name="Gender" required>
                <label for="male">Male</label>
                <input type="radio" id="female" value="Female" name="Gender" required>
                <label for="female">Female</label>
                <input type="radio" id="other" value="Other" name="Gender" required>
                <label for="other">Other</label>
            </div>

            <div class="form-group">
                <label for="hospitalname">Clinic/Hospital's Name:</label>
                <input type="text" id="hospitalname" name="hospitalname" placeholder="hospitalname" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="location1">Address:</label>
                <textarea id="location1" name="location1" cols="80" rows="5" placeholder="Address of your clinic/hospital" required></textarea>
            </div> 
           
            <div class="form-group">
                <label for="Locationmain">City:</label>
                <input type="text" id="Locationmain" name="Locationmain" placeholder="city" maxlength="32" required>
            </div>

            <div class="form-group">
                <label for="yearsofexp">Years of Experience:</label>
                <input type="text" id="yearsofexp" name="yearsofexp" cols="80" rows="2" placeholder="YOE in your field" required>
            </div>

            <div class="form-group">
                <label for="Speciality">Speciality:</label>
                <input type="text" id="Speciality" name="Speciality" placeholder="Speciality" maxlength="32" required>
            </div>

            <div class="form-group">
                <label for="timeslot">Avaliable time slots</label>
                <input type="text" id="timeslot" name="timeslot" cols="20" rows="6" placeholder="time slots" required>
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="Email" id="Email" name="Email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
              <label for="Password">Password:</label>
              <input type="Password" id="Password" name="Password" placeholder="Enter Password" required>
              <span id="password-error" class="error-message"></span>
            </div>
          
            <!-- <div class="form-group">
                <label for="passwordRepeat">Re-type Password:</label>
                <input type="password" id="passwordRepeat" name="passwordRepeat" placeholder="Retype Password" minlength="8" required>
            </div> -->
            <div class="form-group">
                <button type="submit" class="registerbtn" name="register">Register</button>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
</form>
<label>Registered already? </label>
    <div class="regi" ><a href="http://localhost/mini/login1.php" style="text-decoration: none; color:blue;"><b>login for Users</b></a><br></div>
      <div class="regi" ><a href="http://localhost/mini/doclogin.php" style="text-decoration: none; color:blue;"><b>login for doctors</b></a><br></div>
 
</body>

</html>

<?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
           
            $Name     = $_POST['Name'];
            $Number    = $_POST['Number'];
            $Gender   = $_POST['Gender'];
            $hospitalname   = $_POST['hospitalname'];
            $location1   = $_POST['location1'];
            $Locationmain   = $_POST['Locationmain'];
            $yearsofexp   = $_POST['yearsofexp'];
            $Speciality   = $_POST['Speciality'];
            // $Address  = $_POST['Address'];
            $Email    = $_POST['Email'];
            $Password = $_POST['Password'];
            $timeslot = $_POST['timeslot'];

            $sql = "INSERT INTO `doctors` (`Name`, `Number`, `Gender`, `hospitalname`, `location1`, `Locationmain`, `yearsofexp`, `Speciality`, `Email`, `Password`, `timeslot`) VALUES ('$Name', '$Number', '$Gender ', '$hospitalname', '$location1', '$Locationmain', '$yearsofexp', '$Speciality','$Email', '$Password', '$timeslot')";
            $data = mysqli_query($conn, $sql);

            if($data)
            {
                echo "Data inserted";
            }
            else
            {
                echo "Failed";
            }
        }
?>