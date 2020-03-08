<?php
defined(BASEPATH)or exit('No direct script access allowed')

class Chartsadmin extends CI_Controller
{
	public function index
	{
	$this->template->load('admin/static','admin/charts');
	}
}

?>