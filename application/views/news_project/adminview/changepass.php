<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

<div class="col-sm-4 m-3 bg-dark text-white p-4">
	<form method="post" action="<?php echo base_url('admin/Changepass/update'); ?>">
		<div class="form-group text-center">
			<label for="Email"><i class="fas fa-user fa-5x"></i></label>
			<input type="email" class="form-control text-center"
			value="<?php echo $result->a_email; ?>" name="aEmail" readonly/>
		</div>
		<div class="form-group">
			<label for="Password">New Password</label>
			<input type="Password" class="form-control" name="aPassword">
		</div>
		<input type="submit" class="btn btn-danger mt-3" name="submit" value="Update">
	</form>
	<?php if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php } ?>
</div>

<?php include("includes/sidebar2.php"); ?>