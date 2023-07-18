<?php
	 class Crud_model extends CI_Model{

	 	function InsertData($name,$email,$phone,$address,$gender,$hobby,$password){
	 		$sql="INSERT INTO `registration`(name,email,Phone,address,gender,hobby,password) VALUES ('$name','$email',$phone,'$address','$gender','$hobby','$password')";
	 		$this->db->query($sql);
	 	}

	 	function DisplayData(){
	 		$sql="SELECT * FROM `registration`";
	 		$query=$this->db->query($sql);
	 		return $query->result();
	 	}

	 	function delete_data($id){
	 		$query=$this->db->query('delete from registration where id='.$id.'');
	 	}
	 	function updatebyid($id){
	 		$sql="SELECT * FROM `registration` WHERE id='$id'";
	 		$query=$this->db->query($sql);
	 		return $query->result();
	 	}

	 	function updatedata($name,$email,$phone,$address,$id){
	 		$query=$this->db->query("UPDATE registration SET name='$name',email='$email',Phone='$phone',address='$address' WHERE id='".$id."'");
	 	}
	}


?>