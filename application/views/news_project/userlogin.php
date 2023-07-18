<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">

    <!--Fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url('css/all.min.css')?>">
    
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">
</head>
<body>
	<!--start registration form-->
<div class="mb-3 mt-5 text-center" style="font-size:30px">
        <i class="fas fa-newspaper"></i>
        <span>TDS NEWS</span>
    </div>
    <p class="text-center" style="font-size:20px;">
    <i class="fas fa-user-secret text-danger"></i>UserLogin Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4">
                <form method="post" class="shadow-lg p-4" action="<?php echo site_url('user/Userlogin/userlogin') ; ?>">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
                    <input type="text" class="form-control" name="uEmail" placeholder="Email">
                    <small class="form-text">We'll never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" name="uPassword" placeholder="Password">
                </div>
                <input type="submit" name="uLogin" class="btn btn-outline-danger btn-block mt-4 shadow-sm" value="Login">
                </form>
                <div class="text-center">
                    <a href="<?php echo base_url("News_controller/index"); ?>" class="
                    btn btn-info">Back To Home</a>
                </div>
            </div>
        </div>
    </div>


     <!--javascript-->
    <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('js/all.min.js') ?>"></script>
</body>
</html>
