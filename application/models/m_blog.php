<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_blog extends CI_Model
{
	
	public function GetBlog()
	{
		$data = $this->db->query('SELECT * FROM content;');
		return $data;
	}
	public function GetBlogSingle($id){
		$single = $this->db->select('*')
							->from('content')
							->where('ID_content', $id)
							->get();
		return $single;
	}
}
?>