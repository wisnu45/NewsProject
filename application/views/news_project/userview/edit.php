<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

	<div class="col-sm-7 bg-light p-4 ml-4">
		<h5 class="text-center bg-dark text-light p-2">Edit Content</h5>
		
		<form method="post" class="mt-4"
		action="<?php echo base_url('user/Addcontent/update/'.$result->content_id) ; ?>">
			<div class="form-group">
				<label Title>Title</label>
				<input type="text" class="form-control" name="up_title" value="<?php echo $result->title; ?>">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea class="form-control" rows="7" cols="60" placeholder="News Body" name="up_body">
					<?php echo $result->body; ?>
				</textarea>
			</div>
			<div class="form-group">
			<label>Date</label>
			<input type="date" name="up_date" class="form-control" value="<?php echo $result->date ; ?>">
			</div>
			<input type="submit" class="btn btn-danger mr-3 mt-3" name="update" value="Upload">
			<a href="<?php echo base_url('user/Addcontent/index') ; ?>" class="btn btn-secondary mt-3" >
			Reset</a>
		</form>
	</div>	
<?php include("includes/sidebar2.php"); ?>