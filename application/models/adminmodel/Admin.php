<?php
class Admin extends CI_Model{

	public function validate(){
		$arr['a_email'] = $this->input->post('aEmail');
		$arr['a_password'] = md5($this->input->post('aPassword'));

		return $this->db->get_where('adminlogin_tb',$arr)->row();
	}

	function registration(){
		$arr['a_name'] = $this->input->post('aEmail');
		$arr['a_email'] = $this->input->post('aEmail');
		$arr['a_password'] = md5($this->input->post('aPassword'));
		return $this->db->insert('adminlogin_tb',$arr);
	}
	function getdata(){
		$id = $this->session->userdata('aid');
		return $this->db->get_where('adminlogin_tb',array('a_login_id'=>$id))->row();
	}
	function getassistant(){
		return $this->db->get('adminlogin_tb')->result();
	}
	function num_rows(){
		return $this->db->get('adminlogin_tb')->num_rows();
	}
	function editassistant($id){
		return $this->db->get_where('adminlogin_tb',array('a_login_id'=>$id))->row();
	}
	public function updateassistant($id){
		$name = $this->input->post('aName');
		$email = $this->input->post('aEmail');
		$this->db->set('a_name',$name)
				 ->set('a_email',$email)
				 ->where('a_login_id',$id)
				 ->update('adminlogin_tb');
	}
	public function deleteassistant($id){
		$this->db->delete('adminlogin_tb',array('a_login_id'=>$id));
	}
	function update(){
		$id = $this->session->userdata('aid');
		$email = $this->input->post('aEmail');
		$pass= md5($this->input->post('aPassword'));
		$this->db->set('a_email',$email)
				 ->set('a_password',$pass)
				 ->where('a_login_id',$id)
				 ->update('adminlogin_tb');
	}
}

?>