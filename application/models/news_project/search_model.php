<?php
	class Search_model extends CI_Model{
		function search($query){
			return $this->db->select()
						->from('news')
						->join('catagory','news.catagory = catagory.catagory_id','left')
						->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
						->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
						->like('news_title',$query)
						->order_by('news_id','desc')
						->get()->result();
		}
	}
?>