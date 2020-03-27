<?php
	include 'CSS/bootstrap.php';
	include '../control/ClinicControls.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
	$id=0;
	$schedules=clinicschedule($_SESSION['uid']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Clinic Schedule</title>
	<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
	<link rel="stylesheet"type="text/css"href="CSS/doctorhomepage.css">
</head>
<body>
	<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
	<button class="button"onclick="window.location='ClinicHomePage.php'">Home Page</button>
	<div class="div1">
		<h2>Schedule</h2>
	</div>
	<!--table for clinic set schedule-->
		<div class="table">
			<table class="table table-hover table-bordered ">
				<thead>
				    <tr class="thead-dark">
						<th scope="col">SI#</th>
						<th scope="col">Schedule 1</th>
						<th scope="col">Schedule 2</th>
						<th scope="col">Schedule 3</th>
						<th scope="col">Date</th>
						<th scope="col">Actions</th>
				    </tr>
				</thead>
				<?php foreach ($schedules as $schedule) { $id++;?>
					<tbody>
					    <tr>
					    	<th><?php echo $id; ?></th>
					    	<!--<th><?php //echo $doctor["id"]; ?></th>-->
							<td><?php echo $schedule["schedule1"]; ?></td>
							<td><?php echo $schedule["schedule2"]; ?></td>
							<td><?php echo $schedule["schedule3"]; ?></td>
							<td><?php echo $schedule["date"]; ?></td>
							<td>
								<a href="../control/ClinicControls.php?sdeleteid=<?php echo $schedule['cid'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure to delete?');">Delete</a>
							</td>
					    </tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
		<!--table ends-->
</body>
</html>