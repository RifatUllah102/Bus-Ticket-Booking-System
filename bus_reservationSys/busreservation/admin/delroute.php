<?php

include('../db.php');
if($_POST['del_route'])
{
    $id=$_POST['del_route'];
    $sql = "delete from route where route_id='$id'";
    mysql_query( $sql);
    header("location: routes.php");
}

?>