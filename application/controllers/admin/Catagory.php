<?php  
class Catagory extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('adminmodel/catagory_model');
		if(!$this->session->userdata('aid')){
			redirect('admin');
		}
	}

	function index(){
		$data['result'] = $this->catagory_model->getcatagory();
		$this->load->view('news_project/adminview/catagory',$data);
	}
	function addcatagory(){
		 $this->form_validation->set_rules('catagory_name', 'Catagory name', 'required');
       	 $this->form_validation->set_error_delimiters('<div class="text-danger p-2 font-weight-bold">','</div>');
        if($this->form_validation->run() == TRUE){
        	$catagory = $this->input->post('catagory_name');
        	$this->catagory_model->addcatagory($catagory);
        	$this->session->set_flashdata('success');
				redirect('admin/Catagory/index');
		}else{
			$this->load->view('news_project/adminview/addcatagory');
		}
}
	function delete($id){
		$this->catagory_model->delete($id);
		$this->session->set_flashdata('success');
		redirect('admin/Catagory/index');
	}
}

 ?>