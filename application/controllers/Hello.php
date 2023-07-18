<?php
class Hello extends CI_Controller {
	public function __construct(){
	//call CodeIgniter's default Constructor
	parent::__construct();
	//load database libray manually
	$this->load->database();
	$this->load->helper('url');
	//load Model
	$this->load->model('Hello_Model');
	}
 
	public function savedata(){
	//load registration view form
	$this->load->view('practice/registration');
	//Check submit button 
	if(isset($_POST['save'])){
		
		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$a=$_POST['address'];
		$g=$_POST['gender'];

		$this->Hello_Model->saverecords($n,$e,$m,$a,$g); 
		redirect("Hello/dispdata");  
	}
}
	// if($this->input->post('save'))
	// {
	// //get form's data and store in local varable
	// $n=$this->input->post('name');
	// $e=$this->input->post('email');
	// $m=$this->input->post('mobile');
	// $a=$this->input->post('address');
	// $g=$this->input->post('gender');
	// //call saverecords method of Hello_Model and pass variables as parameter
	// $this->Hello_Model->saverecords($n,$e,$m,$a,$g); 
	// echo "Records Saved Successfully";
	// }

	public function dispdata(){
	$result['data']=$this->Hello_Model->displayrecords();
	$this->load->view('display_records',$result);
	}

	public function deletedata(){
		$id=$this->input->get('id');
		// if(isset($_GET['id'])){
		// $id=$_GET['id'];
		$this->Hello_Model->deleterecords($id);
		redirect("Hello/dispdata");
	}

	public function updatedata(){
	$id=$this->input->get('id');
	$result['data']=$this->Hello_Model->displayrecordsById($id);
	$this->load->view('update_records',$result);

	if($this->input->post('update')){
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$m=$this->input->post('mobile');
		$a=$this->input->post('address');
		$this->Hello_Model->updaterecords($n,$e,$m,$a,$id);
		redirect("Hello/dispdata");
		}
	}
}
?>