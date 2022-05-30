<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Input_model');
    }

    public function index() {
        
        $data = array(
            "Inputs" => $this->Input_model->get_inputs()
        );
        
        $this->load->view('history' , $data);
    }

}

