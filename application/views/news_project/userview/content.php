<?php include("includes/header.php"); ?>

	
<?php include("includes/sidebar1.php"); ?>
	
	<div class="col-sm-10"><!--start 2nd column-->
		<div class="row"><!--start 2nd column 1st row-->
			<div class="col-sm-2 m-3">
				<a href="<?php echo site_url('user/Addcontent/addcontent'); ?>" class="btn btn-primary"><i class="fas fa-plus fa-2x"></i>Add</a>
			</div>
			<div class="col-sm-8">
				<?php 
				if($this->session->flashdata('success')){ ?>
					<div class="alert alert-success mt-3" role="alert">
						<?php echo $this->session->flashdata('success') ; ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="row mt-1"><!--start 2nd column 2nd row-->
		<div class="col-sm-11 bg-light ml-3 p-3">
		<h5 class="text-center bg-dark text-light p-2">User-Content</h5>
		<table class="table table-bordered text-center">
			<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Body</th>
				<th>Catagory</th>
				<th>Author</th>
				<th>Date</th>
				<th>Image</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
			<?php 
			foreach($result as $row){ ?>
				<tbody>
				<tr>
					<td><?php echo $row->content_id; ?></td>
					<td><?php echo $row->title; ?></td>
					<td><?php echo $row->body; ?></td>
					<td><?php echo $row->catagory_name; ?></td>
					<td><?php echo $row->u_name; ?></td>
					<td><?php echo $row->date; ?></td>
					<td><img src="<?php echo base_url(). '/images/'. $row->image ; ?>" width="100px" height="100px"></td>
					<td>
						<a href="<?php echo site_url('user/Addcontent/edit/'.$row->content_id) ; ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
					</td>
					<td>
						<form method="post" action="<?php echo base_url('user/Addcontent/delete'); ?>">
							<input type="hidden" name="id" value="<?php echo $row->content_id ; ?>">
							<button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						</form>
					</td>
				</tr>
			</tbody>
		<?php 
			} 
		?>
		</table>
		<?php echo $this->pagination->create_links(); ?>
	</div>
   </div><!--End 2nd column 2nd row-->
</div><!--End 2nd column-->

<?php include("includes/sidebar2.php"); ?>