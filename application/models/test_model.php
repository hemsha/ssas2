<?php
class test_model extends CI_Model{

    public function get_all_data(){
        return $this->db->get('test');
    }
}