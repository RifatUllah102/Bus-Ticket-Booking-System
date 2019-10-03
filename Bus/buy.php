<?php
   include("Config.php");
   session_start();
   ?>
<html>
<head>
<title>Buy ticket </title>
</head>
<body bgcolor="#CCCCCC">
<?php
   include("Config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $Name = mysqli_real_escape_string($db,$_POST['Name']);
      $Age = mysqli_real_escape_string($db,$_POST['Age']);
	  $Email = mysqli_real_escape_string($db,$_POST['Email']);
      $Phone = mysqli_real_escape_string($db,$_POST['Phone']);
	  $seat1 = mysqli_real_escape_string($db,$_POST['seat']);
	  
	  $Source = $_POST['source1'];
	  $D= $_POST['dest'];
	  $da= $_POST['Date'];
	  $T= $_POST['Time'];
	  $TY=$_POST['type'];
	  $B= $_POST['BusNo'];
	  $a='NOT';
	  }
	 $sql = "INSERT INTO tricket (source,Dest,Date,Time,BusNo,Type,Name,Age,Email,Phone,seat,pyment)VALUES ('$Source','$D','$da','$T','$B','$TY', '$Name','$Age','$Email','$Phone','$seat1','$a')"; 
	 
	 if ($db->query($sql) === TRUE) 
	 {
	    
       $sql="SELECT * FROM  businfo WHERE BusNo='$B' and Date='$da'";
	   $result=$db->query($sql);
	 while($row = mysqli_fetch_array($result))
     {
     $avile=$row["Avile"];
	 $m=$avile-1;
	 $sql="UPDATE businfo SET Avile='$m' WHERE Busno='$B' and Date='$da'";
	  if ($db->query($sql) === TRUE) 
	 {
	 
	  include("final.php");

     }
     }
     }
?>
</body>
</html>