<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
     
      $count = mysqli_num_rows($result);
	
      if($count == 1) 
	    {
	      
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: adminpage.php");
		 }
		
	  else {
         echo "Your Login Name or Password is invalid";
           }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../style.css">
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<h1 align="center" >HANIF ENTERPRISE</h1>
<h2 align="center" >Login As Admin</h2>
<form  align="center"  action = "" method = "post">
                  <label>Email  :</label><input type = "email" name = "username" class = "box" required/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box"  required/><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
			   <a href="../Home.php"><h3 align="center" > Back Home  </h3></a>
</body>
</html>
