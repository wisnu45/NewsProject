<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>
	<div class="col-sm-7 m-4">
		<h5 class="text-center bg-dark text-light p-2">Edit Content</h5>
		<form method="post" class="mt-4" action="<?php echo base_url('admin/Userpost/Addnews');?>" enctype="multipart/form-data">
			<div class="form-group">
				<label Title>Title</label>
				<input type="text" class="form-control" name="up_title"value="<?php echo $result->title; ?>">
			</div>
			<div class="form-group">
				<label for="Description">Description</label>
				<textarea name="up_desc" rows="4" cols="40" class="form-control">
					<?php echo $result->body; ?>
				</textarea>
			</div>
			<div class="form-group">
				<label for="date">catagory</label>
				<input type="text" class="form-control" name="catagory" value="<?php echo $result->catagory; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="date">Author</label>
				<input type="text" class="form-control" name="author" value="<?php echo $result->author; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="date">Date</label>
				<input type="date" class="form-control" name="up_date" value="<?php echo $result->date; ?>">
			</div>
			<div class="form-group">
				<label for="file">File</label>
				<input type="text" class="form-control" value="<?php echo './images/'.$result->image; ?>" readonly>
				<input type="file" name="news_img" class="form-control">
			</div>
			<input type="submit" name="upload" class="btn btn-success mt-3 mr-2" value="upload">
			<a href="<?php echo site_url("admin/Userpost") ; ?>" class="btn btn-secondary mt-3">Reset</a>
		</form>
	</div>	
<?php include("includes/sidebar2.php"); ?>