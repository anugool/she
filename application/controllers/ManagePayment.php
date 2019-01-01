<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagePayment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_model', 'payment');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/payment/manage_payment');
		$this->load->view('layout_backend/footer');
	}

	public function invoice()
	{
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/payment/invoice');
		$this->load->view('layout_backend/footer');
	}
	public function order()
	{

		$config = array();
    $config["base_url"] = site_url() . "/ManagePayment/order";
    $config["total_rows"] = $this->payment->record_count_order();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
		$config['attributes'] = array('class' => 'page-link');
    $choice = $config["total_rows"]/$config["per_page"];
    $config["num_links"] = 2;

    $config['full_tag_open'] = '<ul class="pagination justify-content-start">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '«';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '»';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['order'] = $this->payment->get_order($config["per_page"], $page);
    //$data['search'] = "";
    $data["links"] = $this->pagination->create_links();
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/payment/order', $data);
		$this->load->view('layout_backend/footer');

	}

	public function orderdetail()
	{
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/payment/order_detail');
		$this->load->view('layout_backend/footer');
	}

	public function setting()
	{
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/payment/setting');
		$this->load->view('layout_backend/footer');
	}
}
