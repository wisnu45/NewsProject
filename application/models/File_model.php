<?php

	 class File_model extends CI_Model{

	 	public function uploadfile($data){
	 		$query=$this->db->insert('img_db',$data);
	 	}

	 	public function displayData(){
	 		$sql="SELECT * FROM `img_db`";
	 		$query=$this->db->query($sql);
	 		return $query->result();
	 	}

	 	public function deleteFile($id){
	 		$sql="DELETE FROM `img_db` WHERE id='$id'";
	 		$query=$this->db->query($sql);
	 	}
	 }
?>