<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abouts extends CI_Controller{

	public function index()
	{
		$this->template->load('static','abouts');
	}

}
?>