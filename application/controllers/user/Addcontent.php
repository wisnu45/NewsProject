<?php   
	class Addcontent extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('news_project/addcontent_model');
			if(!$this->session->userdata('uid'))
      			redirect('user/userlogin/index');
		}
		public function index(){
			$config = array();
	        $config["base_url"] = base_url('user/Addcontent/index');
	        $config["total_rows"] = $this->addcontent_model->num_rows();
	        $config["per_page"] = 1;
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] = "</ul>";
	        $config['next_tag_open'] = "<li class='page-item'>";
	        $config['next_tag_close'] = "</li>";
	        $config['prev_tag_open'] = "<li class='page-item'>";
	        $config['prev_tag_close'] = "</li>";
	        $config['num_tag_open'] = "<li class='page-item'>";
	        $config['num_tag_close'] = "</li>";
	        $config['cur_tag_open'] = "<li class='active'><a>";
	        $config['cur_tag_close'] = "</a></li>";

	        $this->pagination->initialize($config);
			$data['result'] = $this->addcontent_model->Show_content($config['per_page'],$this->uri->segment(4));
			$this->load->view('news_project/userview/content',$data);
		}

		public function addcontent(){
			$data['result'] = $this->addcontent_model->getcatagory();
			$this->load->view('news_project/userview/addcontent',$data);

			if($this->input->post('userupload')){
			$title = $this->input->post('title');
			$body = $this->input->post('body');
			$catagory = $this->input->post('catagory');
			$author = $this->session->userdata('uid');
			$date = $this->input->post('date');
			if(isset($_FILES['image']['name'])){
				$this->load->library('upload');
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
				$config['max-size'] = 10000000;
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
					$uploaded = $this->upload->data();
					$img = $uploaded['file_name'];
				}
           }
           	$this->addcontent_model->add_data($title,$body,$catagory,$author,$date,$img);
           	$this->session->set_flashdata('success','successfully submitted');
           	redirect('user/Addcontent/index');
        }
	}

	public function edit($id){
		$data['result'] = $this->addcontent_model->getById($id);
		$this->load->view('news_project/userview/edit',$data);
	}
	public function update($id){
		if($this->input->post('update')){
		$title = $this->input->post('up_title');
		$body = $this->input->post('up_body');
		$date = $this->input->post('up_date');
		$this->addcontent_model->content_update($title,$body,$date,$id);
			$this->session->set_flashdata('success','Update successfully');
			redirect('user/Addcontent/index');	
		}
	}

	public function delete(){
		if(isset($_POST['delete'])){
		$id = $this->input->post('id');
		$cat_id = $this->input->post('cat_id');
		$this->addcontent_model->delete($id,$cat_id);
		$this->session->set_flashdata('success','successfully Deleted');
		redirect('user/Addcontent/index');
		}
	}
}


?>