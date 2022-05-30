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
			$data = array(
				"name" 		=>$this->input->post("name"),
				"latitude" 	=>$this->input->post("latitude"),
				"longitude" =>$this->input->post("longitude"),
				"date" 		=>$this->input->post("date")
			);
			$this->main_model->insert_data($data);
			redirect(base_url() . "index.php/main/inserted");
      	}
		else{
			$this->index();
		} 
	} 

	public function inserted(){
		$this->index();
	}


	public function delete_data(){
		$id = $this->uri->segment(3);
		$this->load->model("main_model");
		$this->main_model->delete_data($id);
		redirect(base_url() . "index.php/main/deleted");
	}

	public function deleted(){
		$this->index();
	}


}
