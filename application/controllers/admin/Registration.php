<?php
class Registration extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("adminmodel/admin");
		}
		
		public function index(){
			$this->load->view("news_project/adminview/adminregistration");
		}
		public function registration(){
		$this->form_validation->set_rules('aName', 'Name', 'required|alpha');
        $this->form_validation->set_rules('aEmail', 'Email', 'required|valid_email|is_unique[adminlogin_tb.a_email]');
        $this->form_validation->set_rules('aPassword', 'New Password', 'required|min_length[3]|max_length[12]');

        $this->form_validation->set_error_delimiters('<div class="text-danger p-2 font-weight-bold">','</div>');

        if($this->form_validation->run() == TRUE){
	        $this->admin->registration();
			$this->session->set_flashdata('success','Successfully Registered');
				redirect('admin/Registration');
        }else{
        	$this->load->view('news_project/adminview/adminregistration');
        }
	}

}
?>