<?php
class Hello_Model extends CI_Model{
	
	function saverecords($name,$email,$mobile,$address,$gender){
	$query="insert into users values('','$name','$email','$mobile','$address','$gender')";
	$this->db->query($query);
	}

	function displayrecords(){
	$sql="SELECT * FROM users";
	$query=$this->db->query($sql);
	return $query->result();
	}

	function deleterecords($id){
	$this->db->query("delete from users where user_id='".$id."'");
	} 

	function displayrecordsById($id){
		$query=$this->db->query("select * from users where user_id='".$id."'");
		return $query->result();
	}
	function updaterecords($name,$email,$mobile,$address,$id){
		$query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' address='$address' where user_id='".$id."'");
	} 


}