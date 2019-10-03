<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Seat Booking</title>
</head>

<body bgcolor="#999999">
    <h1 align="center">Please select a Seat.</h1>
  
<div style="float: left;">
<?php
include_once 'seatplan.php';
?>
</div>
<div style="float: center;">
<form  action="buy.php" method="post" >
<label>Select seat</label><br />
<select name="seat">
<option value="A1"  <?php include("Config.php");$sql="SELECT * FROM  tricket WHERE seat='A1' and BusNo='$_POST[busno]' and Date='$_POST[date]'";      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>A1</option>
<option value="A2"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='A2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>A2</option>
<option value="A3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='A3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?> >A3</option>
<option value="A4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='A4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>A4</option>
<option value="B1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='B1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>B1</option>
<option value="B2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='B2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>B2</option>
<option value="B3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='B3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>B3</option>
		 <option value="B4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='B4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>B4</option>
		 <option value="C1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='C1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>C1</option>
<option value="C2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='C2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>C2</option>
<option value="C3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='C3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>C3</option>
		 <option value="C4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='C4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>C4</option>
		 <option value="D1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='D1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>D1</option>
<option value="D2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='D2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>D2</option>
<option value="D3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='D3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>D3</option>
		 <option value="D4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='D4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>D4</option>
		 <option value="E1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='E1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>E1</option>
<option value="E2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='E2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>E2</option>
<option value="E3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='E3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>E3</option>
		 <option value="E4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='E4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>E4</option>
		 <option value="F1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='F1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>F1</option>
<option value="F2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='F2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>F2</option>
<option value="F3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='F3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>F3</option>
		 <option value="F4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='F4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>F4</option>
		 <option value="G1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='G1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>G1</option>
<option value="G2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='G2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>G2</option>
<option value="G3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='G3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>G3</option>
		 <option value="G4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='G4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>G4</option>
		 <option value="H1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='H1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>H1</option>
<option value="H2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='H2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>H2</option>
<option value="H3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='H3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>H3</option>
		 <option value="H4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='H4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>H4</option>
		 <option value="I1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='I1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>I1</option>
<option value="I2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='I2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>I2</option>
<option value="I3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='I3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>I3</option>
		 <option value="I4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='I4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>I4</option>
		 <option value="J1"  <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='J1'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>J1</option>
<option value="J2" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='J2'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>J2</option>
<option value="J3" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='J3'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>J3</option>
		 <option value="J4" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='J4'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>J4</option>
		 <option value="J5" <?php include("Config.php"); $sql="SELECT * FROM  tricket WHERE seat='J5'and BusNo='$_POST[busno]' and Date='$_POST[date]'"; $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
	    {
	     echo "disabled='disabled'";
		 }?>>J5</option>
</select><br />
<label>Name:</label><br />
<input type="text" name="Name" required/><br />
<label>Age:</label><br />
<input type="text" name="Age"required/><br />
<label>Emali:</label><br />
<input type="email" name="Email"required/><br />
<label>Phone No:</label><br />
<input type="text" name="Phone"/><br />
<input type="hidden" name="source1" value="<?php echo $_POST['source'];?>" / ><br>
<input type="hidden" name="dest" value="<?php echo $_POST['desti'];?>"/ ><br>
<input type="hidden" name="Date"  value="<?php echo $_POST['date'];?>"/ ><br>
<input type="hidden" name="Time" value="<?php echo $_POST['time1'];?>"/ ><br>
<input type="hidden" name="BusNo" value="<?php echo $_POST['busno'];?>"/ ><br>
<input type="hidden" name="type" value="<?php echo $_POST['type'];?>"  /><br><br>
<input type="submit" value="submit"/>
</form>
</div>
</body>
</html>
