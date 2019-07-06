<?php
class password_model extends CI_Model{

    function update_password($data){
        //UPdate the password in the database
        $this->db->where('usr_id',$data['usr_id']);
        
        if($this->db->update('users',$data)){
            return true;
        }else{
            return false;
        }
    } 

    function make_code(){
        $url_code = random_string('alnum',8);
    }

}