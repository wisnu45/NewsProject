<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!--bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">

    <!--Fontawesome css-->
    <link rel="stylesheet" href="<?php echo base_url('css/all.min.css')?>">
    
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">

    <title><?php echo $title ; ?></title>
    <style type="text/css">
      body{
        background-color:#e1e6eabd;
      }
  th > a:hover{
    text-decoration: none;
  }
  th:hover{
    background-color: #343a40;
  }
  th>li{
    list-style: none;
  }
  a:hover{
    text-decoration: none
  }
</style>
    </style>
  </head>
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
               href="<?php echo base_url('News_controller/Contact') ; ?>">Contact us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" 
              href="<?php echo base_url('user/Userregistration/index');?>">Sing up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold" href="<?php echo base_url('user/userlogin/userlogin'); ?>">Login</a>
            </li>
          </ul>
        </div>
    </div>
</nav>