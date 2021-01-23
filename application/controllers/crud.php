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

	public function add()
	{
		$data['title'] = "Add CRUD";
		$this->load->view('header', $data);
		$this->load->view('add');
		$this->load->view('footer');
	}

	public function save() {
		if($this->input->post('save')){
			$this->mcrud->add();
			redirect('crud', 'refresh');
		} else {
			redirect('crud/add', 'refresh');
		}
	}
}
