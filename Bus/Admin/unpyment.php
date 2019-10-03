<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../style.css">
<title>Bus info</title>
</head>

<body bgcolor="#999999">
<h1 align="center" >HANIF ENTERPRISE</h1>

<ul>
<li><a href="Addbus.php"><h2>Add Bus</h2></a></li>
<li><a href="businfo.php"><h2>Show Full info of any bus</h2></a></li>
<li><a href="showreqst.php"><h2>Economical Information</h2></a></li>
<li><a href="Logout.php"><h2>Log out</h2></a></li>
</ul>
<a href="adminpage.php"><img src="bus.png"  height="42" width="42" align="middle"/></a>
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
	 
$sql = "SELECT * FROM  tricket WHERE BusNO='$s' and Date='$d' and pyment='NOT'";
$result = $db->query($sql);

echo "<table border='1' width='100%'>
<tr>
<th>Source</th>
<th>Dest</th>
<th>Date</th>
<th>Time</th>
<th>TYPE</th>
<th>Bus no</th>
<th>Name</th>
<th>Age</th>
<th>Email</th>
<th>Phone</th>
<th>Seat</th>
<th>Pyment</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['source'] . "</td>";
echo "<td>" . $row['Dest'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";
echo "<td>" . $row['BusNo'] . "</td>";
echo "<td>" . $row['Type'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Phone'] . "</td>";
echo "<td>" . $row['seat'] . "</td>";
echo "<td>" . $row['pyment'] . "</td>";

echo '<form method="post" action="dlt.php">
               <input type="hidden" name="date" value='.$row['Date'].'>
				<input type="hidden" name="busno" value='.$row['BusNo'].'>
                <input type="hidden" name="seat" value='.$row['seat'].'>
                <td><input type="submit" name="decline" value="Decline Request" >';   
            }
                echo '</form>';
				echo "</tr>";
echo "</table>";
}



?>