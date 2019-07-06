<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password_controller extends Users_Controller{


    function __construct(){
        parent::__construct();
    }

    function index(){

        $this->password_model->update_password($pass);
        //Load Views
        $this->load->view('common/header');
        $this->load->view('users/forgot_password');
    }   

}