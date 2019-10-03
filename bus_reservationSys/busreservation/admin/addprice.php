<?php
include('../db.php');
$route=$_POST['route'];
$class=$_POST['class'];
$price=$_POST['price'];
$update=mysql_query("INSERT INTO price (route_id, class, price) 
VALUES ('$route','$class','$price')");
header("location: prices.php");
?>
