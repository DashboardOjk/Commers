<?php
defined('BASEPATH') or exit('no direct access allowed');

class Struktural extends CI_Controller{
	
	public function index()
	{
		if($this->session->userdata('isLogin')==True)
		{
			$this->template->load('admin/static','admin/struktural');
		}
		else {
			redirect('login');
		}
	}
}
?>