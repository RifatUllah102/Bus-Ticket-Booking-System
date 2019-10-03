<!DOCTYPE html>
<html>
<head>
    <title>Simple Bus Reservation</title>
    <script src="lib/jquery-3.2.0.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="lib/css/bootstrap.css"/>
    <script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
    <link href="lib/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
	<style>
	
	.map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
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

<body style="background-color:#85929E;">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="index.php"><img src="home.png" style="width:35px;height:35px;border:0;">Home</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="gallery.php"><img src="gallery.png" style="width:35px;height:35px;border:0;">Gallery</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="history.php"><img src="history.png" style="width:35px;height:35px;border:0;">History</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="route.php"><img src="route.png" style="width:35px;height:35px;border:0;">Routes</a></li>
                <li class="active" style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="location.php"><img src="location.png" style="width:35px;height:35px;border:0;">Location</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="contact.php"><img src="contact.png" style="width:35px;height:35px;border:0;">Contact Us</a></li>
            </ul>
        </div>

</div>
</nav>

<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1319217698547!2d90.35796121423334!3d23.778316193627873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bc4f8ac7bb%3A0xa31c85590603cd43!2sShyamoli+Paribahan!5e0!3m2!1sen!2s!4v1492838342465" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.134350421801!2d90.35814591423335!3d23.778229693631143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bc7f14cbd7%3A0xa7c527a9792aa56d!2sHanif+Enterprise!5e0!3m2!1sen!2s!4v1492838540425" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<footer class="container-fluid text-center" style="background-color:#58D68D;">
    <h4 style="font-family:andalus; font-weight:bold; font-size:25px;">+01XXX-XXXXXX &bull; <a href="contact.php">Mirpur, Dhaka-1211</a></h4>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">&copy; Copyright 2017 Simple Bus Reservation | All Rights Reserved <br /></p>
    </footer>

</body>