<?php
	include 'CSS/bootstrap.php';
	//session starts
	session_start();
	if(isset($_SESSION['did']))
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
			Doctor Set Schedule
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/setschedule.css">
	</head>
	<body>
		<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
		<button type="button"name="home"class="button"onclick="window.location='DoctorHomePage.php'">Home Page</button>
		<div class="div1">
			<h2>Set Schedule</h2>
		</div>
		<div class="div2">
			<h3>Find Clinic</h3>
			<div class="div3">
				<label>Clinic Name</label><br>
				<select class="field"name="cname">
					<option>Popular Hospital</option>
					<option>Applo Hospital</option>
				</select><br>
				<label>Date</label><br>
				<input type="date" name="dob" value=""class="field" ><br>
				<label>Time</label><br>
				<select class="field"name="cname">
					<option>10am-12pm</option>
					<option>10am-12pm</option>
					<option>10am-12pm</option>
					<option>10am-12pm</option>
					<option>10am-12pm</option>
					<option>10am-12pm</option>
				</select><br><br>
				<!--submit button here -->
				<button name="submit"class="submit">Add Clinic</button>
			</div>
		</div>
		<!--search bar & table starts-->
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
			      <th scope="col">Phone no.</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
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
			    </tr>
			    <tr>
			      <th scope="row">1</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			    <tr>
			      <th scope="row">1</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			    <tr>
			      <th scope="row">1</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<!--search bar & table ends-->
	</body>
</html>