<?php include("includes/header.php"); ?>	
<?php include("includes/sidebar1.php"); ?>

	<div class="col-sm-4 m-4 bg-dark text-white p-3">
		<form method="post" action="<?php echo base_url("user/Userprofilecontroller/updateprofile"); ?>">
			<div class="form-group text-center">
				<label for="Email"><i class="fas fa-user fa-5x"></i></label>
				<input type="email" class="form-control text-center" name="uEmail"
				value="<?php echo $result->u_email; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="Email">UserName</label>
				<input type="text" class="form-control"
				value="<?php echo $result->u_name; ?>" name="uName">
			</div>
			<input type="submit" class="btn btn-danger" name="update" value="update">
		</form>
<?php 
if($this->session->flashdata('success')){ ?>
	<div class="alert alert-warning mt-3" role="alert">
		<?php echo $this->session->flashdata('success') ; ?>
	</div>
<?php } ?>

	</div>

<?php include("includes/sidebar2.php"); ?>