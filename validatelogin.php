<?php

  session_start();

  require('connection.php');

  if (isset($_POST['submit'])){



    $Uname = $_POST['username'];
    $password = $_POST['password'];



    $log = "SELECT * FROM details Where username = '$Uname' and password = '$password'";
    $logResult = mysqli_query($conn, $log);


    if(mysqli_num_rows($logResult) < 1){
      echo "<script type='text/javascript'>alert('invalid Username or password');window.location='./login1.php';</script>";
    }
    else
    {
      // echo "you are logged in";
      // window.alert("you are logged in");
      $_SESSION["login"] = "OK"  ;
      $_SESSION["user"] = $Uname;


      header('Location:./homepage.php');

    }
  }
  ?>
