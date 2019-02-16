<?php

require("connection.php");


  session_start();

if (isset($_POST['submit'])){

  $title=$_POST['qutitle'];
  $description=$_POST['description'];

  $log = "SELECT * FROM question Where title = '$title'";
  $logResult = mysqli_query($con, $log);

  if(mysqli_num_rows($logResult) > 0){
      echo "<script type='text/javascript'>alert('Question already exist');window.location='./startdiscussion.php';</script>";
  }

  else{

    $user =   $_SESSION["user"];

    $sql1="INSERT INTO `question` (title,description,username,likes,dislikes,flags)
                           VALUES('$title','$description','$user',0 ,0 ,0)";
    $qry1 = mysqli_query($con,$sql1) or die(mysqli_error($con));

    $sql2="SELECT username,id FROM question where title='$title'";
    $qry2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
    $row = mysqli_fetch_array($qry2);

    $username = $row['username'];
    $id= $row['id'];

    // $sql3="INSERT INTO `comment_section` (username,comment, q_id) VALUES('$username',NULL,'$id')";
    // $qry3 = mysqli_query($con,$sql3) or die(mysqli_error($con));

  }

  echo "<script type='text/javascript'>window.location='./message.php?id=$id';</script>";


}


?>
