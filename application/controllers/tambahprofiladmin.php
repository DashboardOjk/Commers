<?php
defined('BASEPATH') or exit('no direct allowed access');

class Tambahprofiladmin extends CI_Controller
{
	
	public function index()
	{
		if ($this->session->userdata('isLogin')==True) {
		$this->data['hasil'] = $this->model_crud->getUser('tbl_profil');//tidak terlalu penting
		$this->template->load('admin/static','admin/profil/tambahprofil',$this->data);
		}
		else 
		{
		redirect('login');
		}
	}
	public function tambah(){
		$Nama_lab = $_POST['Namalab'];
		$Alamat_lab = $_POST['Alamatlab'];
		$foto_lab	= $_POST['Fotolab'];
		$Visi_lab = $_POST['Visilab'];
		$Misi_lab =  $_POST['Misilab'];
		$data = array('nama_profil'=>$Nama_lab,'alamat_profil'=>$Alamat_lab,'visi_profil'=>$Visi_lab,'misi_profil'=>$Misi_lab);
		$insert= $this->model_crud->tambah_data('tbl_profil',$data);
		if ($insert > 0) 
		{
			redirect('tbl_profil');
		}else{
			echo "Gagal";
		}

	}
	

}

?>