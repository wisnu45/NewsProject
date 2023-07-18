<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firstcontroller extends CI_Controller{
	
	public function test()
	{
		$this->load->view('click1');
	}
	public function test1(){
		$this->load->view('click2');
	}
	public function test2(){
		$this->load->view('click3');
	}
	public function test3()
	{
		$this->load->view('first');
	}
}


?>