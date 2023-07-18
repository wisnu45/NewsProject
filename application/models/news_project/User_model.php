<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User_model extends CI_Model{
		public function insert_data(){
			$arr['u_name'] = $this->input->post('uName');
            $arr['u_email'] = $this->input->post('uEmail');
            $arr['u_password'] = md5($this->input->post('uPassword'));
            $this->db->insert('userregistration_tb',$arr);
		}
		public function check_login(){
			$arr['u_email'] = $this->input->post('uEmail');
			$arr['u_password'] =md5($this->input->post('uPassword'));
			return $this->db->get_where('userregistration_tb',$arr)->row();
		}
		public function getuserdata(){
			$id = $this->session->userdata('uid');
			return $this->db->from('userregistration_tb')
					->where(['u_id'=>$id])
					->get()->row();
		}

		public function updateprofile(){
		$id = $this->session->userdata('uid');
		$uname = $this->input->post('uName');	
			$this->db->set('u_name',$uname)
					 ->where(['u_id'=>$id])
					 ->update('userregistration_tb');
		}

		public function changeuserpass($id,$pass){
			 $this->db->set('u_password',$pass)
					 ->where(['u_id'=>$id])
					 ->update('userregistration_tb');
							
		}
}