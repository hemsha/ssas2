<?php
class register_model extends CI_Model{

    
    function __construct(){
        parent::__construct();
        
    }

    function register_user($form_data){
        //Here the data from the register form is inserted in the database
        if($this->db->insert('users',$form_data)){
            return true;
        }else{
            return false;
        }
    }

}