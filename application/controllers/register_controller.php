<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class register_controller extends CI_Controller{

        function __construct(){
            parent::__construct(); 
            $this->load->database();

            //Loading helpers
            $this->load->helper('form');
            $this->load->helper('string');
            $this->load->helper('url');
            
            //Loading Models
            $this->load->model('users/password_model');
            $this->load->model('users/register_model');
            $this->load->model('users/sign_in_model');

            //Loading Language File
            $this->lang->load('users','english');           
        }

        public function index(){
            $msg['response_msg'] = ""; 
            $this->load->view('users/register',$msg);
        
        }

        public function register_user(){
            $form_data = array(
                'acc_id' => 3,
                'usr_fname' => $this->input->post('usr_fname'),
                'usr_lname' => $this->input->post('usr_lname'),
                'usr_email' => $this->input->post('usr_email'),
                'usr_hash' => $this->input->post('usr_password'),
            );
            $result = $this->register_model->register_user($form_data);
            
            if($result){
                $msg['response_msg'] = "You have successfully registered"; 
                $this->load->view('users/register',$msg);
            }else{
                $msg['response_msg'] = "Unsuccessfull"; 
                $this->load->view('users/register',$msg);
            }    
        }
    }