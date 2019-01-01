<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managecustomer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model', 'customer');
		$this->load->library("pagination");
	}

	public function index()
	{

		$config = array();
    $config["base_url"] = site_url() . "/managecustomer/index";
    $config["total_rows"] = $this->customer->record_count();
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
    $dataquery["getquery"] = $this->customer->get_cus($config["per_page"], $page);
    //$data['search'] = "";
    $data["links"] = $this->pagination->create_links();
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/customer/manage_customer', $dataquery);
		$this->load->view('layout_backend/footer');
	}

	// public function getallcustomer()
	// {
	// 	$data['get_cus'] = $this->customer->get_cus(); //get data from customer DB เอาไปโชว์หน้า index
	// 	echo json_encode($data); //send to angular
	// }



	public function detailcustomer($id)
	{
		$data['get_detail_cus'] = $this->customer->get_detail_cus($id); //get data detail from customer
		$data['get_skin_cus'] = $this->customer->get_skin_problem($id); //get data skin problem from customer
		$data['get_makeup_cus'] = $this->customer->get_make_up($id); //get data make up from customer
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/customer/detail_customer', $data);
		$this->load->view('layout_backend/footer');
	}

	public function fontdetailcustomer()
	{
		$id = json_decode(file_get_contents("php://input"), true);
		$data['get_detail_cus'] = $this->customer->get_detail_cus($id); //get data detail from customer
		$data['get_skin_cus'] = $this->customer->get_skin_problem($id); //get data skin problem from customer
		$data['get_makeup_cus'] = $this->customer->get_make_up($id); //get data make up from customer
		echo json_encode($data);
	}

	public function indexfree()
	{
		$config = array();
    $config["base_url"] = site_url() . "/managecustomer/indexfree";
    $config["total_rows"] = $this->customer->record_count_free();
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
    $dataquery["getquery"] = $this->customer->get_cus_free($config["per_page"], $page);
    //$data['search'] = "";
    $data["links"] = $this->pagination->create_links();
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/customer/free', $dataquery);
		$this->load->view('layout_backend/footer');
	}

	public function approve_cs($id)
	{
		$respons = $this->customer->approve_cs($id);
		if($respons){
			$this->session->set_flashdata('msg_succ', 'อนุมัติสมาชิกเรียบร้อยแล้ว'); //Set Message to Sweetalert
			redirect("managecustomer/index");
		}
		// $id = json_decode(file_get_contents("php://input"), true);
		//
		// $respons = $this->customer->approve_cs($id);
		// echo json_encode($respons);
	}

	public function update_cs()
	{
		$data = json_decode(file_get_contents("php://input"), true);
		$respons = $this->customer->update_cs($data[0]);
		echo json_encode($respons);

	}

	public function delete($id)
	{
		$this->db->where('cs_id', $id)->delete('customer');
		$this->session->set_flashdata('msg_succ', 'ลบสมาชิกเรียบร้อยแล้ว'); //Set Message to Sweetalert
		redirect("managecustomer/index");
	}

}
