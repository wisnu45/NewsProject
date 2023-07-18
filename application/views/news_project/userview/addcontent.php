<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>
	<div class="col-sm-7 ml-4 p-4 bg-light">
		<h5 class="text-center bg-dark text-light p-2">Add New Content</h5>

		<form method="post" enctype="multipart/form-data" class="mt-4"
		action="<?php echo base_url('user/Addcontent/addcontent') ; ?>">
			<div class="form-group">
				<label>Title</label>
				<textarea class="form-control" rows="3" cols="60" placeholder="News Title" name="title"></textarea>
	
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea class="form-control" rows="7" cols="60" placeholder="News Body" name="body"></textarea>
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
			<label>Date</label>
			<input type="date" name="date" class="form-control">
			</div>
			<div class="form-group">
			<input type="file" name="image">
			</div>
			<input type="submit" class="btn btn-danger mr-3 mt-3" name="userupload" value="Upload">
			<a href="<?php echo base_url('user/Addcontent/index') ; ?>" class="btn btn-secondary mt-3" >Reset</a>
		</form>
	</div>	
<?php include("includes/sidebar2.php"); ?>