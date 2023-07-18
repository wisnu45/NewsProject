<?php
class User extends CI_Model{
	function getusers(){
		return $this->db->get('userregistration_tb')->result();
	}
	function num_rows(){
		return $this->db->get('userregistration_tb')->num_rows();
	}
	function editusers($id){
		return $this->db->get_where('userregistration_tb',array('u_id'=>$id))->row();
	}
	public function updateusers($id){
		$name = $this->input->post('uName');
		$email = $this->input->post('uEmail');
		$this->db->set('u_name',$name)
				 ->set('u_email',$email)
				 ->where('u_id',$id)
				 ->update('userregistration_tb');
	}
	public function deleteusers($id){
		$this->db->delete('userregistration_tb',array('u_id'=>$id));
	}
}

?>