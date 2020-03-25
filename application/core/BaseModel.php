<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class BaseModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('common_helper');
    }

}

//  class end	