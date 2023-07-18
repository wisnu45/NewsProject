 <div class="col-sm-4 mt-2">
          <!-- Search Widget -->
    <div class="card">
      <h5 class="card-header bg-secondary text-white">Search</h5>
      <div class="card-body">
          <form name="search" action="<?php echo base_url('news_controller/index') ?>" method="get">
            <div class="input-group">   
            <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." value="<?php if($this->input->get('searchtitle')){ echo $this->input->get('searchtitle'); } ?>" required>
            <span class="input-group-btn">
              <input type="submit" name="search" class="btn btn-primary" value="Go">
            </span>
          </div>
          </form>
      </div>
    </div>

    <!-- Side Widget -->
  <div class="card my-4">
    <h5 class="card-header bg-secondary text-white">Recent News</h5>
    <div class="card-body">
          <ul class="list-group mb-0">
            <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
            <?php foreach ($subnav as $row) { ?> 
              <li class="list-group-item border border-dark mt-2"><a href="<?php echo base_url('News_controller/singlestory/'.$row->news_id)  ?>" class="text-danger"><img src="<?php echo base_url().'/img/'.'new.jpg'; ?>" width="40px" height="20px"><?php echo substr($row->news_title,0,100)."....." ; ?></a>
                <div class="text-right">
                <a href="<?php echo base_url('News_controller/singlestory/'.$row->news_id)  ?>" class="btn btn-primary btn-sm">Read More</a>
              </div>
              </li>
            <?php } ?>
          </marquee>
          </ul>
    </div>
  </div>
</div>
</div>
</div>