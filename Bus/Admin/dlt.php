<?php
   include("Config.php");
   //session_start();
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
   include("Config.php");
   //session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
	  $da= $_POST['date'];
	  $T= $_POST['seat'];
	  $B= $_POST['busno'];
	  }
	
	  $sql = "DELETE  FROM tricket WHERE BusNo='$B' and Date='$da' and seat='$T'"; 
	 
	 if ($db->query($sql) === TRUE) 
	 {
	    
       $sql="SELECT * FROM  businfo WHERE BusNo='$B' and Date='$da'";
	   $result=$db->query($sql);
	 while($row = mysqli_fetch_array($result))
     {
     $avile=$row["Avile"];
	 $m=$avile+1;
	 $sql="UPDATE businfo SET Avile='$m' WHERE Busno='$B' and Date='$da'";
	  if ($db->query($sql) === TRUE) 
	 {
	 
	  echo "Delete succesfully Done";
	  echo "<a href='unpyment.php'><img src='bus.png'  height='42' width='42' align='middle'/></a>";
	  

     }
     }
     }
	  ?>
</body>
</html>
