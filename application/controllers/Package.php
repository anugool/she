<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Package_model", "package");
    }

    public function getall() {
        $data = $this->package->getall();
         echo json_encode($data);
     }
        

}

/* End of file Package.php */