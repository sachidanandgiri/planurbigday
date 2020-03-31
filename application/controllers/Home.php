<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//Home controller called without login

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('common_helper');
    }

    public function index() {
        $this->global['pageTitle'] = 'Welcome to Plan Your Big Day!!!!!';
        $this->load->view('template/header', $this->global);
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function about() {
        $this->global['pageTitle'] = 'About Us';
        $this->load->view('template/header', $this->global);
        $this->load->view('about_us');
        $this->load->view('template/footer');
    }


    public function shop() {
        $this->global['pageTitle'] = ' Shop';
        $this->load->view('template/header', $this->global);
        $this->load->view('shop');
        $this->load->view('template/footer');
    }

    public function product() {
        $this->global['pageTitle'] = ' product';
        $this->load->view('template/header', $this->global);
        $this->load->view('product');
        $this->load->view('template/footer');
    }

    public function blog() {
        $this->global['pageTitle'] = ' blog';
        $this->load->view('template/header', $this->global);
        $this->load->view('blog');
        $this->load->view('template/footer');
    }

    public function post() {
        $this->global['pageTitle'] = ' post';
        $this->load->view('template/header', $this->global);
        $this->load->view('post');
        $this->load->view('template/footer');
    }

    public function pricing() {
        $this->global['pageTitle'] = ' cart';
        $this->load->view('template/header', $this->global);
        $this->load->view('pricing');
        $this->load->view('template/footer');
    }

  
    public function contact() {
        $this->global['pageTitle'] = ' Contact Us';
        $this->load->view('template/header', $this->global);
        $this->load->view('contact_us');
        $this->load->view('template/footer');
    }
	
	public function planning() {
        $this->global['pageTitle'] = ' Contact Us';
        $this->load->view('template/header', $this->global);
        $this->load->view('planning');
        $this->load->view('template/footer');
    }
	
	public function faq() {
        $this->global['pageTitle'] = 'FAQ';
        $this->load->view('template/header', $this->global);
        $this->load->view('faq');
        $this->load->view('template/footer');
    }
	
	    public function login() {
        if ($this->session->userdata('loggedUser')) {
            redirect('home');
        } else {
            $this->global['pageTitle'] = 'login';
            $this->load->view('template/header', $this->global);
            $this->load->view('login');
            $this->load->view('template/footer');
        }
    }


    public function signupvendor() {
        
            $this->global['pageTitle'] = ' register';
            $this->load->view('template/header', $this->global);
            $this->load->view('signupvendor');
            $this->load->view('template/footer');
        
    }
	
	 public function dashboardvendor() {
        
            $this->global['pageTitle'] = ' register';
            $this->load->view('template/header', $this->global);
            $this->load->view('dashboardvendor');
            $this->load->view('template/footer');
        
    }
	
	
	 public function signupcouple() {
        
            $this->global['pageTitle'] = ' register';
            $this->load->view('template/header', $this->global);
            $this->load->view('signupcouple');
            $this->load->view('template/footer');
        
    }
	
	 public function dashboardcouple() {
        
            $this->global['pageTitle'] = ' register';
            $this->load->view('template/header', $this->global);
            $this->load->view('dashboardcouple');
            $this->load->view('template/footer');
        
    }


}

// class end
?>