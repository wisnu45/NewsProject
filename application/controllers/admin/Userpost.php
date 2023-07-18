<?php  
class Userpost extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('adminmodel/userpost_model');
		if(!$this->session->userdata('aid'))
			redirect('admin');
	}
	function index(){
		$config = array();
        $config["base_url"] = base_url('admin/Userpost/index');
        $config["total_rows"] = $this->userpost_model->num_rows();
        $config["per_page"] = 3;
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
		$data['news'] = $this->userpost_model->get_content($config['per_page'],$this->uri->segment(4));
		$this->load->view('news_project/adminview/userpost',$data);
	}
	function edituserpost($id){
		$data['result'] = $this->userpost_model->getById($id);
		$this->load->view('news_project/adminview/edituserpost',$data);
	}
	function Addnews(){
		if($this->input->post('upload')){
			$title = $this->input->post('up_title');
			$desc = $this->input->post('up_desc');
			$catagory = $this->input->post('catagory');
			$author = $this->session->userdata('uid');
			$date = $this->input->post('up_date');
			if(isset($_FILES['news_img']['name'])){
				$this->load->library('upload');
				$config['upload_path'] = APPPATH.'../uploads/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
				$config['max-size'] = 10000000;
				$this->upload->initialize($config);
				if($this->upload->do_upload('news_img')){
					$uploaded = $this->upload->data();
					$img = $uploaded['file_name'];
				}
           }
           	$this->userpost_model->addnews($title,$desc,$catagory,$author,$date,$img);
           	$this->session->set_flashdata('success','successfully submitted');
           	redirect('admin/Userpost/index');
        }
		// $this->userpost_model->Update($id);
		// 	$this->session->set_flashdata('success','Update successfully');
		// 	redirect('admin/Userpost/index');
	}
	function delete(){
		if(isset($_POST['delete'])){
			$id = $this->input->post('id');
			$cat_id = $this->input->post('cat_id');
			$this->userpost_model->delete($id,$cat_id);
			$this->session->set_flashdata('success','Delete successfully');
			redirect('admin/Userpost/index');
		}
	}
}

?>
