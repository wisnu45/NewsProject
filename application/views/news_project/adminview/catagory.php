<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

<div class="col-sm-10"><!--start 2nd column-->
		<div class="row"><!--start 2nd column 1st row-->
			<div class="col-sm-2 m-3">
				<a href="<?php echo site_url('admin/Catagory/addcatagory'); ?>" class="btn btn-primary"><i class="fas fa-plus fa-2x"></i>Add</a>
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
		<div class="col-sm-11 bg-light p-4 ml-4">
		<h5 class="text-center bg-dark text-light p-2">News Catagory</h5>
		<table class="table table-bordered text-center">
			<tr>
				<th>Id</th>
				<th>Catagory</th>
				<th>Post</th>
				<th>Action</th>
			</tr>
			<?php 
		foreach ($result as $row){ ?>
				<tr>
					<td><?php echo $row->catagory_id; ?></td>
					<td><?php echo $row->catagory_name; ?></td>
					<td><?php echo $row->post; ?></td>
					<td>
						<a href="<?php echo base_url('admin/Catagory/delete/'. $row->catagory_id) ;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>

		<?php 
			} 
		?>
		</table>
	</div>
   </div><!--End 2nd column 2nd row-->
</div><!--End 2nd column-->

<?php include("includes/sidebar2.php"); ?>