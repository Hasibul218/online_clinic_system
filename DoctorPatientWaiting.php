<html>
	<head>
		<title>
			Doctor Patient Waiting
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
	</head>
	<body>
		<button type="button"name="home"class="button"onclick="window.location='DoctorHomePage.php'">Home Page</button>
		<div class="div1">
			<h2>Patient Waiting</h2>
		</div>
		<button type="button"name="home"class="button"onclick="document.getElementById('bg-model').style.display='flex'";>Prescrive</button>
		<div id="bg-model"class="bg-model">
			<div class="model-content">
				<div >
					<button type="button"name="close"class="close"onclick="document.getElementById('bg-model').style.display='none'";>+</button>
				</div>
				<form action=""method="post">
					<label class="content">Patient Name :</label><br>
					<label class="content">Gender :</label><br><br>
					<label class="content">Symptom :</label><br>
					<input id="content"type="text"placeholder="Symptom"name="symtom"><br>
					<label class="content">Diseases :</label><br>
					<select id="content"name="diseases">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Test :</label><br>
					<select id="content"name="test">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Test Clinic Name :</label><br>
					<select id="content"name="cname">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Report :</label><br>
					<input type="text"name="report"id="content"placeholder="write report here"><br>
					<label class="content">Medicines :</label><br>
					<textarea type="text"name="medicines"id="content"placeholder="write medicines here"></textarea><br><br>
					<button type="button"name="prescrive"class="prescrive"onclick="window.location=''">Prescrive</button>
				</form>
			</div>
		</div>
	</body>
</html>