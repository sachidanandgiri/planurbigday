<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/BaseController.php';

//User controller manages the user records
class Dashboard extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('HomeModel');
        $this->load->model('CartModel');
    }

    //
    public function index() {
        $this->global['pageTitle'] = 'Welcome to Plan Your Big Day!!!!!';
        $this->load->view('template/admin_header', $this->global);
        $this->load->view('template/admin_sidenav');
        $this->load->view('admin/dashboard/index');
        $this->load->view('template/admin_footer');
    }

}
