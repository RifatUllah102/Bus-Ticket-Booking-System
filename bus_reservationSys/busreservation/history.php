<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Bus Reservation</title>


    <!-- Custom CSS -->
    <link href="lib/css/thumbnail-gallery.css" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <script src="lib/jquery-3.2.0.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<style>
    .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
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

<header>

<img src="bus1.png" style="width:400px; height:120px;">
<h1 style="color:pink; font-family:andalus; font-weight:bold;">National Travels Bangladesh</h1>

</header>

</head>

<body style="background-color:#85929E";>
   <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="index.php"><img src="home.png" style="width:35px;height:35px;border:0;">Home</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="gallery.php"><img src="gallery.png" style="width:35px;height:35px;border:0;">Gallery</a></li>
                <li  class="active"style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="history.php"><img src="history.png" style="width:35px;height:35px;border:0;">History</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="route.php"><img src="route.png" style="width:35px;height:35px;border:0;">Routes</a></li>
                <li style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="location.php"><img src="location.png" style="width:35px;height:35px;border:0;">Location</a></li>
                <li  style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="contact.php"><img src="contact.png" style="width:35px;height:35px;border:0;">Contact Us</a></li>
            </ul>
        </div>

</div>
</nav>

<div class="jumbotron text-center">
  <h1>Our Company Our Pride</h1> 
  <h2>Best Service All The Way</h2> 
  
</div>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2 style="font-family:andalus; font-weight:bold; font-size:40px;">About Company Page</h2><br>
	  
      <h3 style="color:pink; font-family:andalus; font-weight:bold; font-size:30px;">National Travels Bangladesh is a bus ticket Seller. It does not operate bus services of its own. In order to provide a comprehensive choice of bus operators, departure times and prices to customers, it has tied up with many bus operators and brought them in a single platform.</h3><br>
      <h2 style="font-family:andalus; font-weight:bold; font-size:40px;">Terms & Conditions</h2><br>
	  <h4 style="font-family:andalus; font-weight:bold; font-size:25px; color:#1efce2;">National Travel’s advice to customers is to choose bus operators they are aware of and whose service they are comfortable with. The responsibilities include: <br>
	  - Issuing a valid e-ticket (a ticket that will be accepted by the bus operator) for its’ network of operations; <br>
	  - Providing customer support and information regarding ticket availability and purchase</h4>
      
	  <h4 style="font-family:andalus; font-weight:bold; font-size:25px; color:yellow;">National Travel’s responsibilities do not include: <br>
	  - The bus operator’s bus not departing / reaching on time <br>
	  - The bus operator’s bus seats etc not being up to the customer’s expectation <br>
	  - The bus operator canceling the trip due to unavoidable reasons <br>
	  - The baggage of the customer getting lost / stolen / damaged <br>
	  - The bus operator changing a customer’s seat at the last minute to accommodate a lady / child <br>
	  - The customer waiting at the wrong boarding point (please call the bus operator to find out the exact boarding point if you are not a regular traveler on that particular bus) <br>
	  - The bus operator changing the boarding point and/or using a pick-up vehicle at the boarding point to take customers to the bus departure point
	  <h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2 style="font-family:andalus; font-weight:bold; font-size:45px; color:#941efc;">FAQs</h2><br>
      <h3><strong>What are the advantages of purchasing a bus ticket with busbd.com.bd?</strong> <h3>
	  <br>
	  <p style="color:blue; font-family:andalus; font-weight:bold;">National Travels is Bangladesh’s one of the best online bus ticket reservation software company and therefore, you will find the largest option of bus seats on the site. 
	  Some of the advantages of dealing with us are: <br>
	  - You can choose your desired seat- You can book your bus tickets online, or in person<br>
	  - You can choose from a number of bus operators<br>
	  - You can choose from buses based on boarding points, timing, fare and bus type.</p>
    </div>
  </div>
</div>

<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Easy Booking</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>User Friendly</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Online Payment</h4>
      
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Always Active</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">No Advertisements</h4>
      
    </div>
  </div>
</div>


 

	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

<footer class="container-fluid text-center" style="background-color:#58D68D;">
    <h4 style="font-family:andalus; font-weight:bold; font-size:25px;">+01XXX-XXXXXX &bull; <a href="contact.php">Mirpur, Dhaka-1211</a></h4>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <p style="font-family:andalus; font-weight:bold; font-size:25px;">&copy; Copyright 2017 Simple Bus Reservation | All Rights Reserved <br /></p>
    </footer>
	
</html>