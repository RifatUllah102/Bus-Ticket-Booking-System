<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin page</title>
<link rel="stylesheet" href="../style.css">
</head>

<body bgcolor="#CCCCCC">
<h1 align="center" >HANIF ENTERPRISE</h1>
<ul>
<li><a href="Addbus.php"><h2>Add Bus</h2></a></li>
<li><a href="businfo.php"><h2>Show Full info of any bus</h2></a></li>
<li><a href="unpyment.php"><h2>unpyment</h2></a></li>
<li><a href="calculation.php"><h2>Economical Information</h2></a></li>
<li><a href="txid.php"><h2>Add Txid</h2></a></li>
<li><a href="Logout.php"><h2>Log out</h2></a></li>
</ul>
Welcome <?php echo $_SESSION['name']; ?>
</body>
</html>
