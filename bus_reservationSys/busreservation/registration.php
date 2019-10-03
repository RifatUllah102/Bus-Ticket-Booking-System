<?php
$name = $_POST['name'];
$email= $_POST['email'];
$user_name=$_POST['username'];
$password=$_POST['password'];
$phone_no=$_POST['phone'];
$address=$_POST['address'];

include('db.php');
mysql_query("INSERT INTO USER (user_pass,user_name,name,email,phone_no,u_address)
 VALUES ('$password','$user_name','$name','$email','$phone_no','$address')");

header("location: index.php")

?>