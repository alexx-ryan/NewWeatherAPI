<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Visual Crossing Weather Application!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Visual Crossing Weather App</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url()?>index.php/">				Home</a></li>
				<li><a href="<?php echo base_url()?>index.php/request/">		New Request</a></li>
				<li><a href="<?php echo base_url()?>index.php/history/">		Previous Requests</a></li>		
			</ul>
		</div>
	</nav>
	<div class="jumbotron text-center">
			<h1>Visual crossing weather API.</h1>
	</div>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p>Visual Crossing is a leading provider of weather data and enterprise analysis tools to data scientists, business analysts, professionals, and academics. ~
						Founded in 2003, our mission has always been to empower data consumers and analysts to make better decisions based on high-quality, easy-to-access data. 
						For nearly 20 years Visual Crossing has been providing enterprise-class solutions to some of the largest businesses in the world.
						Our weather data API leads the industry by providing the lowest-cost access to all types of weather data for apps, code, and web pages worldwide. 
						Whether you need historical weather data, weather forecasts, climate summaries, historical weather forecasts, 
						or specialty weather measures such as solar radiation, degree days, and weather alerts, 
						Visual Crossing provides the data that you need for any weather project.</p>
				</div>		
			</div>
		</div>


	</div>

</body>

</html>