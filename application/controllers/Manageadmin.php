<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$dataquery['getdata'] = $this->admin->getdata_admin();
		$data['title'] = 'Shelongs Admin';
		$this->load->view('layout_backend/header' ,$data);
		$this->load->view('layout_backend/navbar');
		$this->load->view('layout_backend/sitebar');
		$this->load->view('backend/admin/manageadmin', $dataquery);
		$this->load->view('layout_backend/footer');
	}

	// public function getdata_admin()
	// {
	// 	$data = $this->admin->getdata_admin();
	// 	echo json_encode($data);
	// }

	public function insert()
	{
		$config = array(

			array(

				"field" => "username",
				"rules" => "required",
				"errors" => array(
					'required' => 'กรุณากรอก Username',
				),
			),
			array(

				"field" => "password",
				"rules" => "required",
				"errors" => array(
					'required' => 'กรุณากรอก Password',
				),
			)
		);
		$this->form_validation->set_error_delimiters('<div class="text-danger bold">', '</div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Shelongs Admin';
			$this->load->view('layout_backend/header', $data);
			$this->load->view('layout_backend/navbar');
			$this->load->view('layout_backend/sitebar');
			$this->load->view('backend/admin/manageadmin');
			$this->load->view('layout_backend/footer');
		} else {
			$data = array(
				'admin_user' => $this->input->post("username"),
				'admin_password' => md5($this->input->post("password")),
				'admin_status' => 1,
				'admin_create' => date('Y-m-d')
			);
			$response = $this->admin->add($data);
			if ($response) {
				$this->session->set_flashdata('msg_succ', 'บันทึกแอดมินเรียบร้อยแล้ว'); //Set Message to Sweetalert
				redirect("manageadmin/index");
			}else{
				$this->session->set_flashdata('msg_error', 'มีแอดมินนี้อยู่แล้ว'); //Set Message to Sweetalert
				redirect("manageadmin/index");
			}
		}
	}
	public function delete($id)
	{
		$this->db->where('admin_id', $id)->delete('admin');
		$this->session->set_flashdata('msg_succ', 'ลบแอดมินเรียบร้อยแล้ว'); //Set Message to Sweetalert
		redirect("manageadmin/index");
	}


	// public function add()
	// {
	// 	$data = json_decode(file_get_contents("php://input"), true);
	// 	$response = $this->admin->add($data[0]);
	// }



}
