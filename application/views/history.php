<?php defined('BASEPATH') or exit('No direct script access allowed');?>
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
					<li><a href="<?php echo base_url() ?>index.php/"> Home</a></li>
					<li><a href="<?php echo base_url() ?>index.php/request/"> New Request</a></li>
					<li><a href="<?php echo base_url() ?>index.php/history/"> Previous Requests</a></li>
				</ul>
			</div>
		</nav>

		<div class="jumbotron text-center">
			<h1>Previous Requests.</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div id="container">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Latitude</th>
									<th>Longitude</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($Inputs as $key => $input) : ?>
									<tr>
										<td><?php echo $input['name'] ?></td>
										<td><?php echo $input['latitude'] ?></td>
										<td><?php echo $input['longitude'] ?></td>
										<td><?php echo $input['date'] ?></td>
									</tr>

								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>


	</div>
</body>

</html>