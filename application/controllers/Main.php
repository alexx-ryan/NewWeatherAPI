<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('request');
	}

	public function form_validation()
	{
		//echo 'OK';

		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "name", 'required');
		$this->form_validation->set_rules("latitude", "latitude", 'required');
		$this->form_validation->set_rules("longitude", "longitude", 'required');
		$this->form_validation->set_rules("date", "date", 'required');

		if($this->form_validation->run()){  
               
			$this->load->model("main_model");

      	}
		else
		{

			$this->index();

		} 



	} 
}
