<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function get_cus($limit, $start)
  {
    $this->db->select('cs_id, cs_no, cs_fname, cs_lname, cs_age, cs_create_date, cs_status');
    $this->db->from('customer');
    $this->db->where('cs_status', 'wait');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }

  }

  public function get_detail_cus($id)
  {
    $this->db->select('*');
    $this->db->from('customer c');
    $this->db->where('cs_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->row();
    }

  }

  public function get_skin_problem($id)
  {
    $this->db->select('*');
    $this->db->from('bridge_skin_problem b');
    $this->db->join('skin_problem s', 'b.pr_id = s.pr_id');
    $this->db->where('b.cs_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function get_make_up($id)
  {
    $this->db->select('*');
    $this->db->from('bridge_make_up b');
    $this->db->join('make_up m', 'b.make_id = m.make_id');
    $this->db->where('b.cs_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function approve_cs($id)
  {
    $data = array(
      'cs_status' => 'Free'
    );
    $update = $this->db->where('cs_id', $id)->update('customer', $data);
    return $update;
  }

  public function get_cus_free($limit, $start)
  {
    $this->db->select('cs_id, cs_no, cs_fname, cs_lname, cs_age, cs_create_date, cs_status');
    $this->db->from('customer');
    $this->db->where('cs_status', 'Free');
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function record_count_free(){
    $this->db->where("cs_status", 'Free');
    $this->db->from('customer');
    $query = $this->db->count_all_results();
    return $query;
  }

  public function record_count(){
    $this->db->where("cs_status", 'wait');
    $this->db->from('customer');
    $query = $this->db->count_all_results();
    return $query;
  }

  public function update_cs($data)
  {
    $id = $data['cs_id'];
    $update_cus = array(
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
    );

    $response = $this->db->where('cs_id', $id)->update('customer', $update_cus);
    return $response;
  }

  public function getconfrimorder($id)
  {
    $this->db->select('c.cs_id, c.cs_fname, c.cs_lname, c.cs_tel, o.order_id, o.order_no');
    $this->db->from('customer c');
    $this->db->join('order o', 'c.cs_id = o.cs_id');
    $this->db->where('c.cs_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result_array();
    }
  }
    public function getbank()
    {
      $this->db->select('*');
      $this->db->from('bank');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }

    }





}

/* End of file Customer_model.php */

?>
