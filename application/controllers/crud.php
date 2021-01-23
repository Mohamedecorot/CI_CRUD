<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$data['title'] = "View CRUD";
		$data['mydata'] = $this->mcrud->view();
		$this->load->view('header', $data);
		$this->load->view('data', $data);
		$this->load->view('footer');
	}
}
