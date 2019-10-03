<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');
if($_POST['del_user'])
{
    $id=$_POST['del_user'];
    $sql = "delete from user where user_id='$id'";
    mysql_query( $sql);
    header("location: users.php");
}

?>