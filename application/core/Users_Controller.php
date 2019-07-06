<?php
/**
 * This Class will be used as base controller for all other users Controller
 */
class Users_Controller extends CI_Controller{

    function __construct(){

        parent::__construct();
        
        $this->load->database();

        //Loading helpers
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->helper('url');
        
        //Loading Models
        $this->load->model('password_model');
        $this->load->model('register_model');
        $this->load->model('sign_in_model');

        //Loading Language File
        $this->lang->load('users','english');
    }
    
    public function index(){
        
    }
}