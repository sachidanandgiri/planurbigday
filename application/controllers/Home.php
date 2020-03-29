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
        $this->load->view('template/', $this->global);
        $this->load->view('about_us');
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

    /*
      public function dashboard() {
      $this->global['pageTitle'] = ' dashboard';
      $this->load->view('header', $this->global);
      $this->load->view('dashboard');
      $this->load->view('footer');
      }

      public function profile() {
      $this->global['pageTitle'] = ' profile';
      $this->load->view('header', $this->global);
      $this->load->view('profile');
      $this->load->view('footer');
      }

     */

    public function register() {
        if ($this->session->userdata('loggedUser')) {
            redirect('home');
        } else {
            $this->global['pageTitle'] = ' register';
            $this->load->view('template/header', $this->global);
            $this->load->view('register');
            $this->load->view('template/footer');
        }
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

    public function cart() {
        $this->global['pageTitle'] = ' cart';
        $this->load->view('template/header', $this->global);
        $this->load->view('cart');
        $this->load->view('template/footer');
    }

    public function checkout() {
        $this->global['pageTitle'] = ' checkout';
        $this->load->view('template/header', $this->global);
        $this->load->view('checkout');
        $this->load->view('template/footer');
    }

    public function contact() {
        $this->global['pageTitle'] = ' Contact Us';
        $this->load->view('template/header', $this->global);
        $this->load->view('contact_us');
        $this->load->view('template/footer');
    }

}

// class end
?>