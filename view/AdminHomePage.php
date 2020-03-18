<html>
	<head>
		<title>
			Admin Home Page
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/adminhomepage.css">
	</head>
	<body>
		<div class="head">
			<label class="l1">Welcome Admin</label>
		</div>
		<label class="l2">Admin Name :</label>
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