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
				<li><a href="<?php echo base_url()?>index.php/">			Home</a></li>
				<li><a href="<?php echo base_url()?>index.php/request/">	New Request</a></li>
				<li><a href="<?php echo base_url()?>index.php/history/">	Request History</a></li>	
			</ul>
		</div>
	</nav>
	<div class="jumbotron text-center">
			<h1>New API Request.</h1>
	</div>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					
					<form method="post" action="<?php echo base_url()?>index.php/main/form_validation">

						<label for="name">Name:</label><br>
						<input type="text" id="name" name="name">
						<?php echo form_error("name"); ?><br>


						<label for="latitude">Latitude:</label><br>
						<input type="text" id="latitude" name="latitude">
						<?php echo form_error("latitude"); ?><br>


						<label for="longitude">Longitude:</label><br>
						<input type="text" id="longitude" name="longitude">
						<?php echo form_error("longitude"); ?><br>

						
						<label for="date">Date:</label><br>
						<input type="date" name="date" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this formart YYYY-MM-DD" />
						<?php echo form_error("date"); ?>

						
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>


	</div>

</body>

</html>