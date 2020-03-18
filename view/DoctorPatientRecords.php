<?php
	include 'CSS/bootstrap.php';
?>
<html>
	<head>
		<title>
			Doctor Patient Records
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
	</head>
	<body>
		<button class="button"onclick="window.location='DoctorHomePage.php'">Home</button>
		<div class="div1">

			<h2>Patient Records</h2>

		</div>
		<!--search bar and table statrs-->
		<div class="search">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-primary" type="button">Search</button>
				</div>
				<input type="text" class="form-control" placeholder="search with name" >
			</div>
		</div>
		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">SI#</th>
			      <th scope="col">Userid</th>
			      <th scope="col">Name</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Phone no.</th>
			      <th scope="col">Email</th>
			      <th scope="col">DOB</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
				
				  <th scope="col">Test</th>
			      <th scope="col">Clinic</th>
			      <th scope="col">Disease</th>

			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Tk</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>kkk</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 78px">Delete</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<!--search bar and table ends-->

	</body>
</html>