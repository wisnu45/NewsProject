<?php   
class Userlogin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('news_project/user_model');
    if($this->session->userdata('uid'))
      redirect('user/userprofilecontroller/userprofile');
	}
	public function index(){
		$this->load->view("news_project/userlogin");
	}

	public function userlogin(){
    $check=$this->user_model->check_login();
    if($check){
        $this->session->set_userdata('uid',$check->u_id);
        redirect('user/userprofilecontroller');
      }else{
        redirect('user/userlogin/index');
      }
    }
}



?>
