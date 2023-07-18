<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>
	
	<div class="col-sm-5 bg-light p-4 ml-4">
		<h5 class="text-center bg-dark text-light p-2">Add Catagory</h5>
		<form method="post" class="mt-4" action="<?php echo base_url('admin/Catagory/addcatagory'); ?>">
			<div class="form-group">
				<label>Catagory name</label>
				<input type="text" class="form-control" name="catagory_name">
				<?php echo form_error('catagory_name'); ?>
			</div>
			<input type="submit" class="btn btn-danger mr-3 mt-3" name="add" value="Add">
			<a href="<?php echo base_url('admin/Catagory/index') ; ?>" class="btn btn-secondary mt-3" >Reset</a>
		</form>
			<?php 
				if($this->session->flashdata('success')){ ?>
					<div class="alert alert-success mt-3" role="alert">
						<?php echo $this->session->flashdata('success') ; ?>
					</div>
			<?php } ?>
	</div>	
<?php include("includes/sidebar2.php"); ?>