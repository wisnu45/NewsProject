<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

	
	<div class="col-sm-6 m-3 jumbotron">
		<h4 class="text-center">Edit News</h4>
		<form method="post" enctype="multipart/form-data" class="mt-3" action="<?php echo base_url('admin/news/updatenews/'.$result->news_id); ?>">
			<div class="form-group">
				<label Title>Title</label>
				<input type="text" class="form-control" name="title" value="<?php echo $result->news_title; ?>">
			</div>
			<div class="form-group">
				<label for="Description">Description</label>
				<textarea name="desc" rows="4" cols="40" class="form-control">
					<?php echo $result->news_desc;?>
				</textarea>
			</div>
			<div class="form-group">
				<label for="Author">Date</label>
				<input type="date" class="form-control" name="date"
				value="<?php echo $result->news_date; ?>">
			</div>
			<input type="submit" name="update" class="btn btn-success mt-3 mr-2" value="Update">
			<a href="<?php echo site_url("admin/news/index") ; ?>" class="btn btn-secondary mt-3">Reset</a>
		</form>
	</div>
</div>
</div>

<?php include("includes/sidebar2.php"); ?>