<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('logged_in'))
    {
      // Allow some methods?
      $allowed = array(
        'index'
      );
      if ( in_array($this->router->fetch_method(), $allowed))
      {
        redirect('backend/index');
      }
    }
	}

	public function index()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/dashboard');
		$this->load->view('layout_backend/footer');
	}
}
