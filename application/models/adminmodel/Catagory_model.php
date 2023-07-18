<?php  

	class Catagory_model extends CI_Model{
		
		function getcatagory(){
			return $this->db->get('catagory')->result();
		}
		function num_rows(){
			return $this->db->get('catagory')->result();
		}
		function navcatagory(){
			return $query = $this->db->query("SELECT * FROM catagory WHERE post > 0 ")->result();
		}
		function catById($id){
			return $query = $this->db->query("SELECT * FROM catagory WHERE catagory_id='$id'")->row();
		}
		function catagoryByNews($id){
		return $this->db->select()
						->from('news')
						->join('catagory','news.catagory = catagory.catagory_id','left')
						->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
						->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
						->where(['news.catagory'=>$id])
						->order_by('news_id','desc')
						->get()->result();
		}
		function totalcatagory(){
			return $this->db->get('catagory')->num_rows();
		}
		
		function addcatagory($catagory){
			$query=$this->db->query("INSERT INTO catagory(`catagory_name`) VALUES('$catagory')");
		}

		function delete($id){
			$this->db->delete('catagory',array('catagory_id'=>$id));
		}
	}

?>