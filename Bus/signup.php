<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign up</title>
</head>

<body bgcolor="#CCCCCC">
<h1 align="center" >HANIF ENTERPRISE</h1>
<br /><br /><br />
<h3 align="center">User Registation</h3>

<form method="post" align="center">
<label>Name</label><br />
<input type="text" name="Name" required/><br />
<label>Email</label><br />
<input type="Email" name="Email" required/><br />
<label>Phone No:</label><br />
<input type="text" name="Phone" required/><br />
<label>Password</label><br />
<input type="password" name="Password" required/><br />
<input type="submit" value="submit" />
</form>
<?php
include("Config.php");
   //session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $s = mysqli_real_escape_string($db,$_POST['Name']); 
	  $d = mysqli_real_escape_string($db,$_POST['Email']);
	  $date = mysqli_real_escape_string($db,$_POST['Phone']);
	  $t = mysqli_real_escape_string($db,$_POST['Password']);
	  
	 $sql = "INSERT INTO User (Name,Email,Phone,Password) VALUES ('$s', '$d','$date','$t')"; 
	 
	 if ($db->query($sql) === TRUE) {
    echo "You can login No";
	echo "<a href='signin.php'>Login Now </a>";

       }
	    else {
    echo "Email Exist";
      } 
}

?>
 <a href="Home.php"><h3 align="center" > Back Home  </h3></a>
</body>
</html>
