<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct()
	{
	parent:: __construct();
	$this->load->model('m_login');
	
	}
	
	public function index()
	{	
		if ($this->session->userdata('isLogin')==TRUE) {
			redirect('admin'); 
		}else
		{
		$this->load->view('admin/login');
		}
	}
	public function do_login(){

		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$cek = $this->m_login->cek_user($username, $password);
			if(count($cek) ==1){
				$this->session->set_userdata(array(
									'isLogin' => TRUE,
									'username' => $username,
									));
				redirect('admin');
			}else{
				$this->session->set_flashdata('gagallogin','maaf,usernama dan password salah');
				$this->load->view('admin/login'); 
			}
	}
}
?>