<?php
include("Config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $s = mysqli_real_escape_string($db,$_POST['source']); 
	  $d = mysqli_real_escape_string($db,$_POST['desti']);
	  $date = mysqli_real_escape_string($db,$_POST['date']);
	  $t = mysqli_real_escape_string($db,$_POST['time']);
	   $type = mysqli_real_escape_string($db,$_POST['type']);
	  $seat = mysqli_real_escape_string($db,$_POST['seat']);
	  $busno = mysqli_real_escape_string($db,$_POST['busno']);
	  $pric = mysqli_real_escape_string($db,$_POST['price']);
	  
	 $sql = "INSERT INTO businfo (source,Dest,Date,Time,Type,Avile,BusNo,price) VALUES ('$s', '$d','$date','$t','$type','$seat','$busno','$pric')"; 
	 
	 if ($db->query($sql) === TRUE) {
   // header("location: mangerpage.php");
       }
	    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      } 
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<h1 align="center" >HANIF ENTERPRISE</h1>
<a href="adminpage.php"><img src="bus.png"  height="42" width="42" align="middle"/></a>
<form method="post" align="center">
<label>Source:</label><br />
<input type="text" name="source"  /><br />
<label>Going On:</label><br />
<input type="text" name="desti"  /><br />
<label>Date:</label><br />
<input type="Date" name="date"  /><br />
<label>Time:</label><br />
<input type="text" name="time"  /><br />
<label>Bus Type:</label><br />
<input type="text" name="type"  /><br />
<label>Seat Available:</label><br />
<input type="text" name="seat"  /><br />
<label>Bus No:</label><br />
<input type="text" name="busno"  /><br />
<label>Ticket Price:</label><br />
<input type="text" name="price"  /><br />
<input type="submit" value="submit" />
</form>
</body>
</html>
