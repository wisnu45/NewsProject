<?php include("includes/header.php"); ?>
<?php include("includes/sidebar1.php"); ?>

<div class="col-sm-8 bg-light p-4 ml-4">
	<?php if($this->session->flashdata('success')) { ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $this->session->flashdata('success');  ?>
            </div>
        <?php } ?>
	<h5 class="text-center bg-dark text-light p-2">No of Admin</h5>
	<table class="table table-bordered text-center mt-4">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $row){ ?>

				<tr>
					<td><?php echo $row->a_login_id ; ?></td>
					<td><?php echo $row->a_name ; ?></td>
					<td><?php echo $row->a_email ; ?></td>

					<td>
						<a href="<?php echo base_url('admin/assistant/editassistant/'.$row->a_login_id); ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
					</td>
					<td>
						<a href="<?php echo base_url('admin/assistant/deleteassistant/'.$row->a_login_id); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>

</div>

<?php include("includes/sidebar2.php"); ?>