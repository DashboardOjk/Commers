<?php
defined('BASEPATH')or exit('no direct access allowed');

/**
 * 
 */
class M_crud1 extends CI_Model
{
	public function getUser($table_name)
	{
		$get_user= $this->db->get($table_name);
		return $get_user->result_array(); 
	}
	public function tambahdata($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
 
	}
	public function editdata($table_name,$data,$id){
		$this->db->where('ID_content',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function dataedit($table_name,$id){
		
		$this->db->where('ID_content',$id);
		$get_user= $this->db->get($table_name);
		return $get_user->row(); 
	}
	public function hapusdata($table_name,$id){
		$this->db->where('ID_content',$id);
		$hapus = $this->db->delete($table_name);
		// klw hapus data parameter ,namatable serta id
		return $hapus;
	}
}



?>