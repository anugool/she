<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct(){

		parent::__construct();
    }

	public function login($email, $password)
	{
		$this->db->select('cs_id, cs_email, cs_password, cs_status, cs_fname');
		$this->db->from('customer');
		$this->db->where('cs_email', $email);
		$this->db->where('cs_password', md5($password));
		$this->db->where('cs_verify', 1);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){

			return $query->result();
			//return true;
		}else{

			return false;
		}
	}

	public function login_admin($user, $password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_user', $user);
		$this->db->where('admin_password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){

			return $query->result();
			//return true;
		}else{

			return false;
		}
	}

  public function reset_password($email, $new_password)
  {
    $check_dup = $this->db->where("cs_email", $email)->count_all_results('customer');
    if($check_dup == 1){

      $update_password = array(
        'cs_password' => md5($new_password)
      );
      $this->db->where('cs_email', $email)->update('customer', $update_password);

      $receiver = $email;
      $from = "shelongsthailand@gmail.com";
      $subject = "Test Reset Password";

      //sending confirmEmail($receiver) function calling link to the user, inside message body
      $message = '<b>รหัสผ่านใหม่</b>: ' .$new_password.'<br><br>
      <a href='.base_url().'#!/login/>เข้าสู่ระบบ';

      //config email setting
      $this->load->library('email');
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'ssl://smtp.gmail.com';
      $config['smtp_port'] = '465';
      $config['smtp_user'] = $from;
      $config['smtp_pass'] = 'Qq31263109';
      $config['mailtype'] = 'html';
      $config['charset'] = 'utf-8';
      $config['wordwrap'] = 'TRUE';
      $config['newline'] = "\r\n";

      $this->email->initialize($config);
      //send email
      $this->email->from($from);
      $this->email->to($receiver);
      $this->email->subject($subject);
      $this->email->message($message);

      if($this->email->send()){
          return true;
      }else{
          //return false;
          return show_error($this->email->print_debugger());
      }
    }else{
      return false;
    }
  }

  public function chang_password($id, $password, $old_password)
  {
    $check_dup = $this->db->where("cs_password", md5($old_password))->count_all_results('customer');
    if($check_dup >= 1){
      $data = array(
        'cs_password' => md5($password)
      );
      $this->db->where('cs_id', $id)->update('customer', $data);
      return true;
    }else{
      return false;
      }
  }

	// public function getdata()
	// {
	// 	$this->db->select('cs_id, cs_email, cs_password');
	// 	$this->db->from('customer');
	// 	$query = $this->db->get();
	// 	if($query->num_rows() > 0){
	// 		return $query->result_array();
	// 	}
	// }

}

/* End of file Login_model.php */
