<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<!--bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">

    <!--Fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url('css/all.min.css')?>">
    
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">
</head>
<style type="text/css">
  th > a:hover{
    text-decoration: none;
  }
  th:hover{
    background-color: #343a40;
  }
</style>
<body>
   		 <!--------------------------Navigation -------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand text-primary font-weight-bold" href="<?php echo base_url('News_controller/index'); ?>"><span style="font-size:30px ; color: white; height: 50px; line-height: 50px;">TDS NEWS</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mymenu" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
          <ul class="navbar-nav ml-auto custom_nav">
             <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="<?php echo base_url('News_controller/index') ; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="#">News</a>
            </li>

             <li class="nav-item">
              <a class="nav-link text-light font-weight-bold"
               href="<?php echo base_url('News_controller/Contact'); ?>">Contact us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="<?php echo base_url('user/Userregistration/index');?>">Sing up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="<?php echo base_url('user/userlogin/index') ; ?>">Login</a>
            </li>
          </ul>
        </div>
    </div>
</nav> <!-- ------------------------End Navigation---------------------->

  	<!--------------------------Sub Navigation-------------------------->
   	<div class="container">
      <div class="row">
        <div class="col-sm-12 bg-primary">
     <table border="0" cellpadding="10" width="100%">
       <tr align="center">
         <?php 
          foreach ($catagory as $row) { ?>
         <th><a href="<?php echo base_url('News_controller/catagory/'.$row->catagory_id) ?>" class="text-light"><?php echo $row->catagory_name;  ?></a></th>
         <?php } ?>
       </tr>
     </table>
   </div>
   </div>
    </div>
   <!-------------------------- End Sub Navigation----------------------->

   <!-------------------------------contact-------------------------------->
    <div class="container">
      <h1 class="mt-4 mb-3">Contact Us</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url("News_controller/index");  ?>" class="ml-2 font-weight-bold"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('News_controller/Contact'); ?>" class="ml-2 font-weight-bold"><i class="fas fa-address-card"></i>Contact</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-lg-12 mb-3">
          <strong>Headquarter:</strong><br>
           TDS News pvt Ltd,<br>
           Kolkata ,NewTown<br>
           Kolkata-700153<br>
           Phone:9806799809<br>
           <a href="#" target="_blank">www.TDSNews.com</a><br>
           <br> <br>
           <strong>Branch:</strong><br>
           OSMS pvt Ltd,<br>
           Kolkata,Saltlake<br>
           Kolkata-700158<br>
           Phone:9806799809<br>
           <a href="#" target="_blank">www.TDSNews.com</a><br>
        </div>
      </div>
    </div>
    <!-------------------------------End contact----------------------------->

   <!---------------------------------footer-------------------------------->
    <footer class="container-fluid bg-dark text-white mt-5">
        <div class="container">
        <div class="row py-3">
            <div class="col-md-6"><!--start 1st column-->
                <span class="pr-2">Follows Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div><!--end 1st column-->
            <div class="col-md-6 text-right"><!--start 2nd column-->
            <small>Design by Tarun &copy; 2020</small>
            <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
            </div><!--end 2nd column-->
        </div>
        </div>
    </footer>
    <!---------------------------------EndFooter----------------------------->



     <!--javascript-->
    <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('js/all.min.js') ?>"></script>
</body>
</html>