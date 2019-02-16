

 <?php

 $conn = mysqli_connect('localhost','root','','webcup');

 if(!$conn)
 {
     die("connection failed" .mysqli_connect_error());
 }


$con = mysqli_connect('localhost', 'root', '');
if (!$con){
    die("Database Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con, 'webcup');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($con));

}

?>
