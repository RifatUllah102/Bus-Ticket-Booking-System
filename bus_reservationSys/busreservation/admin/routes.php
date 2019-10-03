<?php
session_start();
require_once('auth.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Reservation Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="../lib/jquery-3.2.0.min.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li>
                <a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['SESS_USERNAME'];?></a>
            </li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a></li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li >
                    <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="users.php"><i class="fa fa-fw fa-users"></i> Users</a>
                </li>
                <li>
                    <a href="tickets.php"><i class="fa fa-fw fa-table"></i> Tickets</a>
                </li>
                <li class="active">
                    <a href="routes.php"><i class="fa fa-fw fa-edit"></i> Routes</a>
                </li>
                <li>
                    <a href="prices.php"><i class="fa fa-fw fa-desktop"></i> Prices</a>
                </li>
                <li>
                    <a href="buses.php"><i class="fa fa-fw fa-wrench"></i> Buses</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-users"></i> Routes
                    </h1>
                </div>
            </div>
<!--            <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>-->
            <!-- /.row -->
            <div class="row">
                <p style="margin-left: 20px">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addRoute">Add Route</button>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#editRoute">Edit Route</button>
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#delRoute">Delete Route</button>
                </p>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h3>All Routes</h3>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Source</th>
                                <th>Destination</th>
                            </tr>
                            <?php
                            include '../db.php';
                            $results = mysql_query("SELECT route_id, source, dest FROM route");
                            while($rows = mysql_fetch_array($results))
                            {
                                echo '<tr>';
                                echo '<td>'.$rows['route_id'].'</td>';
                                echo '<td>'.$rows['source'].'</td>';
                                echo '<td>'.$rows['dest'].'</td>';
                                echo '</tr>';
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>


<div class="modal fade" id="addRoute" tabindex="-1" role="dialog" aria-labelledby="addRouteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Route</h4>
            </div>
            <div class="modal-body">
                <form action="addroute.php" method="post">
                    <div class="form-group">
                        <label for="source">Source</label>
                        <input type="text" class="form-control" name="source" placeholder="Source">
                    </div>
                    <div class="form-group">
                        <label for="destination">Email address</label>
                        <input type="text" class="form-control" name="destination" placeholder="Destination">
                    </div>
                    <Button type="submit" id="submit" class="btn btn-success">Add Route</Button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="delRoute" tabindex="-1" role="dialog" aria-labelledby="myDelRoute">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <div class="modal-body" id="price_form">
                <form action="delroute.php" method="post" id="routeform">
                    <div class="form-group">
                        <label for="route">Route</label>
                        <select class="form-control" name="del_route" form="routeform">
                            <?php
                            include '../db.php';
                            $results = mysql_query("SELECT route_id, CONCAT(source,'-',dest) as srcdest FROM route");
                            while($rows = mysql_fetch_array($results))
                            {
                                echo '<option value="'.$rows['route_id'].'">'.$rows['srcdest'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <Button type="submit" id="submit" class="btn btn-success">Delete User</Button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="editRoute" tabindex="-1" role="dialog" aria-labelledby="myEditRoute">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Route</h4>
            </div>
            <div class="modal-body" id="price_form">
                <form action="execeditroute.php" method="post" id="uprouteform">
                    <div class="form-group">
                        <label for="route">Route ID</label>s
                        <select class="form-control" name="routeid" form="uprouteform">
                            <?php
                            include '../db.php';
                            $results = mysql_query("SELECT route_id FROM route");
                            while($rows = mysql_fetch_array($results))
                            {
                                echo '<option value="'.$rows['route_id'].'">'.$rows['route_id'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="seat">Source</label>
                        <input type="text" class="form-control" name="source">
                    </div>
                    <div class="form-group">
                        <label for="seat">Destination</label>
                        <input type="text" class="form-control" name="dest">
                    </div>
                    <Button type="submit" id="submit" class="btn btn-success">Update Route</Button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /#wrapper -->



<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
