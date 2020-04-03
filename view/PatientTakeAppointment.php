<?php
	include 'CSS/bootstrap.php';
	include '../control/PatientsControl.php';
	//session starts
	session_start();
	if(isset($_SESSION['pid']))
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
	$doctors=schedule();
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
			  	<?php foreach ($doctors as $value) { ?>
			  		<tr>
			  			<td><?php echo $value['did'] ?></td>
			  			<td><?php echo $value['dname'] ?></td>
			  			<td><?php echo $value['cid'] ?></td>
			  			<td><?php echo $value['cname'] ?></td>
			  			<td><?php echo $value['time'] ?></td>
			  			<td><?php echo $value['date'] ?></td>
			  			<td><?php echo $value['divission'] ?></td>
			  			<td><?php echo $value['district'] ?></td>
			  			<td><?php echo $value['thana'] ?></td>
				      	<td>
					    	<a href="../control/PatientsControl.php?reqid=<?php echo $value['id'] ?> & pid=<?php echo $_SESSION['pid'] ?>" class="btn btn-primary float-right"style="width: 75px" onclick="return confirm ('Are you sure want to request?');">Request</a>
				      	</td>
				    </tr>
			  	<?php } ?>
				    
			  </tbody>
			</table>
		</div>
		<!--search & table ends-->
	</body>
</html>