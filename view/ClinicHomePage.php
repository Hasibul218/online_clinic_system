<html>
	<head>
		<title>
			Clinic Home Page
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/doctorhomepage.css">
	</head>
	<body>
		<button class="button"onclick="window.location='Login.php'">Logout</button>
		<div class="div1">
			<h2>Home Page</h2>
		</div>
		<label class="l1">Welcome to :<label>
		<div class="sidebar">                <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown-->
			<a href="ClinicSitDoctorPatient.php">Sit Doctor Patient</a>
		</div>
		<form method="post"action="" class="setschedule">
			<div class="setschedule-content">
				<h5>Update Schedule</h5>
				<div class="setschedule-list">
					<input type="checkbox" name=""> 10am - 12pm<br><br>
					<input type="checkbox" name=""> 10am - 12pm<br><br>
					<input type="checkbox" name=""> 10am - 12pm<br><br>
					<input type="checkbox" name=""> 10am - 12pm<br><br>
					<input type="checkbox" name=""> 10am - 12pm<br><br>
					<button type="button"name="update"class="prescrive"onclick="window.location=''">Schedule</button>
				</div>
			</div>
		</form>
	</body>
</html>