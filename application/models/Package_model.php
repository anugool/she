<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }

    public function getall()
    {
        $this->db->select('*');
        $this->db->from('package');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }
    }
    
    

}

/* End of file Package_model.php */
