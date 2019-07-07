<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class site_static_pages extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view('common/header');
        $this->load->view('site/site_navbar');
        $this->load->view('site/home');
    }

    public function pricing(){
        $this->load->view('common/header');
        $this->load->view('site/site_navbar');
        $this->load->view('site/pricing');
    }

    public function about_us(){
        $this->load->view('common/header');
        $this->load->view('site/site_navbar');
        $this->load->view('site/about_us');
    }

    public function features(){
        $this->load->view('common/header');
        $this->load->view('site/site_navbar');
        $this->load->view('site/features');
    }

 }