<?php
include('../db.php');
//if($_POST['delpric'])
//{
//    $id=$_POST['delpric'];
//    echo $id;
//    $sql = "delete from price where price_id='$id'";
//    mysql_query( $sql);
//    header("location: prices.php");
//}

$id=$_POST['delpric'];
echo $id;
$sql = "delete from price where price_id='$id'";
mysql_query( $sql);
header("location: prices.php");

?>