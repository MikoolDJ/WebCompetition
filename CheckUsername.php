<?php

$Uname = $_SESSION['username'];

$log = "SELECT * FROM details Where username = '$Uname'";
$logResult = mysqli_query($conn, $log);

   if(mysqli_num_rows($logResult) > 0){

       echo "<script type='text/javascript'>alert('invalid Username or password');window.location='./Nextlogin1.php';</script>"

   }

   else{



   }




?>
