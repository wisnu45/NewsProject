<?php
class Img_model extends CI_Model{
	
	function insertUser($data){
	$this->db->insert('multiimage',$data);
	}
}