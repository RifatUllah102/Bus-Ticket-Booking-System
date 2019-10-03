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
                <li class="active">
                    <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="users.php"><i class="fa fa-fw fa-users"></i> Users</a>
                </li>
                <li>
                    <a href="tickets.php"><i class="fa fa-fw fa-table"></i> Tickets</a>
                </li>
                <li>
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
                        <i class="fa fa-users"></i> Users
                    </h1>
                </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <p style="margin-left: 20px">
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#delUser">Delete User</button>
                </p>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h3>All User</h3>
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                            </tr>
                            <?php
                            include '../db.php';
                            $results = mysql_query("SELECT name, email, phone_no, u_address FROM user");
                            while($rows = mysql_fetch_array($results))
                            {
                                echo '<tr>';
                                echo '<td>'.$rows['name'].'</td>';
                                echo '<td>'.$rows['email'].'</td>';
                                echo '<td>'.$rows['phone_no'].'</td>';
                                echo '<td>'.$rows['u_address'].'</td>';
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
<!-- /#wrapper -->


<div class="modal fade" id="delUser" tabindex="-1" role="dialog" aria-labelledby="myDelUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <div class="modal-body" id="price_form">
                <form action="deluser.php" method="post" id="userform">
                    <div class="form-group">
                        <label for="route">User</label>
                        <select class="form-control" name="del_user" form="userform">
                            <?php
                            include '../db.php';
                            $results = mysql_query("SELECT user_id, CONCAT(user_name,'-',name) as srcdest FROM user");
                            while($rows = mysql_fetch_array($results))
                            {
                                echo '<option value="'.$rows['user_id'].'">'.$rows['srcdest'].'</option>';
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

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
