<?php
	include 'CSS/bootstrap.php';
	include '../control/ClinicControls.php';
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
	$id1=0;
	$id2=0;
	$id3=0;
	$slots1=slot1($_SESSION['cid']);
	$slots2=slot2($_SESSION['cid']);
	$slots3=slot3($_SESSION['cid']);
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
		<div class="slot">
			<!--table for clinic set slot 1-->
			<div class="table">
				<table class="table table-hover table-bordered ">
					<thead>
					    <tr class="thead-dark">
							<th scope="col">SI#</th>
							<th scope="col">Slot 1</th>
							<th scope="col">Date</th>
							<th scope="col">Actions</th>
					    </tr>
					</thead>
					<?php foreach ($slots1 as $slot1) { $id1++;?>
						<tbody>
						    <tr>
						    	<th><?php echo $id1; ?></th>
						    	<!--<th><?php //echo $schedule["id"]; ?></th>-->
								<td><?php echo $slot1["slot1"]; ?></td>
								<td><?php echo $slot1["date"]; ?></td>
								<td>
									<a href="../control/ClinicControls.php?sdeleteid=<?php echo $schedule['id'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure to delete?');">Delete</a>
								</td>
						    </tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
			<!--slot 1 table ends-->
				<!--table for clinic set slot 2-->
			<div class="table">
				<table class="table table-hover table-bordered ">
					<thead>
					    <tr class="thead-dark">
							<th scope="col">SI#</th>
							<th scope="col">Slot 2</th>
							<th scope="col">Date</th>
							<th scope="col">Actions</th>
					    </tr>
					</thead>
					<?php foreach ($slots2 as $slot2) { $id2++;?>
						<tbody>
						    <tr>
						    	<th><?php echo $id2; ?></th>
						    	<!--<th><?php //echo $schedule["id"]; ?></th>-->
								<td><?php echo $slot2["slot2"]; ?></td>
								<td><?php echo $slot2["date"]; ?></td>
								<td>
									<a href="../control/ClinicControls.php?sdeleteid=<?php echo $schedule['id'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure to delete?');">Delete</a>
								</td>
						    </tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
			<!--slot 2 table ends-->
				<!--table for clinic set slot 3-->
			<div class="table">
				<table class="table table-hover table-bordered ">
					<thead>
					    <tr class="thead-dark">
							<th scope="col">SI#</th>
							<th scope="col">Slot 3</th>
							<th scope="col">Date</th>
							<th scope="col">Actions</th>
					    </tr>
					</thead>
					<?php foreach ($slots3 as $slot3) { $id3++;?>
						<tbody>
						    <tr>
						    	<th><?php echo $id3; ?></th>
						    	<!--<th><?php //echo $schedule["id"]; ?></th>-->
								<td><?php echo $slot3["slot3"]; ?></td>
								<td><?php echo $slot3["date"]; ?></td>
								<td>
									<a href="../control/ClinicControls.php?sdeleteid=<?php echo $schedule['id'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure to delete?');">Delete</a>
								</td>
						    </tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
			<!--slot 3 table ends-->
		</div>	
</body>
</html>