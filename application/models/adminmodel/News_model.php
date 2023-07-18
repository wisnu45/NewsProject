<?php 
class News_model extends CI_Model{
	function totalnews(){
		return $this->db->select()
						->from('news')
						->join('catagory','news.catagory = catagory.catagory_id','left')
						->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
						->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
						->order_by('news_id','desc')
						->limit(4)
						->get()->result();
		}


	function getdata($limit,$offset){
		$search = $this->input->get('searchtitle');
		return $this->db->select()
					->from('news')
					->join('catagory','news.catagory = catagory.catagory_id','left')
					->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
					->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
					->order_by('news_id','desc')
					->like(array('news_title'=>$search))
					->or_like(array('news_desc'=>$search))
					->or_like(array('news.catagory'=>$search))
					->or_like(array('news.user_author'=>$search))
					->limit($limit,$offset)
					->get()->result();
	}

	function num_rows(){
		$search = $this->input->get('searchtitle');
		return $this->db->select()
					->from('news')
					->join('catagory','news.catagory = catagory.catagory_id','left')
					->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
					->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
					->like(array('news_title'=>$search))
					->or_like(array('news_desc'=>$search))
					->or_like(array('news.catagory'=>$search))
					->or_like(array('news.user_author'=>$search))
					->get()->num_rows();
	}

	function getcatagory(){
		return $this->db->get('catagory')->result();
	}

	function addnews($title,$desc,$catagory,$author,$date,$img){
		$query1 = $this->db->query("INSERT INTO `news`(`news_title`, `news_desc`, `catagory`, `author`, `news_date`, `news_img`) VALUES ('$title','$desc','$catagory','$author','$date','$img')");
		$query2 = $this->db->query("UPDATE `catagory` SET post = post + 1 WHERE catagory_id = {$catagory}");
		
		$result1 = $query1 ;
		$result2 = $query2 ;
		return array_merge($result1,$result2);
	}

	function editnews($id){
		return $this->db->get_where('news',array('news_id'=>$id))->row();
	}
	function singlestory($id){
		return $this->db->select()
						->from('news')
						->join('catagory','news.catagory = catagory.catagory_id','left')
						->join('adminlogin_tb','news.author = adminlogin_tb.a_login_id','left')
						->join('userregistration_tb','news.user_author = userregistration_tb.u_id','left')
						->order_by('news_id','desc')
						->where(['news_id'=>$id])
						->get()->result();
		}
	function updatenews($id){
		$arr['news_title'] = $this->input->post('title');
		$arr['news_desc'] = $this->input->post('desc');
		$arr['news_date'] = $this->input->post('date');

		$this->db->where(array('news_id' => $id))
				->update('news',$arr);
	}

	function delete($id,$cat_id){
		$query1 = $this->db->delete('news',array('news_id'=>$id));
		$query2 = $this->db->query("UPDATE `catagory` SET post = post - 1 WHERE catagory_id = {$cat_id}");
		$result1 = $query1 ;
		$result2 = $query2 ;
		return array_merge($result1,$result2);
	}
}

 ?>