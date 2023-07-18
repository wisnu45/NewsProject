<?php
class Assistant extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('adminmodel/admin');
			if(!$this->session->userdata('aid'))
				redirect('admin');
		}
		
		public function index(){
			$data['result'] = $this->admin->getassistant();
			$this->load->view("news_project/adminview/assistant",$data);
		}
		public function editassistant($id){
			$data['result'] = $this->admin->editassistant($id);
			$this->load->view('news_project/adminview/editassistant',$data);
		}
		public function updateassistant($id){
			$this->admin->updateassistant($id);
			$this->session->set_flashdata('success',"update successfully");
			redirect('admin/assistant/index');
		}
		public function deleteassistant($id){
			$this->admin->deleteassistant($id);
			$this->session->set_flashdata('success',"Delete successfully");
			redirect('admin/assistant/index');
		}
    }
?>