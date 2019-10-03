<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="lib/jquery-3.2.0.min.js"></script>


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

<body style="background-color:#85929E  ";>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="index.php"><img src="home.png" style="width:35px;height:35px;border:0;">Home</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="gallery.php"><img src="gallery.png" style="width:35px;height:35px;border:0;">Gallery</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="history.php"><img src="history.png" style="width:35px;height:35px;border:0;">History</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="route.php"><img src="route.png" style="width:35px;height:35px;border:0;">Routes</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="location.php"><img src="location.png" style="width:35px;height:35px;border:0;">Location</a></li>
                <li class="active" style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="contact.php"><img src="contact.png" style="width:35px;height:35px;border:0;">Contact Us</a></li>
            </ul>
        </div>

</div>
</nav>


<div class="container">

<div class="page-header">
    <h1>Contact Form </h1>
</div>

<!-- Contact Form - START -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2  days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>

<!-- Contact Form - END -->

</div>

</body>

<footer class="container-fluid text-center" style="background-color:#58D68D;">
    <h4 style="font-family:andalus; font-weight:bold; font-size:25px;">+01XXX-XXXXXX &bull; <a href="contact.php">Mirpur, Dhaka-1211</a></h4>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">&copy; Copyright 2017 Simple Bus Reservation | All Rights Reserved <br /></p>
    </footer>
	
</html>