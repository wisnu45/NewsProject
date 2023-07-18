<?php 
      $uri = $this->uri->segment(2);
      if($uri=='index'){
        $title='TDS News';
      }
      if($uri=='Contact'){
        $title='Contact';
      }
     ?>

  <!---------------------------End Navigation---------------------->
<?php  include("header.php"); ?>
   <!-----------------------Navigion-------------------------->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 bg-primary">
     <table border="0" cellpadding="10" width="100%">
       <tr align="center">
         <?php 
          foreach ($catagory as $row) { ?>
         <th width="20%">
            <li class="nav-item">
            <a href="<?php echo base_url('News_controller/catagory/'.$row->catagory_id) ?>" class="nav-link text-light"><?php echo $row->catagory_name;  ?>
              
            </a>
          </li>
         </th>
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
        <marquee  onmouseover="this.stop();" onmouseout="this.start();">
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
      <?php include('body.php');?>
    <!-------------------------------End Body------------------------------->
      
    <!------------------Sidebar Column----------------------->
       <?php include('sidebar.php');?>
    <!-----------------end Sidebar Column-------------------->
   


<?php include('footer.php');  ?>