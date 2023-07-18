<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

<div class="col-sm-5">
        <form method="post" class="shadow-lg p-4 bg-light mt-4" action="<?php echo site_url('admin/assistant/updateassistant/'.$result->a_login_id); ?>">
        	<h4 class="text-center">Update Admin</h4>
        	<div class="form-group">
                <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                <input type="text" class="form-control" name="aName" placeholder="Name" value="<?php echo $result->a_name; ?>">
            </div>
            <div class="form-group">
               <i class="fas fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
                <input type="email" class="form-control" name="aEmail" id="Email" placeholder="Email" value="<?php echo $result->a_email; ?>">
            </div>
            
            <input type="submit" name="update" class="btn btn-success mt-4 mr-3 shadow-sm" value="Update">
            <a href="<?php echo base_url('admin/assistant'); ?>" class="btn btn-secondary mt-4">Reset</a>
        </form>
    </div>
<?php include("includes/sidebar2.php"); ?>