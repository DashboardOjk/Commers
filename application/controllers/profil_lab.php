<?php
defined('BASEPATH') or exit('no direct allowed access');
/**
 * 
 */
class Profil_lab extends CI_Controller
{
	
		public function index()
		{
			if ($this->session->userdata('isLogin')==True) {
			$this->data['hasil'] = $this->model_crud->getUser('tbl_profil');
			$this->template->load('admin/static','admin/profil/view_profil',$this->data);
			}
			else 
			{
			redirect('login');
			}	
		}
		public function form_edit($id)
		{
			$this->data['update'] = $this->model_crud->update('tbl_profil',$id);
			$this->template->load('admin/static','admin/profil/updateprofil',$this->data);
		}
		public function tambah()
		{
			$Nama_lab = $_POST['Namalab'];
			$Alamat_lab = $_POST['Alamatlab'];
			$Visi_lab = $_POST['Visilab'];
			$Misi_lab =  $_POST['Misilab'];

			$ekstensi_diperbolehkan	= array('png','jpg');
			$foto = $_FILES['foto']['name'];
			$x = explode('.', $foto);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];
			move_uploaded_file($file_tmp, 'gambar/'.$foto);


			$data = array('nama_profil'=>$Nama_lab,'alamat_profil'=>$Alamat_lab,'visi_profil'=>$Visi_lab,'misi_profil'=>$Misi_lab,'foto_profil'=>$foto);
			$insert= $this->model_crud->tambah_data('tbl_profil',$data);
			if ($insert > 0) 
			{
				redirect('profil_lab');
			}
			else
			{
				echo "Gagal";
			}
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