<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
    }

    public function get_order($limit, $start)
    {
      $this->db->select('order_id, order_no, order_create, order_totalprice, order_status');
      $this->db->from('order');
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result();
      }
    }

    public function record_count_order()
    {
      $this->db->where("order_status", 'รอการตรวจสอบ');
      $this->db->from('order');
      $query = $this->db->count_all_results();
      return $query;
    }

    public function insert_payment($data = array())
    {
      $response = $this->db->insert('payment', $data);
      if($response){
        return true;
      }else{
        return false;
      }
    }

    public function record_count_confirm()
    {
      $this->db->from('payment');
      $query = $this->db->count_all_results();
      return $query;
    }

    public function confirm_index($limit, $start)
    {
      $this->db->select('p.pay_id, o.order_no, o.order_status, o.order_create');
      $this->db->from('payment p');
      $this->db->join('order o', 'p.order_id = o.order_id');
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result();
      }
    }

    public function get_detail_confirm($id)
    {
      $this->db->select('*');
      $this->db->from('payment p');
      $this->db->join('bank b', 'p.bank_id = b.bank_id');
      $this->db->join('customer c', 'p.cs_id = c.cs_id');
      $this->db->join('order o', 'p.order_id = o.order_id');
      $this->db->where('p.pay_id', $id);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->row();
      }
    }

    public function accpet_order($id)
    {
      $data = array(
        'order_status' => 'ดำเนินการจัดส่งสินค้า'
      );
      $response = $this->db->where('order_id', $id)->update('order', $data);
      if($response){
        return $response;
      }else{
        return false;
      }
    }
}
?>
