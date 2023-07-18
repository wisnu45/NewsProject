<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('adminmodel/catagory_model');
		$this->load->model('adminmodel/news_model');
	}

	public function index()
	{		
		$data['subnav'] = $this->news_model->totalnews();
		$data['catagory'] = $this->catagory_model->navcatagory();
			$config = array();
	        $config["base_url"] = base_url('News_controller/index');
	        $config["total_rows"] = $this->news_model->num_rows();
	        $config["per_page"] = 4; 
	        $config['reuse_query_string'] = TRUE;     
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] = "</ul>";
	        $config['next_tag_open'] = "<li class='page-item'>";
	        $config['next_tag_close'] = "</li>";
	        $config['prev_tag_open'] = "<li class='page-item'>";
	        $config['prev_tag_close'] = "</li>";
	        $config['num_tag_open'] = "<li class='page-item'>";
	        $config['num_tag_close'] = "</li>";
	        $config['cur_tag_open'] = "<li class='active'><a>";
	        $config['cur_tag_close'] = "</a></li>";

	        $this->pagination->initialize($config);
	        $data['body'] = $this->news_model->getdata($config['per_page'],$this->uri->segment(3));
			$this->load->view('news_project/index',$data);
	}

	public function Contact()
	{
		$data['catagory'] = $this->catagory_model->navcatagory();
		$this->load->view('news_project/contact',$data);
	}
	public function singlestory($id){	
		$data['catagory'] = $this->catagory_model->navcatagory();
		$data['subnav'] = $this->news_model->totalnews();
		$data['body'] = $this->news_model->singlestory($id);
		// $data['news'] = $this->catagory_model->catagoryByNews($id);
		$this->load->view('news_project/singlestory',$data);
	}
	function catagory($id){
		$data['catagory'] = $this->catagory_model->navcatagory();
   	    $data['subnav'] = $this->news_model->totalnews();
   	   	$data['cataname'] = $this->catagory_model->catById($id);
   	   
        $data['body'] = $this->catagory_model->catagoryByNews($id);
		$this->load->view('news_project/catagory',$data);
	}

}


?>