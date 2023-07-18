<?php include("includes/header.php"); ?>

	
<?php include("includes/sidebar1.php"); ?>


<div class="col-sm-9 col-md-10"> <!--start dashboard 2nd column -->
    <div class="row text-center m-5"><!-- start 2nd column 1st row-->
        <div class="col-sm-4">
            <div class="card text-white mb-3" style="max-width:18em;">
                <div class="card-header bg-secondary text-light ">No Of Catagory</div>
                <div class="card-body bg-info">
                    <h4 class="card-title"><?php echo $catagory;  ?></h4>
                    <a class="btn btn-secondary mt-3" href="<?php echo base_url('admin/Catagory/index');  ?>">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white mb-3" style="max-width:18em;">
                <div class="card-header bg-info">No of News</div>
                <div class="card-body bg-secondary">
                    <h4 class="card-title"><?php echo $news;  ?></h4>
                    <a class="btn btn-info mt-3" href="<?php echo base_url('admin/news/welcome');  ?>">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white mb-3" style="max-width:18em;">
                <div class="card-header bg-secondary">No of UserPost</div>
                <div class="card-body bg-info">
                    <h4 class="card-title"><?php echo $userpost;  ?></h4>
                    <a class="btn btn-secondary mt-3" href="<?php echo base_url('admin/Userpost/index');  ?>">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 offset-sm-2">
            <div class="card text-white mt-3" style="max-width:18em;">
                <div class="card-header bg-secondary">No of Admin</div>
                <div class="card-body bg-info">
                    <h4 class="card-title"><?php echo $admin;  ?></h4>
                    <a class="btn btn-secondary mt-3" href="<?php echo base_url('admin/assistant/index');  ?>">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white mt-3" style="max-width:18em;">
                <div class="card-header bg-info text-light ">No Of Users</div>
                <div class="card-body bg-secondary">
                    <h4 class="card-title"><?php echo $user;  ?></h4>
                    <a class="btn btn-info mt-3" href="<?php echo base_url('admin/users/index');  ?>">View</a>
                </div>
            </div>
        </div>
    </div><!-- End 2nd column 1st row-->
	
<?php include("includes/sidebar2.php"); ?>