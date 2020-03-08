<?php if (!define('BASEPATH')) exit('Hanking attempt : keluar kau bodoh');
/**
 * 
 */
class MM_crud extends CI_Models
{
	
	public function __construct(argument)
	{
		# code...
	}
	public function getsemua($table){
		return $this->db->get($table)->result();
	}
	public function getN($table, $kolom, $variable){
		return $this->db->where($kolom, $variable)
					->get($table)->result();
	} 
	public function tambah($table ,$data){
		$this->db->insert($table, $data);
	}
	public function hapus($table, $kolom, $variable){
		$this->db->where($kolom, $variable)->delete($table);
	}
	public function update($table, $variable, $kolom, $data){
		$this->db->where($kolom,$variable);
		$this->db->update($table, $data);
	}
}



?>