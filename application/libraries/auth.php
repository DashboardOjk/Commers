<?php if (!defined('BASEPATH')) exit('no direct script access allowed');

class Auth{
	public function cek_login()
	{
		$this->ci =& get_intance();
		$this->sesi = $this->ci->session->userdata('isLogin');
		if ($this->sesi !=TRUE){
			redirect(base_url('login','refresh'));
			exit();
		}
	}
}

?>