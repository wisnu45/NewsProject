<?php  
	class Changepass extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('adminmodel/admin');
			if(!$this->session->userdata('aid')){
				redirect('admin');
			}
		}

		function index(){
			$data['result'] = $this->admin->getdata();
			$this->load->view('news_project/adminview/changepass',$data);
		}

		function update(){
				$this->admin->update();
				$this->session->set_flashdata('success','Update Successfully');
				redirect('admin/Changepass/index');	
			}	
	}

?>