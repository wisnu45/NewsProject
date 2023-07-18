<?php 
      $uri = $this->uri->segment(2);
      if($uri=='singlestory'){
        $title='news';
      }
      if($uri=='Contact'){
        $title='Contact';
      }
     ?>

<?php include('header.php') ?>

   <!--------------------------Sub Navigation-------------------------->
 
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

   <!-------------------------- End Sub Navigation---------------------->
   <!---------------------------------marquee---------------------------->
    <div class="container">
      <div class="row my-3">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
        <div class="col-sm-10">
          <?php 
        foreach ($subnav as $row) { ?>
          <span class="text-danger border border-danger p-3">
            <a href="<?php echo base_url('News_controller/singlestory/'.$row->news_id) ?>" class="text-danger"><img src="<?php echo base_url().'/img/'.'new.jpg'; ?>" width="40px" height="20px"><b><?php echo substr($row->news_title,0,50)."..." ; ?></b></a>
          </span>
            <?php } ?>
        </div>
        </marquee>
      </div>
    </div>
   <!---------------------------------End marquee---------------------------->

    <!-------------------------------Start Body----------------------------->
    <div class="container">
        <div class="row bg">
          <div class="col-sm-8 mt-1 bg-light p-4">
            <?php foreach ($body as $row) { ?>
              
            <b class="text-dark" style="font-size: 30px"><?php echo $row->news_title;  ?></b>
            <div class="mt-3">
                <span>
                  <i class="fa fa-tags"></i>
                  <a href="<?php echo base_url('News_controller/catagory/'.$row->catagory_id); ?>"><?php  echo $row->catagory_name ; ?></a>
                </span>
                <span>
                  <i class="fa fa-user"></i>
                  <a href="#" class="mr-2">
                    <?php 
                        echo $row->a_name ;
                        echo $row->u_name ;
                      ?>   
                  </a>   
                </span>
                <span>
                  <i class="fa fa-calendar"></i>
                  <a href="#" class="text-dark mr-2"><b>
                  <?php echo $row->news_date;  ?>
                  </b></a>
                </span>
                </div>
                <div>
                <div class="row">
                  <div class="col-sm-12 text-center mt-3">
                    <img src="<?php echo base_url().'/uploads/'. $row->news_img ; ?>"
                    width="500px" height="300px">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12  mt-3 text-justify">
                  <?php echo $row->news_desc;  ?>
                  </div>
                </div>
            </div>
            <?php } ?>
        </div>

    <!-------------------------------End Body------------------------------->
      
    <!------------------Sidebar Column----------------------->
       <?php include('sidebar.php');?>
    <!-----------------end Sidebar Column-------------------->
     <?php include("footer.php") ; ?>