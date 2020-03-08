<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{ 

		$this->data['hasil'] = $this->model_crud->getUser('tbl_profil');
		$this->template->load('static','home',$this->data);
	}

}
?>