<html>
	<head>
		<title>
			Doctor Set Schedule
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/setschedule.css">
	</head>
	<body>
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
		<div>
	</body>
</html>