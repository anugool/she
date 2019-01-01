<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();

    }

    public function save_free($data)
    {
        $data_array = array(
            'order_no' => 'OD-'. strtotime("now"),
            'cs_id' => $data['cs_id'],
            'package_id' => $data['package_id'],
            'order_fname' => $data['firstName'],
            'order_lname' => $data['lastName'],
            'order_house_no' => $data['houseno'],
            'order_building' => $data['vaillageorbuilding'],
            'order_soi' => $data['alleyway'],
            'order_road' => $data['road'],
            'order_sub_district' => $data['subdistric'],
            'order_district' => $data['distric'],
            'order_province' => $data['provinceTh'],
            'order_zipcode' => $data['postcode'],
            'order_payment' => $data['payment'],
            'order_create' => date('Y-m-d'),
            'order_totalprice' => $data['totalprice'],
            'order_status' => 'โปรโมชั่นฟรี'
        );
        $response = $this->db->insert('order', $data_array);
        return $response;
    }

    public function save_nofree($data)
    {
      $data_array = array(
          'order_no' => 'OD-'. strtotime("now"),
          'cs_id' => $data['cs_id'],
          'package_id' => $data['package_id'],
          'order_fname' => $data['firstName'],
          'order_lname' => $data['lastName'],
          'order_house_no' => $data['houseno'],
          'order_building' => $data['vaillageorbuilding'],
          'order_soi' => $data['alleyway'],
          'order_road' => $data['road'],
          'order_sub_district' => $data['subdistric'],
          'order_district' => $data['distric'],
          'order_province' => $data['provinceTh'],
          'order_zipcode' => $data['postcode'],
          'order_payment' => $data['payment'],
          'order_create' => date('Y-m-d'),
          'order_totalprice' => $data['totalprice'],
          'order_status' => 'รอการตรวจสอบ'
      );
      $response = $this->db->insert('order', $data_array);
      return $response;
    }

    public function getmax_order($id)
    {
      $this->db->select_max('order_no');
      $this->db->from('order');
      $this->db->where('cs_id', $id);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->row();
      }
    }

}

/* End of file Order_model.php */
