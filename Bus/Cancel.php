<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<title>Cencel ticket</title>
</head>
<body bgcolor="#CCCCCC">
<ul>
<li><a href="Cancel.php">Cancel Ticket</a></li>
 <li><a href="final.php">Confirm Ticket</a></li>
 <li><a href="logout.php">Log Out</a></li>
</ul>
<form action="" method="post">
<label>Email</label><br>
<input type="email" name="email"/><br>
<lable>Seat No</label><br>
<input type="text" name="seat"/><br>
<label>Date</label><br>
<input type="date" name="date"/><br>
<input type="submit" value="Cancle"/><br>
</form>

</body>
</html>
<?php
   include("Config.php");
  // session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $Date1 = mysqli_real_escape_string($db,$_POST['date']);
      $seat1 = mysqli_real_escape_string($db,$_POST['seat']);
	  $Email1 = mysqli_real_escape_string($db,$_POST['email']);
	  
	  $sql="DELETE FROM tricket WHERE Email='$Email1' and Date='$Date1' and seat='$seat1'";
	  if ($db->query($sql) === TRUE) {
    echo "Ticket Cancel";
} else {
    echo "No record " ;
}
	  
	  
	  }
	  ?>