<?php
	include 'CSS/bootstrap.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
?>
<html>
	<head>
		<title>
			Prescription
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
	</head>
	<button class="button"name="home"onclick="window.location='../control/LogoutControl.php'">Logout</button>
	<button type="button"name="home"class="button"onclick="window.location='PatientHomePage.php'">Home Page</button>
	<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
	<body>
		<div class="div1">
			<h2>Prescription</h2>
		</div>
		<!-- table starts-->
		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">Doctor name</th>
			      <th scope="col">Patient name</th>
			      <th scope="col">Date</th>
			      <th scope="col">Time</th>
			      <th scope="col">Clinic name</th>
			      <th scope="col">Time</th>
			      <th scope="col">Date</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
			      <th scope="col">Symptom</th>
			      <th scope="col">Disease</th>
			      <th scope="col">Test</th>
			      <th scope="col">Report</th>
			      <th scope="col">Medicines</th>
				
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
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>@fat</td>

			    </tr>
			  </tbody>
			</table>
		</div>
		<!--table ends-->
	</body>
</html>