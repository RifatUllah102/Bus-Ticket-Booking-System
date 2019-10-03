<?php
$ticket_id=$_GET['ticketid'];
include('db.php');

$ticket_query = mysql_query("Select * from ticket where ticket_id='$ticket_id'");

while ($prow = mysql_fetch_array($ticket_query))
{
    $route = $prow['route_id'];
    $bus = $prow['bus_id'];
    $date = $prow['dept_date'];
    $seats = $prow['seats'];
}

$ticket_seats = $seats;

$result = mysql_query("SELECT * FROM bus Where dep_date = '$date' AND bus_id = '$bus' AND route_id='$route'");

while ($row = mysql_fetch_array($result))
{
    $reserved = $row['res_seat'];
}

$all_reserved = str_replace($ticket_seats,'',$reserved);

mysql_query("Delete From Ticket Where ticket_id='$ticket_id'");

mysql_query("Update bus Set res_seat = '$all_reserved' Where bus_id='$bus' and route_id='$route'");

header("location: tickethistory.php");

?>
