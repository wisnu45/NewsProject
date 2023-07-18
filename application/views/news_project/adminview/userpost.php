<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>
	
	
	<div class="col-sm-9 bg-light p-3 ml-4">
		<?php if($this->session->flashdata('success')) {  ?>
				<div class="alert alert-success mt-3" role="alert">
					<?php echo $this->session->flashdata('success') ; ?>
				</div>
				<?php } ?>
	<h5 class="text-center bg-dark text-light p-2">User Post News</h5>
	<table class="table table-bordered text-center">
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
			<?php 
		foreach ($news as $row){ ?>
				<tr>
					<td><?php echo $row->content_id; ?></td>
					<td><?php echo $row->title; ?></td>
					<td><?php echo $row->body; ?></td>
					<td><?php echo $row->catagory_name; ?></td>
					<td><?php echo $row->u_name; ?></td>
					<td><?php echo $row->date; ?></td>
					<td>
						<img src="<?php echo base_url().'/images/'. $row->image ; ?>" width="100px" height="100px">
					</td>
					<td>
						<a href="<?php echo base_url('admin/Userpost/edituserpost/'.$row->content_id); ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
					</td>

					<td>
						<form method="post" action="<?php echo base_url('admin/Userpost/delete'); ?>">
							<input type="hidden" name="id" value="<?php echo $row->content_id ; ?>">
							<input type="hidden" name="cat_id" value="<?php echo $row->catagory ; ?>">
							<button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						</form>
					</td>
				</tr>

			<?php
				}
			  ?>
		</tbody>
	</table>
	<?php echo $this->pagination->create_links(); ?>
</div>
<?php include("includes/sidebar2.php"); ?>