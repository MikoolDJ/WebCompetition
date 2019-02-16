<?php

require_once('connection.php');


$Uname = $_POST["Uname"];
$email = $_POST["email"];

$log = "SELECT * FROM details Where username = '$Uname'";
$logResult = mysqli_query($conn, $log);

$Equery = "SELECT * FROM details Where email = '$email'";
$Eresult = mysqli_query($conn, $Equery);

   if(mysqli_num_rows($logResult) > 0){
       echo "<script type='text/javascript'>alert('invalid Username');window.location='./signup-page.php';</script>";

    exit();
   }

   else if (mysqli_num_rows($Eresult) > 0) {

     echo "<script type='text/javascript'>alert('Email already exists');window.location='./signup-page.php';</script>";
     exit();
    }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get personalised contents</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <?php
    require_once('connection.php');
            session_start();
            ?>


            <?php

            require_once('connection.php');

            if (isset($_POST['submit']))
            {

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $Uname = $_POST["Uname"];
                $gender = $_POST["gender"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                 $_SESSION["firstname"] = $fname;
            $_SESSION["lastname"] = $lname;
            $_SESSION["username"] = $Uname;
            $_SESSION["gender"] = $gender;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $pass;
            }








           // echo $fname." ". $lname." ".$gender." ".$email." ".$pass;
            ?>
    <div class="container">
      <form class="login-form" action="Nextlogin2.php" method="post">
        <div class="thumbnail">
          <img src="images/logo.png" alt="logo">
          <hr>
        </div>
        <div class="form-group">
          <label for="university"> University</label>
          <input type="text" name="university" id="university" class="form-control" placeholder="Enter your university name" required>
        </div>
        <div class="form-group">
          <label for="universityemail"> University email</label>
          <input type="email" name="universityemail" id="universityemail" class="form-control" placeholder="Enter your university email" required>
        </div>
        <div class="form-group">
          <label for="studyfield"> Field of study</label>
          <input type="text" name="studyfield" id="studyfield" class="form-control" placeholder="Enter the field you're studying" required>
        </div>
        <div class="form-group">
          <label for="course-name"> Course name</label><br>
          <input type="text" name="coursename" id="coursename" class="form-control" placeholder="Enter your current course name" required>
        </div>
        <div class="form-group">
          <label>Year of study</label><br>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="level1" name="level" class="custom-control-input" value="1">
            <label class="custom-control-label" for="level1">Level 1</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="level2" name="level" class="custom-control-input" value="2">
            <label class="custom-control-label" for="level2">Level 2</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="level3" name="level" class="custom-control-input" value="3">
            <label class="custom-control-label" for="level3">Level 3</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="level4" name="level" class="custom-control-input" value="4">
            <label class="custom-control-label" for="level4">Level 4</label>
          </div>
        </div>
        <div class="form-group">
          <select class="form-group custom-select" name="qualification">
            <option selected>Choose your actual qualification</option>
            <option value="Hsc">Higher Certificate</option>
            <option value="Diploma">Diploma</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Honours Degree">Honours Degree</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="Doctoral Degree">Doctoral Degree</option>
          </select>
        </div>

        <div class="form-group">
          <label for="studyfield"> Interests</label>
          <input type="text" name="interest" id="studyfield" class="form-control" placeholder="your interests">
        </div>
        <div class="form-group align-right">
          <button type="submit" name="button" class="btn btn-lg btn-outline-success">Submit</button>
        </div>
      </form>
    </div>

      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="bootstrap.js"</script>
  </body>
</html>
