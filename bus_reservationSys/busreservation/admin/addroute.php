<?php
include('../db.php');
$source=$_POST['source'];
$destination=$_POST['destination'];
$update=mysql_query("INSERT INTO route (source, dest)
VALUES
('$source','$destination')");
header("location: routes.php");
?>
