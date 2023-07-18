    <!-- side bar -->

  <div class="container-fluid"><!--start container-->
    <div class="row"><!--start row-->
      <nav class="col-sm-2 sidebar bg-light  nav-pills py-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Userprofilecontroller') { echo 'active';}  ?>" href="<?php echo base_url('user/Userprofilecontroller/index');  ?>"><i class="fas fa-user"></i>User Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Addcontent') { echo 'active'; }  ?>" href="<?php echo base_url('user/Addcontent/index');  ?>"><i class="fas fa-box"></i>Content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($uri == 'Changepass') { echo 'active'; }  ?>" href="<?php echo base_url('user/Changepass/index');  ?>"><i class="fas fa-key"></i>Change Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/Userprofilecontroller/logout') ;?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </li>
        </ul>
      </nav>