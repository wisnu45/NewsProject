<?php
class Login extends CI_Controller{

		function __construct(){
			parent::__construct();
			if($this->session->userdata('aid'))
				redirect('admin/dashboard');
		}
		
		public function index(){
			$this->load->view("news_project/adminview/login");
		}
		public function verify(){

			$this->load->model("adminmodel/admin");
			$check = $this->admin->validate();
			if($check){
				$this->session->set_userdata('aid',$check->a_login_id);
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('message','Invalid Login');
				redirect('admin');
			}
		}

    }
?>