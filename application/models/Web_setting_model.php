<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Web_setting_model extends CI_Model {
    
        public function __construct()
        {
            parent::__construct();
        }

        public function update_websetting($data)
        {
            $response = $this->db->where('web_id', 1)->update('web_setting', $data);
            return $response;
        }

        public function getdata_web()
        {
            $this->db->select('*');
            $this->db->from('web_setting');
            $this->db->where('web_id', 1);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->row();
            }
        }
    
    }
    
    /* End of file Web_setting_model.php */
    
?>