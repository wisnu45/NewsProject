<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailSend extends CI_Controller{
	public function index()
	{
		$this->load->view('mail_form');
	}
	public function sent()
	{
		$config=array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' =>  465,
			'smtp_user' => 'tarunkumbhakar030@gmail.com',
			'smtp_pass' => 'tarunbabu',
			'charset'   => 'iso-8859-1',
			'mailtype'  => 'html',
			'word_wrap' => TRUE
		);
		//take the form entity
		$to=$this->input->post('email');
		$sub=$this->input->post('subject');
		$body=$this->input->post('body');

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		//where wu sent
		$this->email->from('tarunkumbhakar030@gmail.com','');
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($body);


		if($this->email->send()){
			echo "message send successfully";
		}else{
			echo "message not sent";
		}
	}

}