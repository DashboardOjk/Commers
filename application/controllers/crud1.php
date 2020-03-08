<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud1 extends CI_Controller {

	public function index()
	{ 
		$this->data['hasil'] = $this->m_crud1->getUser('content');
		$this->template->load('admin/static','crud',$this->data);
	}
	public function form_input(){
		$this->template->load('admin/static','form-input');
	}

	public function form_edit($id){
		$this->data['dataedit'] = $this->m_crud1->dataedit('content',$id);
		$this->template->load('admin/static','form-edit',$this->data);
 
	}
	public function insert(){
		$judul = $_POST['judul']; 
		// yang didalam kurung itu adalah nama=judul  berada di form-input
		$foto = $_POST['foto'];
		$isi = $_POST['isi'];
		$tanggal = $_POST['tanggal'];
		$data = array('Judul_content' => $judul ,'foto_content'=>$foto,'Isi_content'=>$isi,'Tanggal_content'=>$tanggal);
		$tambah= $this->m_crud1->tambahdata('content',$data);
		if ($tambah > 0) {
			redirect('crud1/index');
			# code...
		}else{
			echo "Gagal";
		}
	}
		public function delete($id){
			$hapus = $this->m_crud1->hapusdata('content',$id);
			if ($hapus > 0) {
			redirect('crud1/index');
		}else{
			echo "Gagal";
			}
		}

		public function update($id){
		$judul = $_POST['judul']; 
		// yang didalam kurung itu adalah nama=judul yang berada di form-input
		$foto = $_POST['foto'];
		$isi = $_POST['isi'];
		$tanggal = $_POST['tanggal'];
		$data = array('Judul_content' => $judul ,'foto_content'=>$foto,'Isi_content'=>$isi,'Tanggal_content'=>$tanggal);
		$edit= $this->m_crud1 ->editdata('content',$data,$id);
		if ($edit > 0) {
			redirect('crud1/index');
			# code...
		}else{
			echo "Gagal";
		}
		}


}
?>