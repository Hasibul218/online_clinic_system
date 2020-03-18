<?php
	include 'CSS/bootstrap.php';
?>
<html>
	<head>
		<title>
			Admin Patient List
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/admincliniclist.css">
	</head>
	<body>
		<div class="div1">
			<label class="h2">Patient List</label>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
			<button type="button"class="adminbtn"oneclick="">Logout</button>
		</div>
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
			      <td>Thorntonnjbvbhvvvhv</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 70px">Delete</button>
				      <button type="button" class="btn btn-primary float-right"style="width: 70px">Edit</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</body>
</html>