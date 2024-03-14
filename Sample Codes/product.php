<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myonlinestore.sql');

// get the post records

// database insert SQL code
$sql = "SELECT* FROM products"


// insert in database 
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_row($rs)
$itemname = $row[0]
$description = $row[1]
$price = $row[2]
$quantity = $row[3] 
echo $itemname

?>