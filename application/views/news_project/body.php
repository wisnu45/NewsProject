<div class="container">
    <div class="row mt-3">
      <div class="col-sm-8 mt-1 bg-light p-4">
        <?php if($this->input->get('searchtitle')){ ?>
          <b>Search Result For "<?php echo $this->input->get('searchtitle');  ?>"</b>
     <?php  } ?>

        <?php foreach ($body as $row) { ?>
        <div class="row border-bottom py-3">
            <div class="col-sm-5 ">
              <div class="card">
                <a href="<?php echo base_url('News_controller/singlestory/'.$row->news_id);  ?>"><img class="card-img-top" src="<?php echo base_url().'/uploads/'. $row->news_img ; ?>"></a>
              </div>
            </div>
            <div class="col-sm-7">
                <b style="font-size: 20px"><?php echo $row->news_title;  ?></b>
                <div>
                  <span>
                    <i class="fa fa-tags"></i>
                      <a href="<?php echo base_url('News_controller/index/'.$row->catagory_id) ?>"><?php echo $row->catagory_name ;?></a>
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    <a href="<?php echo base_url('News_controller/author/'.$row->author);  ?>" class="mr-2"><b>
                      <?php 
                        echo $row->a_name ;
                        echo $row->u_name ;
                      ?>   
                    </b></a>
                  </span>
                  <span>
                    <i class="fa fa-calendar"></i>
                    <a href="" class="mr-2"><?php echo $row->news_date ; ?></a> 
                  </span>
                </div>
                <p><?php echo substr($row->news_desc,0,130)." ....."; ?></p>
                <div class="text-right">
                  <a href="<?php echo base_url('News_controller/singlestory/'.$row->news_id);  ?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <?php  } ?>
        <?php echo $this->pagination->create_links(); ?>
    </div>