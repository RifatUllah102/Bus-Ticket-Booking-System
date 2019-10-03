<?php
include('../db.php');
$route=$_POST['route'];
$seat=$_POST['seat'];
$types=$_POST['type'];
$dept_date=$_POST['dept_date'];
$dept_time=$_POST['dept_time'];
$update=mysql_query("INSERT INTO bus (route_id, seat_total, type, dep_date, dept_time) 
VALUES ('$route','$seat','$types', '$dept_date', '$dept_time')");
header("location: buses.php");
?>
