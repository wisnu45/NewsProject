<?php include("includes/header.php"); ?>

	
<?php include("includes/sidebar1.php"); ?>


<div class="col-sm-9 mt-1">
	<div class="row"><!--start 2nd column 1st row-->
		<div class="col-sm-2 m-3">
			<a href="<?php echo site_url('admin/news/addnews'); ?>" class="btn btn-primary"><i class="fas fa-plus fa-2x"></i>Add</a>
		</div>
		<?php 
if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success mt-3" role="alert">
		<?php echo $this->session->flashdata('success') ; ?>
	</div>
<?php } ?>
	</div>
	<div class="row mt-1"><!--start 2nd column 2nd row-->
		<div class="col-sm-12 bg-light p-4 ml-4">
			<h5 class="text-center bg-dark text-light p-2">News</h5>
			<table class="table table-bordered text-center mt-4">
				<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Catagory</th>
					<th>Author</th>
					<th>User Author</th>
					<th>Date</th>
					<th>Image</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($news as $row) { ?>
						<tr>
							<td><?php echo $row->news_id ; ?></td>
							<td><?php echo $row->news_title ; ?></td>
							<td><?php echo $row->news_desc ; ?></td>
							<td><?php echo $row->catagory_name ; ?></td>
							<td><?php echo $row->a_name ; ?></td>
							<td><?php echo $row->u_name ; ?></td>
							<td><?php echo $row->news_date ; ?></td>
							<td>
								<img src="<?php echo base_url().'/uploads/'. $row->news_img ; ?>" width="100px" height="100px">
							</td>
							<td>
								<a href="<?php echo base_url('admin/news/editnews/'.$row->news_id); ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
							</td>
							<!-- <td>
								<a href="<?php //echo base_url('admin/news/delete/'.$row->news_id); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
							</td> -->
							<td>
								<form method="post" action="<?php echo base_url('admin/news/delete'); ?>">
									<input type="hidden" name="id" value="<?php echo $row->news_id ; ?>">
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
			
				<!-- <ul class="pagination">
				<li class="page-item"><a class="page-link" href="#">Previous</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul> -->
			<ul class="pagination">
				<?php echo $this->pagination->create_links(); ?>
			</ul>
		</div>
	</div>
</div>
	


	
<?php include("includes/sidebar2.php"); ?>