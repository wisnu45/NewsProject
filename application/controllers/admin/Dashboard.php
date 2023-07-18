<?php
class Dashboard extends CI_Controller{

		function __construct(){
			parent::__construct();
			
			if(!$this->session->userdata('aid')){
				redirect('admin');
			}
		}
		public function index(){
			$this->load->model('adminmodel/catagory_model');
			$this->load->model('adminmodel/news_model');
			$this->load->model('adminmodel/userpost_model');
			$this->load->model('adminmodel/admin');
			$this->load->model('adminmodel/user');
			$data['catagory'] = $this->catagory_model->totalcatagory();
			$data['news'] = $this->news_model->num_rows();
			$data['userpost'] = $this->userpost_model->num_rows();
			$data['admin'] = $this->admin->num_rows();
			$data['user'] = $this->user->num_rows();
			$this->load->view("news_project/adminview/dashboard",$data);

		}
		
		public function logout(){
			$this->session->sess_destroy();
			redirect('admin');
		}
    }
?>