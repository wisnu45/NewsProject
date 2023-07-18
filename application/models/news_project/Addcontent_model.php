<?php  

	class Addcontent_model extends CI_Model{
		
		function Show_content($limit,$offset){
			
			// $sql="SELECT `usercontent_tb`.`content_id`, `usercontent_tb`.`title`, `usercontent_tb`.`body`,`usercontent_tb`.`date`,`usercontent_tb`.`image`,`catagory`.`catagory_name`,`userregistration_tb`.`u_name`, `usercontent_tb`.`catagory` FROM (`usercontent_tb`) 
			// 	Left JOIN `catagory` ON `usercontent_tb`.`catagory`=`catagory`.`catagory_id`
			// 	Left JOIN `userregistration_tb` ON `usercontent_tb`.`author`=`userregistration_tb`.`u_id`
			// 	WHERE author = '$id'
			// 	ORDER BY `usercontent_tb`.`content_id` DESC";
			// return $this->db->query($sql)->result();
			$id=$this->session->userdata('uid');
			return $this->db->select()
					->from('usercontent_tb')
					->join('catagory','usercontent_tb.catagory = catagory.catagory_id','left')
					->join('userregistration_tb','usercontent_tb.author = userregistration_tb.u_id','left')
					->order_by('content_id','desc')
					->limit($limit,$offset)
					->where(['author' => $id])
					->get()->result();
		}
		function num_rows(){
			$id=$this->session->userdata('uid');
			return $this->db->select()
					->from('usercontent_tb')
					->join('catagory','usercontent_tb.catagory = catagory.catagory_id','left')
					->join('userregistration_tb','usercontent_tb.author = userregistration_tb.u_id','left')
					->order_by('content_id','desc')
					->where(['author' => $id])
					->get()->num_rows();
		}

		function getcatagory(){
		return $this->db->get('catagory')->result();
		}
		function add_data($title,$body,$catagory,$author,$date,$img){
			$query = $this->db->query("INSERT INTO `usercontent_tb`(`title`, `body`, `catagory`, `author`, `date`, `image`) VALUES ('$title','$body','$catagory','$author','$date','$img')"); 
		}

		function getById($id){
			return $this->db->get_where('usercontent_tb',array('content_id' => $id))->row();
		}
		function content_update($title,$body,$date,$id){
			$query = $this->db->query("UPDATE usercontent_tb SET `title` = '$title',`body` = '$body', `date` = '$date' WHERE content_id = '$id'");
		}

		function delete($id){
			$query1 = $this->db->delete('usercontent_tb',array('content_id'=>$id));
			// $query2 = $this->db->query("UPDATE `catagory` SET post = post - 1 WHERE catagory_id = {$cat_id}");
			// $result1 = $query1 ;
			// $result2 = $query2 ;
			// return array_merge($result1,$result2);
		}
	}

?>