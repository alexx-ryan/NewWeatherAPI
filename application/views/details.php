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
					<li><a href="<?php echo base_url() ?>index.php/"> Home</a></li>
					<li><a href="<?php echo base_url() ?>index.php/request/"> New Request</a></li>
					<li><a href="<?php echo base_url() ?>index.php/history/"> Previous Requests</a></li>
				</ul>
			</div>
		</nav>
		<div class="jumbotron text-center">
			<h1>View Details.</h1>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<div id="container">
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>DateTime</th>
										<th>Conditions</th>
										<th>description</th>
										<th>icon</th>
										<th>sunrise</th>
										<th>sunset</th>
										<th>tempmax</th>
										<th>tempmin</th>
										<th>dew</th>
										<th>humidity</th>
										<th>pressure</th>
										<th>windspeed</th>
										<th>visibility</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($details as $key => $input) : ?>
										<tr>
											<td><?php echo $input['id'] ?></td>
											<td><?php echo $input['datetime'] ?></td>
											<td><?php echo $input['conditions'] ?></td>
											<td><?php echo $input['description'] ?></td>
											<td><?php echo $input['icon'] ?></td>
											<td><?php echo $input['sunrise'] ?></td>
											<td><?php echo $input['sunset'] ?></td>
											<td><?php echo $input['tempmax'] ?></td>
											<td><?php echo $input['tempmin'] ?></td>
											<td><?php echo $input['dew'] ?></td>
											<td><?php echo $input['humidity'] ?></td>
											<td><?php echo $input['pressure'] ?></td>
											<td><?php echo $input['windspeed'] ?></td>
											<td><?php echo $input['visibility'] ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>