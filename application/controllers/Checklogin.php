<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checklogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
        $this->load->helper('rand_helper');
    }

    public function check_login()
    {
        $postdata = json_decode(file_get_contents("php://input"), true);
        $email = $postdata[0]['email'];
        $password = $postdata[0]['password'];

        $result = $this->login->login($email, $password);
        echo json_encode($result);
        // if($result){
        //     $sess_array = array();
        //     foreach ($result as  $row) {
        //         $sess_array = array(
        //             'id' => $row->cs_id,
        //             'email' => $row->cs_email,
        //             'password' => $row->cs_password
        //         );
        //     }
        //     $this->session->set_userdata('logged_in', $sess_array);
        //     redirect('home/quiz');

        // }else{
        //     echo "Hello world!";
        // }
    }

    public function check_login_admin()
    {
        $user_name = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->login->login_admin($user_name, $password);
        if($result){
          $sess_array = array();
			foreach($result as $row){

				$sess_array = array(
					'id'=> $row->admin_id,
					'sess_username'=> $row->admin_user
					);
			}
			$this->session->set_userdata('logged_in', $sess_array);
			redirect('dashboard/index');
        }else{
      $this->session->set_flashdata('msg_error', '<div class="alert alert-danger"><button class="close" data-close="alert"></button><span>Username หรือ Password ไม่ถูกต้อง!!!</span></div>');
			redirect('backend/index');
        }

    }

    public function reset_password()
    {
      //$email = json_decode(file_get_contents("php://input"), true);
      $email = file_get_contents("php://input");
      $new_password = generateRandomPassword(6); //length 6 character

      $response = $this->login->reset_password($email, $new_password);

      echo json_encode($response);

    }

    public function change_password()
    {
      $data = json_decode(file_get_contents("php://input"), true);
      $id = $data[0]['id'];
      $password = $data[0]['password'];
      $old_password = $data[0]['oldpassword'];
      $response = $this->login->chang_password($id, $password, $old_password);
      echo json_encode($response);
    }


    // public function getdata()
    // {
    //     $data['getdata'] = $this->login->getdata(); //get data from database
    //     echo json_encode($data);
    // }

}

/* End of file Chechlogin.php */
