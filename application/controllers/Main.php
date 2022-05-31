<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$this->load->view('request');
	}

	public function form_validation()
	{
		//This method is called when the user presses submit on the request page. 
		//This method will validate the information input, query api, and put data into mysql tables. 

		//Form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules("key", "key", 'required');
		$this->form_validation->set_rules("name", "name", 'required');
		$this->form_validation->set_rules("latitude", "latitude", 'required');
		$this->form_validation->set_rules("longitude", "longitude", 'required');
		$this->form_validation->set_rules("date", "date", 'required');

		//Run form validation. 
		if ($this->form_validation->run()) {
			$this->load->model("main_model");
			$data = array(
				"name" 		=> $this->input->post("name"),
				"latitude" 	=> $this->input->post("latitude"),
				"longitude" => $this->input->post("longitude"),
				"date" 		=> $this->input->post("date")
			);


			//Get values from POST. Create API call. Store data into mysql database.
			$key 		=	$this->input->post("key");
			$name 		=	$this->input->post("name");
			$latitude	=	$this->input->post("latitude");
			$longitude	=	$this->input->post("longitude");
			$date		=	$this->input->post("date");

			$API_result = file_get_contents('https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/' . $latitude . ',' . $longitude . '/' . $date . '?unitGroup=metric&key=' . $key . '&contentType=json');
			$result_decode = json_decode($API_result, true);


			//echo var_dump($result_decode);
			//echo $result_decode['latitude'];
			//echo $result_decode['longitude'];
			//echo $result_decode['days']['0']['datetime'];



			$datetime 		= $result_decode['days']['0']['datetime'];
			$conditions 	= $result_decode['days']['0']['conditions'];
			$description 	= $result_decode['days']['0']['description'];
			$icon 			= $result_decode['days']['0']['icon'];
			$sunrise 		= $result_decode['days']['0']['sunrise'];
			$sunset 		= $result_decode['days']['0']['sunset'];
			$tempmax 		= $result_decode['days']['0']['tempmax'];
			$tempmin 		= $result_decode['days']['0']['tempmin'];
			$dew 			= $result_decode['days']['0']['dew'];
			$humidity	 	= $result_decode['days']['0']['humidity'];
			$pressure 		= $result_decode['days']['0']['pressure'];
			$windspeed 		= $result_decode['days']['0']['windspeed'];
			$visibility 	= $result_decode['days']['0']['visibility'];


			$response_data = array(

				"datetime"  	=> $datetime,
				"conditions" 	=> $conditions,
				"description" 	=> $description,
				"icon" 			=> $icon,
				"sunrise" 		=> $sunrise,
				"sunset" 		=> $sunset,
				"tempmax" 		=> $tempmax,
				"tempmin" 		=> $tempmin,
				"dew" 			=> $dew,
				"humidity" 		=> $humidity,
				"pressure" 		=> $pressure,
				"windspeed"	 	=> $windspeed,
				"visibility" 	=> $visibility,

			);


			$this->main_model->insert_data($data);
			$this->main_model->insert_api_result($response_data);
			redirect(base_url() . "index.php/main/inserted");
		} else {
			$this->index();
		}
	}


	public function inserted()
	{
		$this->index();
	}

	public function delete_data()
	{
		$id = $this->uri->segment(3);
		$this->load->model("main_model");
		$this->main_model->delete_data($id);
		$this->main_model->delete_data_response($id);

		redirect(base_url() . "index.php/main/deleted");
	}

	public function deleted()
	{
		$this->index();
	}
}
