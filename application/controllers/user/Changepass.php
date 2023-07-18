<?php   
	class Changepass extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('news_project/user_model');
			if(!$this->session->userdata('uid'))
      			redirect('user/userlogin/index');
		}
		
		public function index(){
			$data['result'] = $this->user_model->getuserdata();
			$this->load->view('news_project/userview/changepass',$data);
			
			if(isset($_POST['submit'])){
				$id = $this->session->userdata('uid');
				$pass=md5($this->input->post('uPassword'));
				$this->user_model->changeuserpass($id,$pass);
				$this->session->set_flashdata('success','update successfully');
					redirect('user/Changepass/index');
			}
	}
}

?>