<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managecms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/cms/managecms');
		$this->load->view('layout_backend/footer');
	}

	public function create(){
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/cms/create_post');
		$this->load->view('layout_backend/footer');

	}

	public function edit(){
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/cms/edit_post');
		$this->load->view('layout_backend/footer');

	}

	public function categories() {
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/cms/categories/create_category');
		$this->load->view('layout_backend/footer');
	}

	public function editcategory() {
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/cms/categories/edit_category');
		$this->load->view('layout_backend/footer');
	}

}
