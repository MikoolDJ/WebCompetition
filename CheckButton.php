<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION["login"] == "OK") {


  echo "<script type='text/javascript'>window.location='./startdiscussion.php';</script>";

}


else {

  echo "<script type='text/javascript'>alert('Please Login First');window.location='./login1.php';</script>";
}

?>
