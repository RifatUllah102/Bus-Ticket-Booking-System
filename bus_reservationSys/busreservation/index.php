<?php

// Start session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Bus Reservation</title>
    <script src="lib/jquery-3.2.0.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="lib/css/bootstrap.css"/>
    <script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
    <link href="lib/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
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

        container text-center{
            padding: 80px 120px;
        }

        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }

    </style>

</head>
<header>

    <img src="bus1.png" style="width:400px; height:120px;">
    <h1 style="color:pink; font-family:andalus; font-weight:bold;">National Travels Bangladesh</h1>

</header>
<body style="background-color: #85929E">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active" style="font-family:andalus; font-weight:bold; font-size:25px;"><a href="index.php"><img src="home.png" style="width:35px;height:35px;border:0;">Home</a></li>
                <li style=" font-family:andalus; font-weight:bold; font-size:25px;"><a href="gallery.php"><img src="gallery.png" style="width:35px;height:35px;border:0;">Gallery</a></li>
                <li style=" font-family:andalus; font-weight:bold; font-size:25px;"><a href="history.php"><img src="history.png" style="width:35px;height:35px;border:0;">History</a></li>
                <li style=" font-family:andalus; font-weight:bold; font-size:25px;"><a href="route.php"><img src="route.png" style="width:35px;height:35px;border:0;">Routes</a></li>
                <li style=" font-family:andalus; font-weight:bold; font-size:25px;"><a href="location.php"><img src="location.png" style="width:35px;height:35px;border:0;">Location</a></li>
                <li style=" font-family:andalus; font-weight:bold; font-size:25px;"><a href="contact.php"><img src="contact.png" style="width:35px;height:35px;border:0;">Contact Us</a></li>
            </ul>
            <?php
            if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')){
                echo '<ul class="nav navbar-nav navbar-right">'.
                        '<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>'.
                    '</ul>';
                echo '<ul class="nav navbar-nav navbar-right">'.
                    '<li><a href="#" data-toggle="modal" data-target="#registration"><span class="glyphicon glyphicon-log-in" ></span> Registration</a></li>'.
                    '</ul>';
                echo '<ul class="nav navbar-nav navbar-right">'.
                        '<li><a href="admin"><span class="glyphicon glyphicon-cog" ></span> Admin Panel</a></li>'.
                    '</ul>';
            }else
            {
                echo '<ul class="nav navbar-nav navbar-right">'.
                    '<li><a href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                    $_SESSION['SESS_USERNAME'].'<span class="caret"></span></a>'.
                    '<ul class="dropdown-menu">'.
                    '<li><a href="tickethistory.php">Ticket History</a></li>'.
                    '<li><a href="logout.php">Sign Out</a></li>'.
                    '</ul>'.
                    '</li>'.
                    '</ul>';
            }
            ?>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="volvo.jpg" alt="Image">
                        <div class="carousel-caption">
                            <h1 style="color:lime; font-family:andalus; font-weight:bold; font-size:25px;">VOLVO from SWEEDEN</h1>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold; font-size:20px;">GreenLine Paribahan</h3>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold;font-size:20px;">Shymoli Paribahan</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="scania.jpg" alt="Image">
                        <div class="carousel-caption">
                            <h1 style="color:lime; font-family:andalus; font-weight:bold; font-size:25px;">SCANIA from SWEEDEN</h1>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold; font-size:20px;">GreenLine Paribahan</h3>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold;font-size:20px;">Nabil Paribahan</h3>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold;font-size:20px;">Sohag Paribahan</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="hyundai.jpg" alt="Image">
                        <div class="carousel-caption">
                            <h1 style="color:lime; font-family:andalus; font-weight:bold; font-size:25px;">HYUNDAI from SOUTH KOREA</h1>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold; font-size:20px;">DESH Travels</h3>
                            <h3 style="color:yellow; font-family:andalus; font-weight:bold;font-size:20px;">TR Travels</h3>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel-group" id="logo" role="tablist">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ticket Booking
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body" id="seat_form">
                            <form action="selectset.php" method="post" id="ticketform">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Source</label>
                                    <select class="form-control" name="source" form="ticketform">
                                    <?php
                                    include ('db.php');
                                    $result = mysql_query("SELECT DISTINCT source FROM route");
                                    while ($row = mysql_fetch_array($result)) {
                                        echo '<option value="'.$row['source'].'">'.$row['source'].'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Destination</label>
                                    <select class="form-control" name="dest" form="ticketform">
                                        <?php
                                        include ('db.php');
                                        $result = mysql_query("SELECT DISTINCT dest FROM route");
                                        while ($row = mysql_fetch_array($result)) {
                                            echo '<option value="'.$row['dest'].'">'.$row['dest'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1">Date</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" name="date" data-date-format="yyyy-mm-dd" data-today readonly="readonly">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" id="submit" class="btn btn-primary">Next</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container text-center">
    <h3>What We Do</h3>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <img src="Dhaka.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Favourite route</p>
        </div>
        <div class="col-sm-3">
            <img src="chittagong.jpg" class="img-responsive" style="width:100%" alt="Image">
            <p>Favourite route  2</p>
        </div>
        <div class="col-sm-3">
            <div class="alert alert-info">
                <b><p>Easy Booking</p><b>
            </div>
            <div class="alert alert-success">
                <b><p>Easier Way of Cancellation</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <p>Some text..</p>
            </div>

            <div class="well">
                <p>Some text..</p>
            </div>
        </div>
    </div>
    <hr>
</div>

<div class="container text-center">
    <h3>Our Partners</h3>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <img src="coc.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 1</p>
        </div>
        <div class="col-sm-2">
            <img src="city.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 2</p>
        </div>
        <div class="col-sm-2">
            <img src="american.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 3</p>
        </div>
        <div class="col-sm-2">
            <img src="visa.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 4</p>
        </div>
        <div class="col-sm-2">
            <img src="robi.png" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 5</p>
        </div>
        <div class="col-sm-2">
            <img src="gp.jpg" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 6</p>
        </div>
    </div>
</div><br>

<!-- <div class="container text-center">
    <h3>About US</h3>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Name</strong></p><br>
            <img src="ani.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Name</strong></p><br>
            <img src="00.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </div>
    </div>
</div> --><br>
<footer class="container-fluid text-center">
    <h4>+01XXX-XXXXXX &bull; <a href="contact.php">Mirpur, Dhaka-1211</a></h4>
    <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <p>&copy; Copyright 2017 Simple Bus Reservation | All Rights Reserved <br /></p>
</footer>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Admin Login</h4>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <Button type="submit" id="submit" class="btn btn-success">Login</Button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myregistration">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">User Registration</h4>
            </div>
            <div class="modal-body">
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserName</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone No" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>

                    <Button type="submit" id="submit" class="btn btn-success">Sign Up</Button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $('#seat_form').find('.input-group.date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        clearBtn: true,
        toggleActive: true
    });
</script>
<script type="application/javascript" src="lib/js/bootstrap.js"></script>
</body>
</html>