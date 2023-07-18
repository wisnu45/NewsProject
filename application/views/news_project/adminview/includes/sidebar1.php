    <!-- side bar -->
  <div class="container-fluid"><!--start container-->
    <div class="row"><!--start row-->
      <div class="col-sm-2 bg-light nav-pills py-3 pl-4">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'dashboard') { echo 'active';}  ?>" href="<?php echo site_url('admin/dashboard/index') ; ?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'news') { echo 'active';}  ?>" href="<?php echo site_url('admin/news/index') ; ?>"><i class="fas fa-box"></i>News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Catagory') { echo 'active';}  ?>" href="<?php echo site_url('admin/Catagory/index') ; ?>"><i class="fa fa-list"></i>Catagory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Userpost') { echo 'active';}  ?>" href="<?php echo site_url('admin/Userpost/index') ; ?>"><i class="fas fa-box"></i>Userpost</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Changepass') { echo 'active';}  ?>" href="<?php echo site_url('admin/Changepass') ; ?>"><i class="fas fa-key"></i>Change Password</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Registration') { echo 'active';}  ?>" href="<?php echo site_url('admin/Registration/index') ; ?>"><i class="fas fa-sign-in-alt"></i>Admin Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'assistant') { echo 'active';}  ?>" href="<?php echo site_url('admin/assistant/index') ; ?>"><i class="fas fa-user"></i>Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'users') { echo 'active';}  ?>" href="<?php echo site_url('admin/users/index') ; ?>"><i class="fas fa-user"></i>Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/dashboard/logout') ; ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </li>
        </ul>
      </div>