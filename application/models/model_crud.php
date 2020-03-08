<?php if(!defined('BASEPATH')) exit('no direct access allowed');

class Model_crud extends CI_Model
{
	
	// public function getUser()
	// { 
	// 	$get_user = $this->db->select('*')
	// 							->from('tbl_proses_menu')
	// 							->join('menu','menu.id_menu = tbl_proses_menu.id_menu')
	// 							->join('submenu_1','submenu_1.id_submenu_1 = tbl_proses_menu.id_submenu_1')
	// 							->group_by('tbl_proses_menu.id_menu')
	// 							->get();
	// 	return $get_user->result_array();
	// }
	// public function menu()
	// { 
	// 	$get_user = $this->db->select('*')
	// 							->from('menu')
	// 							->get();
	// 	return $get_user->result_array();
	// }
	
	// public function tambah_data($table_nama,$data)
	// {
	// 	$insert = $this->db->insert($table_nama,$data);
	// 	return $insert;
	// }
	// public function hapus_data($table_nama,$id){
	// 	$this->db->where('id_profil',$id);
	// 	$delete = $this->db->delete($table_nama);
	// 	return $delete;
	// }
	// public function update($table_name,$id)
	// {
	// 	$this->db->where('id_profil',$id);
	// 	$get_user = $this->db->get($table_name);
	// 	return $get_user->row();
	// }
		
	public function getTabelMenu()
	{ 
		$get_user = $this->db->select('*')
								->from('menu')
								->where('id_menu',2)
								->get();
		return $get_user->result_array();
	}

	public function getTabelSubMenu1()
	{ 
		$get_user = $this->db->select('*')
								->from('submenu')
								->get();
		return $get_user->result_array();
	}
	public function getTabelSubMenu2()
	{ 
		$get_user = $this->db->select('*')
								->from('subsubmenu')
								->get();
		return $get_user->result_array();
	}

	public function getMenu1($parent,$hasil){

        $w = $this->db->query("SELECT * from menu where id_position='".$parent."'");
        if(($w->num_rows())>0)
        {
            $hasil .= "<table border ='3'> <tr id=''>  ";
        }
			foreach($w->result() as $h)
			{
				$hasil .= "<td><a href=".$h->link."> ".$h->nama_menu."</a><td>";
				$wa= $this->db->query("SELECT * from submenu where id_menu='".$h->id_menu."'");
					foreach($wa->result() as $ha)
						{
							$hasil .= "<td><a href=".$ha->link_submenu."> ".$ha->nama_submenu."</a><td>"; 
								$waa= $this->db->query("SELECT * from subsubmenu where id_submenu='".$ha->id_submenu."'");
								foreach($waa->result() as $haa)
									{
										$hasil .= "<td><a href=".$haa->link_subsubmenu."> ".$haa->nama_subsubmenu."</a></td>"; 
									}
						}
				$hasil .= " </tr>";
			}
            $hasil .= "</tr></table>";
        
       return $hasil;
   }

	public function getMenu2($parent,$hasil){

        $w = $this->db->query("SELECT * from menu where id_position='".$parent."'");
        if(($w->num_rows())>0)
        {
            $hasil .= "<ul id=''>  ";
        }
			foreach($w->result() as $h)
			{
				$hasil .= "<li><a href=".$h->link."> ".$h->nama_menu."</a><ul>";
				$wa= $this->db->query("SELECT * from submenu where id_menu='".$h->id_menu."'");
					foreach($wa->result() as $ha)
						{
							$hasil .= "<li><a href=".$ha->link_submenu."> ".$ha->nama_submenu."</a><ul>"; 
								$waa= $this->db->query("SELECT * from subsubmenu where id_submenu='".$ha->id_submenu."'");
								foreach($waa->result() as $haa)
									{
										$hasil .= "<li><a href=".$haa->link_subsubmenu."> ".$haa->nama_subsubmenu."</a></li>"; 
									}
			
							$hasil .= " </ul></li>";
			
						}
				$hasil .= " </ul></li>";
			}
            $hasil .= "</ul>";
        
       return $hasil;
   }
}
