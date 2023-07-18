<?php

	class Crud extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('Crud_model');
		}

		function insertdata(){
			$this->load->view('reg_form');

			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
				$gender=$_POST['gender'];
				$hobby=implode(",",$_POST['hobby']);
				$password=$_POST['pass'];

				$this->Crud_model->InsertData($name,$email,$phone,$address,$gender,$hobby,$password);
				redirect('Crud/displaydata');
			}
		}

		public function displaydata(){
			$result['data']=$this->Crud_model->DisplayData();
			$this->load->view('display',$result);
		}


		public function deletedata(){
			$id=$this->input->get('id');
			$this->Crud_model->delete_data($id);
			redirect('Crud/displaydata');
		}

		public function updatedata(){
			$id=$this->input->get('id');
			$result['data']=$this->Crud_model->updatebyid($id);
			$this->load->view('update',$result);


			if($this->input->post('update')){
				$n=$this->input->post('name');
				$e=$this->input->post('email');
				$p=$this->input->post('phone');
				$a=$this->input->post('address');

				$this->Crud_model->updatedata($n,$e,$p,$a,$id);
				redirect('Crud/displaydata');
			}
		}
	}

?>