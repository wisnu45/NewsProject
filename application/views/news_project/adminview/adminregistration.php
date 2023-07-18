<?php include("includes/header.php"); ?>	
<?php include("includes/sidebar1.php"); ?>


	<div class="col-sm-5">
        <form method="post" class="shadow-lg p-4 bg-light" action="<?php echo site_url('admin/Registration/registration'); ?>">
            <h4 class="text-center">Admin Registration</h4>
        	<div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" name="aName" placeholder="Name" value="<?php echo set_value('aName'); ?>">
                    <?php echo form_error('aName'); ?>
                </div>
            <div class="form-group">
               <i class="fas fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
                <input type="email" class="form-control" name="aEmail" id="Email" placeholder="Email" value="<?php echo set_value('aEmail'); ?>">
                <?php echo form_error('aEmail'); ?>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i><label for="Password" class="font-weight-bold pl-2">Password</label>
                <input type="password" class="form-control" name="aPassword" id="Password" placeholder="Password" value="<?php echo set_value('aPassword'); ?>">
                <?php echo form_error('aPassword'); ?>
            </div>
            <input type="submit" name="aLogin" class="btn btn-outline-danger btn-block mt-4 shadow-sm" value="Login">
        </form>

        <?php if($this->session->flashdata('success')) { ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $this->session->flashdata('success');  ?>
            </div>
        <?php } ?>
    </div>
	
<?php include("includes/sidebar2.php"); ?>