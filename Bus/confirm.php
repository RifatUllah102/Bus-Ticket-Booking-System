<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
include("Config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $txid2 = mysqli_real_escape_string($db,$_POST['txid1']);
 $dat = mysqli_real_escape_string($db,$_POST['day']);
 $busno = mysqli_real_escape_string($db,$_POST['busno']);
 $seat = mysqli_real_escape_string($db,$_POST['seat']);
$sql="SELECT * FROM tid WHERE txid='$txid2'";
$result = $db->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {	
     $sql = "UPDATE tricket SET pyment='YES' WHERE Busno='$busno' and Date='$dat' and seat='$seat'";
     if ($db->query($sql) === TRUE) 
	 {
	 $sql="SELECT * FROM tricket WHERE BusNo='$busno'and Date='$dat' and seat='$seat' ";
	 $result=$db->query($sql);
	 while($row = mysqli_fetch_array($result))
{
echo "Name:" . $row['Name'] . "<br/>";
echo "Phone:" . $row['Phone'] . "<br/>";
echo "Email:" . $row['Email'] . "<br/>";
echo "Seat:" . $row['seat'] . "<br/>";
echo "Source:" . $row['source'] . "<br/>";
echo "Destrination:" . $row['Dest'] . "<br/>";
echo "Bus No:" . $row['BusNo'] . "<br/>";
echo "Date:" . $row['Date'] . "<br/>";
echo "Time:" . $row['Time'] . "</br/>";
}


}
	 
		
else {
    echo "Wrong txid";
       }
	  
       
		  
}
	}
	
?>
<button onClick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>
