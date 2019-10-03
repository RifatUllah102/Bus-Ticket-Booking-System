<!DOCTYPE html>

<html lang="en">

<head>
  <title>Simple Bus Reservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <script src="lib/jquery-3.2.0.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
<style>
	
header
	{
     background-image: url("header.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    padding:0.30em;
    clear: left;
    text-align: center;
	}
	

	</style>
	
  </head>
  
<header>

<img src="bus1.png" style="width:400px; height:120px;">
<h1 style="color:pink; font-family:andalus; font-weight:bold;">National Travels Bangladesh</h1>

</header>

<body style="background-color:#85929E";>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="index.php"><img src="home.png" style="width:35px;height:35px;border:0;">Home</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="gallery.php"><img src="gallery.png" style="width:35px;height:35px;border:0;">Gallery</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="history.php"><img src="history.png" style="width:35px;height:35px;border:0;">History</a></li>
                <li class="active" style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="route.php"><img src="route.png" style="width:35px;height:35px;border:0;">Routes</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="location.php"><img src="location.png" style="width:35px;height:35px;border:0;">Location</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="contact.php"><img src="contact.png" style="width:35px;height:35px;border:0;">Contact Us</a></li>
            </ul>
        </div>

</div>
</nav>

<div class="container">
  <h2>Bus Schedule</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th style="color:#00FF7F; font-weight:bold; font-family:andalus; font-size:35px;">Routes</th>
        <th style="color:#00FF7F; font-weight:bold; font-family:andalus; font-size:35px;">Timings</th>
        <th style="color:#00FF7F; font-weight:bold; font-family:andalus; font-size:35px;">Available Buses</th>
      </tr>
    </thead>
    <tbody>
           
      <tr class="success" style="height:100px;">
        <td style="color:red; font-size:30px; fond weight:bold;">Dhaka-Chittagong</td>
        <td style="color:red; font-size:30px; fond weight:bold;">10.00<br>10.15</td>
        <td><img src="greenline.png" style="width:150px;height:45px;border:0;"><br><img src="shohag.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
      <tr class="danger" style="height:100px;">
        <td style="color:blue; font-size:30px; fond weight:bold;">Dhaka-Rajshahi</td>
        <td style="color:blue; font-size:30px; fond weight:bold;">11.30<br>11.50</td>
        <td><img src="sa.png" style="width:150px;height:45px;border:0;"><br><img src="desh.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
      <tr class="info" style="height:150px;">
        <td style="color:green; font-size:30px; fond weight:bold;">Dhaka-Sylhet</td>
        <td style="color:green; font-size:30px; fond weight:bold;">12.30<br>12.50<br>12.55</td>
        <td><img src="unique.png" style="width:150px;height:45px;border:0;"><br><img src="shymoli.png" style="width:150px;height:45px;border:0;"><br><img src="sakura.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
      <tr class="warning">
        <td style="color:#F1C40F; font-size:30px; fond weight:bold;">Dhaka-Bogra</td>
        <td style="color:#F1C40F; font-size:30px; fond weight:bold;">14.00<br>15.15</td>
        <td><img src="greenline.png" style="width:150px;height:45px;border:0;"><br><img src="saint.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
      <tr class="info" style="height:150px;">
        <td style="color:#9B59B6; font-size:30px; fond weight:bold;">Dhaka-Cox's Bazar</td>
        <td style="color:#9B59B6; font-size:30px; fond weight:bold;">18.30<br>18.50<br>19.55</td>
        <td><img src="sa.png" style="width:150px;height:45px;border:0;"><br><img src="shymoli.png" style="width:150px;height:45px;border:0;"><br><img src="unique.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
	  <tr class="success" style="height:100px;">
        <td style="color:#19F07C; font-size:30px; fond weight:bold;">Dhaka-Rajshahi</td>
        <td style="color:#19F07C; font-size:30px; fond weight:bold;">20.30<br>21.50</td>
        <td><img src="desh.png" style="width:150px;height:45px;border:0;"><br><img src="sakura.png" style="width:150px;height:45px;border:0;"></td>
      </tr>
    </tbody>
  </table>
</div>

</body>

<footer class="container-fluid text-center" style="background-color:#58D68D;">
    <h4 style="font-family:andalus; font-weight:bold; font-size:25px;">+01XXX-XXXXXX &bull; <a href="contact.php">Mirpur, Dhaka-1211</a></h4>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">&copy; Copyright 2017 Simple Bus Reservation | All Rights Reserved <br /></p>
    </footer>
</html>

