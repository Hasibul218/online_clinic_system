<?php
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
?>
<html>
	<head>
		<title>
			Admin Home Page
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/adminhomepage.css">
		<link rel="stylesheet"type="text/css"href="CSS/admincliniclist.css">
	</head>
	<body>
		<div class="head">
			<label class="l1">Welcome Admin</label>
			<button class="adminbtn"onclick="window.location='../control/LogoutControl.php'">Logout</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
		</div>
		<label class="l2">Admin userid : <?php echo $_SESSION['uid'] ?></label>
		<div id="admin-navbar"style="text-align:center">
			<div class="dropdown">
				<button class="dropbtn">Doctor</button>
				<div class="dropdown-content">
					<a href="AdminDoctorList.php">Doctors List</a>
					<a href="AdminDoctorRequest.php">Doctor's Request</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Patient</button>
				<div class="dropdown-content">
			    <a href="AdminPatientList.php">Patient List</a>
			    <a href="AdminPatientHistory.php">Patient History</a>
			  </div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Clinic</button>
				<div class="dropdown-content">
			    <a href="AdminClinicList.php">Clinic List</a>
			    <a href="AdminClinicReg.php">Clinic Registration</a>
			  </div>
			</div>
		</div>
	</body>
</html>