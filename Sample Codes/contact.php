<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myonlinestore.sql');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$address= $_POST['address'];
$mobile= $_POST['mobile'];

// database insert SQL code
$sql = "INSERT INTO `profile` (`username`, `password`,`firstname`, `lastname`,`mobile`, `address`, `email`)  VALUES ('$username', '$password', '$email','$firstname', '$lastname', '$address', '$mobile' )";

// insert in database 
$rs = mysqli_query($con, $sql);


?>