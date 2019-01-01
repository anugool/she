<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manageseting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_setting_model', 'setting');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dataquery['getdata'] = $this->setting->getdata_web();
        $data['title'] = 'Shelongs Admin';
        $this->load->view('layout_backend/header', $data);
        $this->load->view('layout_backend/navbar');
        $this->load->view('layout_backend/sitebar');
        $this->load->view('backend/webseting/managesetting', $dataquery);
        $this->load->view('layout_backend/footer');
    }

    public function update_websetting()
    {
        $config = array(

            array(

                "field" => "title",
                "rules" => "required",
                "errors" => array(
                    'required' => 'Title is required',
                ),
            ),
            array(

                "field" => "keyword",
                "rules" => "required",
                "errors" => array(
                    'required' => 'Keyword is required',
                ),
            ),
            array(

                "field" => "description",
                "rules" => "required",
                "errors" => array(
                    'required' => 'Description is required',
                ),
            ),
        );
        $this->form_validation->set_error_delimiters('<div class="text-danger bold">', '</div>');
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $dataquery['getdata'] = $this->setting->getdata_web();
            $data['title'] = 'Shelongs Admin';
            $this->load->view('layout_backend/header', $data);
            $this->load->view('layout_backend/navbar');
            $this->load->view('layout_backend/sitebar');
            $this->load->view('backend/webseting/managesetting', $dataquery);
            $this->load->view('layout_backend/footer');
        } else {
            $data = array(
                "web_title" => $this->input->post("title"),
                "web_keyword" => $this->input->post("keyword"),
                "web_description" => $this->input->post('description'),
            );
            $response = $this->setting->update_websetting($data);
            if ($response) {
                $this->session->set_flashdata('msg_succ', 'Updated Success'); //Set Message to Sweetalert
                redirect("manageseting/index");
            }
        }
        // $data = json_decode(file_get_contents("php://input"), true);
        // $response = $this->setting->update_websetting($data[0]);
    }

    public function getdata_web()
    {
        $data = $this->setting->getdata_web();
        echo json_encode($data);
    }

}
