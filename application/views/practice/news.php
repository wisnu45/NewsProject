<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>News Portal</title>
  </head>
  <body>
    <!---------------------------------------------------------------->

    <!-- ------------------------Navigation -------------------------->
   <?php include('news_project/header.php');?>
   <!-- ------------------------End Navigation-------------------------->



   <!--------------------------Sub Navigation-------------------------->
   <div class="container">
     <table border="0" cellpadding="10" width="100%">
       <tr align="center">
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
         <th><a href="#">home</a></th>
       </tr>
     </table>
   </div>
   <!-------------------------- End Sub Navigation----------------------->



    <!-- -----------------------------Body------------------------------->
    <div class="container">
      <div class="row mt-3"><!----Start 1st row---->
        <div class="col-sm-8 mt-2"><!----Start 1st column under 1st row---->
          <div class="row">
            <div class="col-sm-4">
            <!-----------------card----------------->
            <div class="card">
              <img class="card-img-top" src="<?php echo base_url();?>uploads/background2.jpg">
              <div class="card-body">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo
                </b></p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">publish:27june</div>
            </div>
             <!-----------------End card----------------->
           </div>

           <div class="col-sm-4">
            <!-----------------card----------------->
            <div class="card">
              <img class="card-img-top" src="<?php echo base_url();?>uploads/background2.jpg">
              <div class="card-body">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </b></p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">publish:27june</div>
            </div>
             <!-----------------End card----------------->
           </div>

           <div class="col-sm-4">
            <!-----------------card----------------->
            <div class="card">
              <img class="card-img-top" src="<?php echo base_url();?>uploads/background2.jpg">
              <div class="card-body">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </b></p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">publish:27june</div>
            </div>
             <!-----------------End card----------------->
           </div>

           <div class="col-sm-4 mt-3">
            <!-----------------card----------------->
            <div class="card">
              <img class="card-img-top" src="<?php echo base_url();?>uploads/background2.jpg">
              <div class="card-body">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </b></p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">publish:27june</div>
            </div>
             <!-----------------End card----------------->
           </div>
         </div>
        </div>

      


    <!------------------Sidebar Widgets Column ----------------------->
      <?php include('news_project/sidebar.php');?>
    <!-----------------end Sidebar Widgets Column -------------------->
      </div>
    </div>
    <!-------------------------------End Body------------------------------->

    

    <!-------------------------------contact-------------------------------->
    <div class="container">
      <h1 class="mt-4 mb-3">Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <div class="row">
        <div class="col-lg-12 mb-3">
          <p>Chhatna ,bankura</p>
        </div>
      </div>
    </div>
    <!-------------------------------End contact----------------------------->

    <!---------------------------------footer-------------------------------->
    <?php include("news_project/footer.php"); ?>
    <!---------------------------------EndFooter----------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>