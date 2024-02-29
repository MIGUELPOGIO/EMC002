<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myonlinestore');

// get the post records
$uname = $_POST['uname'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `profile` (`username`, `password`) VALUES ('$uname', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);



?>