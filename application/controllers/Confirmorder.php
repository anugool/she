<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmorder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('logged_in'))
		{
			// Allow some methods?
			$allowed = array(
				'index',
				'detail'
			);
			if ( in_array($this->router->fetch_method(), $allowed))
			{
				redirect('backend/index');
			}
		}
		$this->load->model('Payment_model', 'payment');
		$this->load->library('pagination');
	}

	public function index()
	{

		$config = array();
    $config["base_url"] = site_url() . "/Confirmorder/index";
    $config["total_rows"] = $this->payment->record_count_confirm();
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
    $data['confirm'] = $this->payment->confirm_index($config["per_page"], $page);
    //$data['search'] = "";
    $data["links"] = $this->pagination->create_links();
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/confirmorder/index', $data);
		$this->load->view('layout_backend/footer');

	}

	public function detail($id)
	{
		$data['get_detail'] = $this->payment->get_detail_confirm($id);
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/confirmorder/confirmdetail', $data);
		$this->load->view('layout_backend/footer');
	}

	public function accpet_order($id)
	{
		$response = $this->payment->accpet_order($id);
		if($response){
			$this->session->set_flashdata('msg_succ', 'ยืนยันการชำระเงินเรียบร้อยแล้ว'); //Set Message to Sweetalert
			redirect("Confirmorder/index");
		}
	}
}
