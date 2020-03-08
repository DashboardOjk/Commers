<?php
defined('BASEPATH') or exit('no direct allowed access');
/**
 * 
 */
class Menu extends CI_Controller
{
	

	public function index()
	{
		$data["judulapp"]="TI-STMIKNH.COM Media Sharing Mahasiswa TI STMIK Nurdin Hamzah Jambi"; 
		$data['menu'] = $this->model_crud->getMenu2(2,"");
	
		$data['menu1'] = $this->model_crud->getMenu1(2,"");
		$data['menu'] = $this->model_crud->getTabelMenu();
		$data['submenu1'] = $this->model_crud->getTabelSubMenu1();
		$data['submenu2'] = $this->model_crud->getTabelSubMenu2();
		// $data['menu'] 	= $this->model_crud->menu();
		// $data['ambil'] 	= $this->model_crud->getUser();
		$this->load->view('menu',$data);

	}
	public function form_edit($id)
	{
		$this->data['update'] = $this->model_crud->update('tbl_profil',$id);
		$this->template->load('admin/static','admin/profil/updateprofil',$this->data);
	}
	public function tambah()
	{
		$id_menu		= $_POST['id_menu'];
		$id_submenu_1	= $_POST['id_submenu_1'];
		$submenu_1 		= $_POST['submenu_1'];
		$link_1			= $_POST['link_1'];
		$submenu_2		= $_POST['submenu_2'];	
		$link_2 		= $_POST['link_2'];

		$submenu1		= array('submenu_1_' => $submenu_1,'link_1_'=>$link_1);
		$submenu2		= array('nama_level2' => $submenu_2,'link_level2'=>$link_2, 'id_menu'=>$id_menu,'id_submenu_1'=>$id_submenu_1);
			// $data = array('submenu'=>$submenu,'link'=>$link);			
		$insert2		= $this->model_crud->tambah_data('submenu_1',$submenu1);
		$insert2		= $this->model_crud->tambah_data('tbl_proses_menu',$submenu2);

		redirect('menu');
		
	}
	public function hapus($id)
	{
		$delete = $this->model_crud->hapus_data('tbl_profil',$id);
		if ($delete > 0) 
		{
			redirect('profil_lab');
		}else
		{
			echo "gagal";
		}
	}
	public function update_proses($id)
	{	
		$Nama_lab = $_POST['Namalab'];
		$Alamat_lab = $_POST['Alamatlab'];
		$Visi_lab = $_POST['Visilab'];
		$Misi_lab =  $_POST['Misilab'];
		$data = array('nama_profil'=>$Nama_lab,'alamat_profil'=>$Alamat_lab,'visi_profil'=>$Visi_lab,'misi_profil'=>$Misi_lab);
		$insert= $this->model_crud->tambah_data('tbl_profil',$data);
		if ($insert > 0) 
		{
			redirect('profil_lab');
		}else
		{
			echo "Gagal";
		}
	}


}



?>