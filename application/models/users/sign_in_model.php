<?php
class sign_in_model extends CI_Model{


    function user_exist($email){

        return true;
        return false;
    }

    function sign_in($email,$password){
        if(user_exist($email)){
            //If the password matches then login else display error.

        }
    }

}