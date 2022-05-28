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
			<h1>Input history!</h1>
	</div>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<p>This page will display the history of input requests!</p>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>


	</div>

</body>

</html>