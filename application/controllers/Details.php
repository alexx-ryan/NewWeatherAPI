<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Response_model');
    }

    public function index() {
        
        $this->load->view('details');
    }

	public function loadDetails($id){
		$data = array(
            "details" => $this->Response_model->get_response($id)
        );
        
        $this->load->view('details' , $data);
	}


}



