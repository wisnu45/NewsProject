<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

	
	<div class="col-sm-6 bg-light p-4 ml-4">
		<h4 class="text-center">Add News</h4>
	<?php 
if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success mt-3" role="alert">
		<?php echo $this->session->flashdata('success') ; ?>
	</div>
<?php } ?>
		<form method="post" enctype="multipart/form-data" class="mt-3" action="<?php echo base_url('admin/news/addnews') ?>">
			<div class="form-group">
				<label Title>Title</label>
				<input type="text" class="form-control" name="title" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="Description">Description</label>
				<textarea name="desc" rows="4" cols="40" class="form-control" >
				</textarea>
			</div>
			<div class="form-group">
			    <label for="Catagory">Catagpory</label>
			    <select class="form-control" name="catagory" id="Catagory">
			    	<option value="">Select Catagory</option>
			    	<?php 
			    	foreach ($result as $row){ ?>
			      <option value="<?php echo $row->catagory_id ?>"><?php echo $row->catagory_name ; ?></option>
			      <?php } ?>
			    </select>
			</div>
			<div class="form-group">
				<label for="Author">Date</label>
				<input type="date" class="form-control" name="date">
			</div>
			<div class="form-group">
				<label for="Author">Select File</label>
				<input type="file" class="form-control" name="news_img">
			</div>
			<input type="submit" name="submit" class="btn btn-danger mt-3 mr-2">
			<a href="<?php echo site_url("admin/news/index") ; ?>" class="btn btn-secondary mt-3">Reset</a>
		</form>
	</div>
</div>
</div>

<?php include("includes/sidebar2.php"); ?>