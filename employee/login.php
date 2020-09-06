<?php $errors = array(); ?>
<?php include('../bll/employee-bll.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leave Log - Admin and Employee - Login</title>
    <meta name="keywords" content="Login, employee, admin" />
    <meta name="description" content="Login to manage leave and keep a trach of your working hours" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/logo-sm.png" type="image/png" />
    <link rel="stylesheet" href="../assets/icons/webfont.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/tracker-admin.css">
</head>
<body class="home-intro">
    <div class="container log-container mt-5">
        <div class="card">
            <div class="card-header bg-white border-0 text-center">
                <img src="../assets/images/logo.png" class="mt-2" />
                <h4 class="mt-4 mb-0">Login</h4>
            </div>
            <div class="card-body">
                <form method="post" action="login.php">
                    <?php include('../errors.php'); ?>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-6">Email address</label>
                            <div class="col-sm-6 text-right text-12">
                                <a href="forgot-username.html"  tabindex="5">Forgot Username?</a>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control" autofocus="" tabindex="1" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-6">Password<span  onclick="passToggle()" class="fa fa-fw fa-eye-slash field-icon toggle-password ml-2"></span></label>
                            <div class="col-sm-6 text-right text-12">
                                <a href="forgot-password.html"  tabindex="6">Forgot Password?</a>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" tabindex="2" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login_user"  tabindex="3" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
                <div class="form-group mb-0 text-14 text-center">
                    Don't have an account?&nbsp;<a href="#"  tabindex="4">Register</a>.
                </div>
            </div>
        </div>
        <div class="w-100 text-center text-dark text-14 mt-2 font-weight-bold">&copy; 2020. Leave Log.</div>
    </div>
    <!-- Required Scripts -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/vendors/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/common.js"></script>
</body>
</html>
