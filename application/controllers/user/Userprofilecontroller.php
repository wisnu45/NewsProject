<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Userprofilecontroller extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('news_project/user_model');
			if(!$this->session->userdata('uid'))
      			redirect('user/userlogin/index');
		}
		public function index(){
			redirect('user/Userprofilecontroller/userprofile');
		}
		public function userprofile(){
			$data['result'] = $this->user_model->getuserdata();
			$this->load->view('news_project/userview/userprofile',$data);
		}
		public function updateprofile(){
			$this->user_model->updateprofile();
			$this->session->set_flashdata('success','update successfully');
				redirect('user/Userprofilecontroller/userprofile');
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect("user/Userlogin/index");
		}
	}
?>