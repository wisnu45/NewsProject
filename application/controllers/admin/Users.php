<?php
class Users extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('adminmodel/user');
			if(!$this->session->userdata('aid'))
				redirect('admin');
		}
		
		public function index(){
			$data['result'] = $this->user->getusers();
			$this->load->view("news_project/adminview/users",$data);
		}
		public function editusers($id){
			$data['result'] = $this->user->editusers($id);
			$this->load->view('news_project/adminview/editusers',$data);
		}
		public function updateusers($id){
			$this->user->updateusers($id);
			$this->session->set_flashdata('success',"update successfully");
			redirect('admin/assistant/index');
		}
		public function deleteusers($id){
			$this->user->deleteusers($id);
			$this->session->set_flashdata('success',"Delete successfully");
			redirect('admin/assistant/index');
		}
    }
?>