<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Txid input</title>
</head>

<body>
<form action="" method="post">
<label>Phone No:</label>
<input type="text" name="phn"required/>
<label>TxId:</label>
<input type="text" name="txid"required/>
<input type="submit" value="Input"/>

</form>
</body>
</html>
<?php
include("Config.php");
   //session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $s = mysqli_real_escape_string($db,$_POST['phn']); 
	  $d = mysqli_real_escape_string($db,$_POST['txid']);
	  
	 $sql = "INSERT INTO tid (phone,txid) VALUES ('$s', '$d')"; 
	 
	 if ($db->query($sql) === TRUE) {
	 echo "succesfully Add Code";
    
       }
	    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      } 
}

?>

