<?php
class News extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('adminmodel/news_model');
			if(!$this->session->userdata('aid'))
				redirect('admin');
		}
		public function index(){
			redirect('admin/news/welcome');
		}
		public function welcome(){		
			$config = array();
	        $config["base_url"] = base_url('admin/news/welcome');
	        $config["total_rows"] = $this->news_model->num_rows();
	        $config["per_page"] = 2;      
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
	        $data['news'] = $this->news_model->getdata($config['per_page'],$this->uri->segment(4));
			$this->load->view('news_project/adminview/news',$data);

		}
		public function addnews(){
			$data['result'] = $this->news_model->getcatagory();
			$this->load->view('news_project/adminview/addnews',$data);


			if($this->input->post('submit')){
				$title = $this->input->post('title');
				$desc = $this->input->post('desc');
				$catagory = $this->input->post('catagory');
				$author = $this->session->userdata('aid');
				$date = $this->input->post('date');
				if(isset($_FILES['news_img']['name'])){
					$this->load->library('upload');
					$config['upload_path'] = APPPATH.'../uploads/';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
					$config['max-size'] = 10000000;
					$this->upload->initialize($config);
					if($this->upload->do_upload('news_img')){
						$upload = $this->upload->data();
						$img = $upload['file_name'];
					}
	           }
	        $this->news_model->addnews($title,$desc,$catagory,$author,$date,$img);
           	$this->session->set_flashdata('success','successfully submitted');
           	redirect('admin/news/index');
			}
		}
		function editnews($id){
			$data['result'] = $this->news_model->editnews($id);
			$this->load->view('news_project/adminview/editnews',$data);
		}
		function updatenews($id){
		$this->news_model->updatenews($id);
			$this->session->set_flashdata('success','Update successfully');
			redirect('admin/news/index');
		}

		function delete(){
			if(isset($_POST['delete'])){
			$id = $this->input->post('id');
			$cat_id = $this->input->post('cat_id');
			$this->news_model->delete($id,$cat_id);
			$this->session->set_flashdata('success','Delete successfully');
			redirect('admin/news/index');
		}
	}
		// function delete($id){
		// 	$id $this->input->post('id');
		// $this->news_model->delete($id);
		// 	$this->session->set_flashdata('success','Delete successfully');
		// 	redirect('admin/news/index');
		// }
    }
?>
