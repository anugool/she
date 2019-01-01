<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotioncode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('rand_helper');
		$this->load->model('Promotioncode_model', 'promotion');
	}

	public function index()
	{
		$data['code'] = $this->promotion->getall();
		$data['title'] = 'Manage Payment';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/promotioncode/index', $data);
		$this->load->view('layout_backend/footer');
	}

	public function generate()
	{
		for($i=0; $i<50; $i++){
			$data = array(
				'code_name' => generateRandomString()
			);
			$response = $this->promotion->insert_code($data);
		}
		if($response){
			$this->session->set_flashdata('msg_succ', 'เพิ่มโค้ดโปรโมชั่นแล้ว'); //Set Message to Sweetalert
			redirect("promotioncode/index");
		}
	}

	public function reset()
	{
		$this->db->empty_table('promotion_code');
		$this->session->set_flashdata('msg_succ', 'รีเซ็ตโค้ดโปรโมชั่นแล้ว'); //Set Message to Sweetalert
		redirect("promotioncode/index");
	}

	public function submit_code()
	{
		$code = json_decode(file_get_contents("php://input"), true);
		$response = $this->promotion->check_code($code[0]);
		echo json_encode($response);
	}
}
