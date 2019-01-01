<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model("Order_model", "order");
    }


    public function insert_free()
    {
        $inputdata = json_decode(file_get_contents("php://input"), true);
        $response = $this->order->save_free($inputdata[0]);
        //$maxorder_no = $this->order->getmax_order($inputdata[0]['cs_id']);
        if($response){
            $receiver = $inputdata[0]['email'];
            $from = "shelongsthailand@gmail.com";
            $subject = "Test Order";

            //$data['maxorder'] = $maxorder_no;
            //$data['total_price'] = $inputdata[0]['totalprice'];
            //sending confirmEmail($receiver) function calling link to the user, inside message body
            $message = $this->load->view('backend/order_email_free', $data, true);
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
              $response = true;
            }else{
              show_error($this->email->print_debugger());
            }
            $this->db->where('code_name', $inputdata[0]['codefree'])->delete('promotion_code');
            echo json_encode($response);
        }
    }

    public function insert_nofree()
    {
      $inputdata = json_decode(file_get_contents("php://input"), true);
      $response = $this->order->save_nofree($inputdata[0]);
      $maxorder_no = $this->order->getmax_order($inputdata[0]['cs_id']);
      if($response){
          $receiver = $inputdata[0]['email'];
          $from = "shelongsthailand@gmail.com";
          $subject = "Test Order";

          $data['maxorder'] = $maxorder_no;
          $data['total_price'] = $inputdata[0]['totalprice'];
          //sending confirmEmail($receiver) function calling link to the user, inside message body
          $message = $this->load->view('backend/order_email', $data, true);
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
            $response = true;
          }else{
            show_error($this->email->print_debugger());
          }
          echo json_encode($response);
      }
    }

    public function order_pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('backend/order_pdf',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
    }

    public function order_send()
    {
      $this->load->view('backend/order_send');
    }
}

/* End of file Order.php */
