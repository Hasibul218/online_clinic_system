<?php
	include '../control/AdminControl.php';
	include 'CSS/bootstrap.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
	$id=0;
	$patients=patientsdata();
	$count=count($patients);//count patients
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
			<button class="adminbtn"onclick="window.location='../control/LogoutControl.php'">Logout</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
		</div>
		<div class="search">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-primary" type="button">Search</button>
				</div>
				<input type="text" class="form-control" placeholder="search with name" >
			</div>
			<div class="totalclinic">
					<label>Total Patients</label>
					<input class="form-control" type="text" value="<?php echo $count ?>" readonly>
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
						<th scope="col">Email</th>
						<th scope="col">Phone no.</th>
						<th scope="col">Blood grp</th>
						<th scope="col">Divission</th>
						<th scope="col">District</th>
						<th scope="col">Thana</th>
						<th scope="col">Actions</th>
				    </tr>
				</thead>
				<?php foreach ($patients as $patient) { $id++;?>
					<tbody>
					    <tr>
					    	<th><?php echo $id; ?></th>
					    	<!--<th><?php //echo $doctor["id"]; ?></th>-->
							<td><?php echo $patient["userid"]; ?></td>
							<td><?php echo $patient["username"]; ?></td>
							<td><?php echo $patient["gender"]; ?></td>
							<td><?php echo $patient["email"]; ?></td>
							<td><?php echo $patient["phonenumber"]; ?></td>
							<td><?php echo $patient["bloodgroup"]; ?></td>
							<td><?php echo $patient["divission"]; ?></td>
							<td><?php echo $patient["district"]; ?></td>
							<td><?php echo $patient["thana"]; ?></td>
							<td>
								<a href="../control/AdminControl.php?pdeleteid=<?php echo $patient['userid'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure to delete?');">Delete</a>
							</td>
					    </tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</body>
</html>