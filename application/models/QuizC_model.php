<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QuizC_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function save($data)
    {
        $check_dup = $this->db->where("cs_email", $data['email'])->count_all_results('customer');
        if($check_dup == 0){
            $datainsert = array(
                'cs_email' => $data['email'],
                'cs_password' => md5($data['password']),
                'cs_status' => 'no_package',
                'cs_verify' => 0
            );
            $insert = $this->db->insert('customer', $datainsert);
            return $insert;
        }else{
            return false;
        }
    }


    public function save_quiz($data)
    {
        $id = $data['cs_id'];
        $dataupdate = array(
            'cs_no' => 'SHELONGS-'. strtotime("now"),
            'cs_fname' => $data['firstName'],
            'cs_lname' => $data['lastName'],
            'cs_age' => $data['age'],
            'cs_gender' => $data['sex'],
            'cs_tel' => $data['tel'],
            'cs_house_no' =>$data['houseno'],
            'cs_buliding' => $data['vaillageorbuilding'],
            'cs_soi' => $data['alleyway'],
            'cs_road' => $data['road'],
            'cs_sub_district' => $data['subdistric'],
            'cs_district' => $data['distric'],
            'cs_province' => $data['provinceTh'],
            'cs_zipcode' => $data['postcode'],
            'cs_budget' => $data['budget'],
            'cs_status' => 'wait',
            'skin_color' => $data['quiz01'],
            'skin_type' => $data['quiz02'],
            'cs_create_date' => date('Y-m-d'),
            'cs_point' => 0,
            'cs_dayend' => '0000-00-00',
            'cs_expired' => '0000-00-00'
        );

        $insert = $this->db->where('cs_id', $id)->update('customer', $dataupdate);

        $length = count($data['quiz03']);
        $length1 = count($data['quiz04']);
        $dataquiz03 = $data['quiz03'];
        $dataquiz04 = $data['quiz04'];
        // $this->db->insert('quize_type_c', array(
        //     'cs_id' => id,
        //     'pr_id' => $dataquiz03[0]['id']
        // ));
        for ($i=0; $i < $length; $i++) {
            $insert = $this->db->insert('bridge_skin_problem', array(
                'cs_id' => $id,
                'pr_id' => $dataquiz03[$i]['id']
            ));
        }
        for ($i=0; $i < $length1 ; $i++) {
            $insert = $this->db->insert('bridge_make_up', array(
                'cs_id' => $id,
                'make_id' => $dataquiz04[$i]['id']
            ));
        }
        return $insert;
    }

    public function regis_facebook($data)
    {
        $check_dup = $this->db->where("cs_email", $data['cs_email'])->count_all_results('customer');
        if($check_dup == 0){
            $datainsert = array(
                'cs_email' => $data['cs_email'],
                'cs_status' => 'no_package'
            );
            $insert = $this->db->insert('customer', $datainsert);
            return $insert;
        }else{
            // $this->db->select('cs_id, cs_status');
            // $this->db->from('customer');
            // $this->db->where('cs_email', $data['cs_email']);
            // $query = $this->db->get();
            // if($query->num_rows() > 0){
            //     return $query->result_array();
            return false;
            }
        }


    public function getdata($data)
    {
        $this->db->select('cs_id, cs_status, cs_fname');
        $this->db->from('customer');
        $this->db->where('cs_email', $data['cs_email']);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }
    }

    public function update_cs($data)
    {
        $id = $data['cs_id'];
        $data_update = array(
            'cs_fname' => $data['firstName'],
            'cs_lname' => $data['lastName'],
            'cs_age' => $data['age'],
            'cs_gender' => $data['sex'],
            'cs_tel' => $data['tel'],
            'cs_house_no' => $data['houseno'],
            'cs_buliding' => $data['vaillageorbuilding'],
            'cs_soi' => $data['alleyway'],
            'cs_road' => $data['road'],
            'cs_sub_district' => $data['subdistric'],
            'cs_district' => $data['distric'],
            'cs_province' => $data['provinceTh'],
            'cs_zipcode' => $data['postcode'],
            'cs_budget' => $data['budget']
        );
        $response = $this->db->where('cs_id', $id)->update('customer', $data_update);
        return $response;
    }

    public function sendemail($data)
    {
        $receiver = $data['email'];
        $from = "shelongsthailand@gmail.com";
        $subject = "Test Shelongs Send Verify Email";

        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = '<b>Please...</b> click on the below activation link to verify your email address<br><br>
        <a href='.base_url().'home/confirmEmail/'.md5($receiver).'>'.base_url().'home/confirmEmail/'. md5($receiver) .'</a><br/><br/>Thanks';

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
    }

    public function verifyEmail($key)
    {
        $data = array(
            'cs_verify' => 1
        );
        $this->db->where('md5(cs_email)', $key);
        return $this->db->update('customer', $data);
    }

}

/* End of file QuizC_model.php */

?>
