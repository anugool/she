<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Backend_model', 'backend');
	}

	public function index()
	{
		$data['title'] = 'Backend';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('backend/index');
		$this->load->view('layout_backend/footer');
	}

	public function getdata_admin()
	{
		$data['getdata_admin'] = $this->backend->getdata_admin(); //get data from admin DB
		echo json_encode($data); // send data to angular
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('backend/index', 'refresh');
	}

}
