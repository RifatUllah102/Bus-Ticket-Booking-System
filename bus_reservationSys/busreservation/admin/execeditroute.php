<?php
	include('../db.php');
	$route=$_POST['routeid'];
	$src=$_POST['source'];
	$dest=$_POST['dest'];
	mysql_query("UPDATE route SET source='$src', dest='$dest' WHERE route_id='$route'");
	header("location: routes.php");
?>