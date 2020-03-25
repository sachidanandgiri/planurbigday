<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('common_helper');
    }
    
    public function pr($val, $flag, $msg){
        echo "<pre>"; print_r($val);
        if($flag){
            die($msg);
        }
    }
}

// class end
?>