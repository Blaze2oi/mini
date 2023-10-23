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
                <input type="text" id="Name" name="Name" placeholder="Firstname" maxlength="32" required>
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
              <label for="Number">Phone:</label>
              <div class="phone-input">
              <input type="tel" id="Number" name="Number" placeholder="Phone no." maxlength="10" required>
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
                <label for="Location">Location:</label>
                <input type="text" id="Location" name="Location" placeholder="Location" maxlength="32" required>
            </div>

            <div class="form-group">
                <label for="Speciality">Speciality:</label>
                <input type="text" id="Speciality" name="Speciality" placeholder="Speciality" maxlength="32" required>
            </div>
            <!-- <div class="form-group">
                <label for="medicalIssues">Medical Issues:</label>
                <textarea id="medicalIssues" name="medicalIssues" cols="80" rows="2" placeholder="Medical Issues"
                    required></textarea>
            </div> -->
            
            <!-- <div class="form-group">
                <label for="Address">Current Address:</label>
                <textarea id="Address" name="Address" cols="80" rows="5" placeholder="Current Address"
                    required></textarea>
            </div>  -->

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
            $Location   = $_POST['Location'];
            $Speciality   = $_POST['Speciality'];
            // $Address  = $_POST['Address'];
            $Email    = $_POST['Email'];
            $Password = $_POST['Password'];

            $sql = "INSERT INTO `doctors` (`Name`, `Number`, `Gender`, `Location`, `Speciality`, `Email`, `Password`) VALUES (' $Name', ' $Number', '$Gender ', ' $Location', ' $Speciality',' $Email', ' $Password')";
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