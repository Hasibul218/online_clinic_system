<?php
	include 'CSS/bootstrap.php';
	//session starts
	session_start();
	if(isset($_SESSION['cid']))
	{
		if (time()-$_SESSION['last_time']>1800) //30 min inactive thakle logout automatic
		{
			header("Location:../control/LogoutControl.php");
		}
		else
		{
			$_SESSION['last_time']=time();
		}
	}
	else
	{
		header("Location:Login.php");
	}
	//session ends
?>
<html>
	<head>
		<title>
			Doctor See Patient
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/doctorhomepage.css">
	</head>
	<body>
		<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
		<button class="button"onclick="window.location='ClinicHomePage.php'">Home Page</button>
		<div class="div1">
			<h2>Doctor & Patient</h2>
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
			      <th scope="col">Doctor name</th>
			      <th scope="col">Phone no.</th>
			      <th scope="col">Email</th>
			      <th scope="col">Patient name</th>
				  <th scope="col">Test</th>
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