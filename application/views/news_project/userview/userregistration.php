<?php	
include("includes/header.php");
?>

	<!--start registration form-->
<div class="container pt-5">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo base_url("user/userregistration/registration") ; ?>" class="shadow-lg p-4" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" name="uName" placeholder="Name" value="<?php echo set_value('uName'); ?>">
                    <?php echo form_error('uName'); ?>
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" name="uEmail" placeholder="Email" value="<?php echo set_value('uEmail'); ?>">
                    <small class="form-text">We'll never share your email with anyone else</small>
                    <?php echo form_error('uEmail'); ?>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" name="uPassword" placeholder="Password" value="<?php echo set_value('uPassword'); ?>">
                    <?php echo form_error('uPassword'); ?>
                </div>
                <button type="submit" name="uSingup" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold">Sing up</button>
                <em style="font-size:10px">Note-By clicking Sign up, you agree to our Teams, Data Policy and Cookie Policy</em>      
             </form>
        </div>
    </div>
</div> <!--End registration form container-->

<?php include("includes/footer.php"); ?>