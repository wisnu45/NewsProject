<?php   
class Userregistration extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('news_project/user_model');
	}
	public function index(){
    $data['title'] = 'Registration';
		$this->load->view("news_project/userview/userregistration",$data);
	}

	public function registration(){
		//set rules form_validation
        $this->form_validation->set_rules('uName', 'Name', 'required|alpha');
        $this->form_validation->set_rules('uEmail', 'Email', 'required|valid_email|is_unique[userregistration_tb.u_email]');
        $this->form_validation->set_rules('uPassword', 'New Password', 'required|min_length[3]|max_length[12]');

        $this->form_validation->set_error_delimiters('<div class="text-danger p-2 font-weight-bold">','</div>');

        //check validation
        if($this->form_validation->run() == TRUE){
           $this->user_model->insert_data();
           redirect("News_controller/index");

        }else{
        	$this->load->view('news_project/userview/userregistration');
        }
	}
}



?>