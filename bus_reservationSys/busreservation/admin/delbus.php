<?php

include('../db.php');
if($_POST['del_bus'])
{
    $id=$_POST['del_bus'];
    $sql = "delete from bus where bus_id='$id'";
    mysql_query( $sql);
    header("location: buses.php");
}

?>