<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {


	public function __construct()
	{
	parent:: __construct();
	$this->auth->cek_login();
	$this->load->model(array('m_crud','m_login'));
	
	}
	
	public function index()
	{	
		$data['datauser'] = $this->m_login->->get_datalogin($this->session->userdata('Username'));
		$data['edu'] = $this->m_crud->getSemua('education');
		$this->template->load('admin/static','admin/home',$data);	
	}
}
?>