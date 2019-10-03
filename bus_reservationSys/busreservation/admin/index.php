<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="../lib/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        html, body{
            height: 100%;
        }
        body {
            background: url(res/loginpage.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4" style="margin-top: 100px">
            <h1 style="color: white">Admin Login</h1>
            <form action="login.php" method="post" class="form form-horizontal" >
                <div class="form-group">
                    <label style="color: white" for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="user" id="username" placeholder="username">
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: white" for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" id="password" placeholder="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>
</body>
</html>
