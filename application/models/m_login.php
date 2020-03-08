<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  
 */
class M_login extends CI_Model
{
	
	function cek_user($username="",$password="")
	{
		$query = $this->db->get_where('user',array('Username'=> $username, 'Password'=> $password));
		$query = $query->result_array(); 
		return $query;
	}
	function get_datalogin($username){
		$hasil =$this->db->select('*')
		->from('users')
		->where('username', $username)
		->get()->result();
		return $hasil;
	}
}
?>