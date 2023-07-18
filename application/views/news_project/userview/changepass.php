<?php include("includes/header.php"); ?>

	
<?php include("includes/sidebar1.php"); ?>	

<div class="col-sm-4 bg-dark text-white p-3 m-4">
	<form method="post" action="<?php echo base_url('user/Changepass/index') ; ?>">
		<div class="form-group text-center">
				<label for="Email"><i class="fas fa-user fa-5x"></i></label>
				<input type="email" class="form-control text-center" name="uEmail"
				value="<?php echo $result->u_email; ?>" readonly>
			</div>
		<div class="form-group">
			<label for="Email">New Password</label>
			<input type="text" class="form-control" name="uPassword">
		</div>
		<input type="submit" class="btn btn-danger" name="submit" value="update">
	</form>
	<?php 
if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success mt-3" role="alert">
		<?php echo $this->session->flashdata('success') ; ?>
	</div>
<?php } ?>
</div>

<?php include("includes/sidebar2.php"); ?>	