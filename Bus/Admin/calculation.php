<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../style.css">
<title>Untitled Document</title>
</head>

<body bgcolor="#666666">
<h1 align="center" >HANIF ENTERPRISE</h1>
<ul>
<li><a href="Addbus.php"><h2>Add Bus</h2></a></li>
<li><a href="businfo.php"><h2>Show Full info of any bus</h2></a></li>
<li><a href="calculation.php"><h2>Economical Information</h2></a></li>
<li><a href="Logout.php"><h2>Log out</h2></a></li>
</ul><br /><br />
<form method="POST" action="">
<label>Enter Bus No</label>
<input type="text" name="BusNo" />
<label>Enter Date</label>
<input type="date" name="Date"/>
<input type="submit" value="Search" />
</form>
</body>
</html>
<?php
include("Config.php");
 //session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      $s = mysqli_real_escape_string($db,$_POST['BusNo']);
      $d = mysqli_real_escape_string($db,$_POST['Date']); 
	 
$sql = "SELECT * FROM  businfo WHERE BusNO='$s' and Date='$d'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result))
{

$s= $row['Avile'];
$price=$row['price'];
$sell=40-$s;
$total_sell=$price*$sell;
echo "Total selling price".$total_sell;
}
}
?>