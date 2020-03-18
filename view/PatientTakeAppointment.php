<?php
	include 'CSS/bootstrap.php';
?>
<html>
	<head>
		<title>
			Take Appointment
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
	</head>
	<button type="button"name="home"class="button"onclick="window.location='PatientHomePage.php'">Home Page</button>
	<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
	<body>
		<div class="div1">
			<h2>Take Appointment</h2>
		</div>
		<!--search & table starts-->
		<!--search by name-->
		<div class="search">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-primary" type="button">Search</button>
				</div>
				<input type="text" class="form-control" placeholder="search with doctor name" >
			</div>
		</div>
		<!--search by id-->
		<div class="search">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-primary" type="button">Search</button>
				</div>
				<input type="text" class="form-control" placeholder="search with doctor id" >
			</div>
		</div>

		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">Doctor id</th>
			      <th scope="col">Doctor name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Speciality</th>
			      <th scope="col">Clinic id</th>
			      <th scope="col">Clinic name</th>
			      <th scope="col">Time</th>
			      <th scope="col">Date</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
			      <th scope="col">Select</th>
				
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thorntonnjbvbhvvvhv</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 70px">Send</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<!--search & table ends-->
	</body>
</html>