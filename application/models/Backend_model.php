<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Backend_model extends CI_Model {
    
        public function __construct()
        {
            parent::__construct();
        }

        public function getdata_admin()
        {
            $this->db->select('*');
            $this->db->from('admin');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result_array();
            }
            
        }
        
    
    }
    
    /* End of file Backend_model.php */
    
?>