<?php

require("connection.php");

session_start();

if (isset($_POST['submit'])){

  $comment=$_POST['comm'];
  $id = isset($_GET['id']) ? $_GET['id'] : '';


     // $sql1="SELECT username FROM table_login where id='$id'";
     // $qry1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
     // $row = mysqli_fetch_array($qry1);
     // $username = $row['username'];

     $username = $_SESSION["user"];



    $sql3="INSERT INTO `comment_section` (username,comment, q_id) VALUES('$username','$comment','$id')";
    $qry3 = mysqli_query($con,$sql3) or die(mysqli_error($con));

    echo "<script type='text/javascript'>window.location='./message.php?id=$id';</script>";

}


?>
