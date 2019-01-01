<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getdata_admin()
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('admin_status', 1);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function add($data = array())
  {
    $check_dup = $this->db->where("admin_user", $data['admin_user'])->count_all_results('admin');
    if($check_dup == 0){
      $response = $this->db->insert('admin', $data);
      return $response;
    }else{
      return false;
    }
  }


}

/* End of file Admin_model.php */

?>
