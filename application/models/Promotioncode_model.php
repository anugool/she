<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotioncode_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
    }

    public function getall()
    {
      $this->db->select('*');
      $this->db->from('promotion_code');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result();
      }
    }

    public function insert_code($data = array())
    {
      return $this->db->insert('promotion_code', $data);
    }

    public function check_code($code)
    {
      $check_code = $this->db->where("code_name", $code['code'])->count_all_results('promotion_code');
      if($check_code == 0){
        return false;
      }else{
        return true;
      }
    }
}
?>
