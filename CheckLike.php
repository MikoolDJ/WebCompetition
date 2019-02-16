<?php

require("connection.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';


$sql1 = "SELECT likes from question WHERE id='$id'";
$qry1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_array($qry1);
$like = $row['likes'];
$like1 = $like + 1;

$sql2 = "UPDATE question
         SET likes='$like1'
         WHERE id='$id'";

$qry2 = mysqli_query($con, $sql2);

  echo "<script type='text/javascript'>window.location='./message.php?id=$id';</script>";

 ?>
