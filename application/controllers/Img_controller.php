<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Img_controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("img_model");
	}

	public function index()
	{
		$this->load->view('img_view');
	}
	public function products(){       
    $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
        $dataInfo[] = $this->upload->data('file_name');
    }

    $data = array(
        'name' => $this->input->post('pd_name'),
        'prod_image' => $dataInfo[0]['file_name'],
        'prod_image1' => $dataInfo[1]['file_name'],
        'prod_image2' => $dataInfo[2]['file_name'],
        'created_time' => date('Y-m-d H:i:s')
     );
     $result_set = $this->img_model->insertUser($data);
}

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}
}
?>

