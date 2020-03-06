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
					<a href="">Doctors List</a>
					<a href="">Doctor's Request</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Patient</button>
				<div class="dropdown-content">
			    <a href="">Patient List</a>
			    <a href="">Patient History</a>
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