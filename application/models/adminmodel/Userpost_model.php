<?php  
class Userpost_model extends CI_Model{
	function get_content($limit,$offset){
		return $this->db->select()
					->from('usercontent_tb')
					->join('catagory','usercontent_tb.catagory = catagory.catagory_id','left')
					->join('userregistration_tb','usercontent_tb.author = userregistration_tb.u_id','left')
					->order_by('content_id','desc')
					->limit($limit,$offset)
					->get()->result();
	}
	function num_rows(){
		return $this->db->select()
					->from('usercontent_tb')
					->join('catagory','usercontent_tb.catagory = catagory.catagory_id','left')
					->join('userregistration_tb','usercontent_tb.author = userregistration_tb.u_id','left')
					->order_by('content_id','desc')
					->get()->num_rows();
	}


	function getById($id){
		return $this->db->select()
					->from('usercontent_tb')
					->join('catagory','usercontent_tb.catagory = catagory.catagory_id','left')
					->join('userregistration_tb','usercontent_tb.author = userregistration_tb.u_id','left')
					->where(['content_id'=>$id])
					->get()->row();
	}

	function addnews($title,$desc,$catagory,$author,$date,$img){
		$query1 = $this->db->query("INSERT INTO `news`(`news_title`, `news_desc`, `catagory`, `news_date`, `news_img`, `user_author`) VALUES ('$title','$desc','$catagory','$date','$img','$author')");
		 $query2 = $this->db->query("UPDATE `catagory` SET post = post + 1 WHERE catagory_id = {$catagory}");
			
		$result1 = $query1 ;
		$result2 = $query2 ;
		return array_merge($result1,$result2);
	}
	function delete($id,$cat_id){
		$query1 = $this->db->delete('usercontent_tb',array('content_id'=>$id));
		$query2 = $this->db->query("UPDATE `catagory` SET post = post - 1 WHERE catagory_id = {$cat_id}");
		$result1 = $query1 ;
		$result2 = $query2 ;
		return array_merge($result1,$result2);
		}
}


?>