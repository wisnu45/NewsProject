<?php

	class Upload extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->model('File_model');
		}

		public function index(){
			$this->load->view('practice/upload');
		} 

		public function upload_file(){

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max-size'] = 10000000;
		$config['max-width'] = 1024;
		$config['max-height'] =768;

		$this->load->library('upload',$config);	

		if($this->upload->do_upload('upload_file')){
		// $showimage=array('upload_file'=>$this->upload->data());
		$file_name=$this->upload->data();
		$data=array('picture'=>$file_name['file_name']);
		$this->File_model->uploadfile($data);
		redirect('Upload/display_Data');
	}
}

	public function display_Data(){
		$result['data']=$this->File_model->displayData();
		$this->load->view('display_file',$result);
	}

	public function delete_file(){
		$id=$this->input->get('id');
		$this->File_model->deleteFile($id);
		redirect('Upload/display_Data');
	}
}
?>