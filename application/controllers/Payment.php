<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Payment_model', 'payment');
  }

  public function insert_payment()
  {

     $data = json_decode(file_get_contents("php://input"), true);

     $insert_data = array(
       'cs_id' => $data[0]['cs_id'],
       'bank_id' => $data[0]['bank_id'],
       'pay_tel' => $data[0]['order_tel'],
       'order_id' => $data[0]['order_id'],
       'pay_price' => $data[0]['order_pay'],
       'pay_date' => date('Y-m-d', strtotime($data[0]['order_date'])),
       'pay_time' => date('H:i', strtotime($data[0]['order_time'])),
       'pay_image' => $data[0]['order_image']
     );

     $response = $this->payment->insert_payment($insert_data);

     echo json_encode($response);

  }

  public function uploads_slips()
  {
    $conf['upload_path'] = "./assets/uploads/slip/";
    $conf['allowed_types'] = 'jpg|png';
    $conf['max_size'] = '2048000';
    $conf['max_width'] = '';
    $conf['max_height'] = '';
    $conf['overwrite'] = 'TRUE';
    $conf['remove_spaces'] = 'TRUE';
    $conf['encrypt_name'] = 'TRUE';
    $new_name = time().'-'.$_FILES["file"]['name'];
    $conf['file_name'] = $new_name;
    $this->load->library('upload', $conf);
    $this->upload->initialize($conf);
    if ( ! $this->upload->do_upload('file') )
    {
        $json = false;
    }
    else
    {
        //$upload_details = $this->upload->data();
        $json = array(
        'slips' => $this->upload->data('file_name')
      );

    }
    echo json_encode($json);
  }
}
?>
