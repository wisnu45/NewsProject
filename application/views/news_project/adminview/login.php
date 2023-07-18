<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
     <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">

    <!--Fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url('css/all.min.css')?>">
    
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">
</head>
<body>
	<!--start login form-->
    <div class="mb-3 mt-5 text-center" style="font-size:30px">
        <i class="fas fa-box"></i>
        <span>TDS NEWS</span>
    </div>
     <p class="text-center" style="font-size:20px;">
    <i class="fas fa-user-secret text-danger"></i>AdminLogin Area</p>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-5">
                <form method="post" class="shadow-lg p-4" action="<?php echo site_url('admin/login/verify'); ?>">
                    <div class="form-group">
                       <i class="fas fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" name="aEmail" id="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="Password" class="font-weight-bold pl-2">Password</label>
                        <input type="password" class="form-control" name="aPassword" id="Password" placeholder="Password">
                    </div>
                    <input type="submit" name="aLogin" class="btn btn-outline-danger btn-block mt-4 shadow-sm" value="Login">
                </form>

                <?php if($this->session->flashdata('message')) { ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php echo $this->session->flashdata('message');  ?>
                    </div>
                <?php } ?>
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