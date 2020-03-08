<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {


	function __construct()
	{
	parent:: __construct();
	// $this->load->model('m_blog');
	
	}
	
	public function index()
	{	
		if ($this->session->userdata('isLogin')==TRUE){
		$this->template->load('admin/static','admin/home');	
	}else{
		redirect('login');
	}
		
	}
}
?>