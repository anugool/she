<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model', 'customer');
	}

	public function index()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_myaccount/header' ,$data);
		$this->load->view('layout_myaccount/footer');
	}

	public function dashboard()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/dashboard');
		//$this->load->view('layout_home/footerhome');
	}

	public function Account()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/account');
		//$this->load->view('layout_home/footerhome');
	}

	public function beautyprofile()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/beautyprofile');
		//$this->load->view('layout_home/footerhome');
	}

	public function package()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/package');
		//$this->load->view('layout_home/footerhome');
	}

	public function editprofile()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/editprofile');
		//$this->load->view('layout_home/footerhome');
	}

	public function changepassword()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/changepassword');
		//$this->load->view('layout_home/footerhome');
	}

	public function order()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/order');
		//$this->load->view('layout_home/footerhome');
	}

	public function confirmpayment()
	{
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_myaccount/navbar');
		$this->load->view('layout_myaccount/confirmpayment');
		//$this->load->view('layout_home/footerhome');
	}

	public function getaccountorder()
	{
		$id = json_decode(file_get_contents("php://input"), true);
		$data = $this->customer->getconfrimorder($id);
		echo json_encode($data);
	}

	public function getbank()
	{
		$data = $this->customer->getbank();
		echo json_encode($data);
	}


}