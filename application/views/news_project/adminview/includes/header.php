<?php 
      $uri = $this->uri->segment(2);
      if($uri=='dashboard'){
        $title='Dashboard';
      }
      if($uri=='news'){
        $title='News';
      }
      if($uri=='Catagory'){
        $title='Catagory';
      }
      if($uri=='Userpost'){
        $title='Userpost';
      }
      if($uri=='Registration'){
        $title='Registration';
      }
      if($uri=='assistant'){
        $title='Assistant';
      }
      if($uri=='users'){
        $title='Users';
      }
      if($uri=='Changepass'){
        $title='Change Password';
      }
?>


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
    
    <title><?php echo $title; ?></title>
    <style type="text/css">
      body{
        background-color: #b7babd59;
      }
    </style>
  </head>
  <body>
    <!------------------------------------------------------------->

  <!--------------------------Navigation -------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand text-primary font-weight-bold" href="<?php echo base_url('admin/dashboard/index') ; ?>"><span style="font-size:30px ; color: white; height: 50px; line-height: 50px;">TDS NEWS</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mymenu" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
  <!---------------------------End Navigation---------------------->


