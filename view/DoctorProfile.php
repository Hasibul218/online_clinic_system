<?php
include '../control/DoctorsControls.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}

	$doctors=doctorsdata($_SESSION['uid']);
	$users=doctoruser($_SESSION['uid']);

	//data retrieve fron users table
	foreach ($users as $user) {
		$pass=$user["password"];
	}
	//data retrieve fron doctor table
	foreach ($doctors as $doctor) {
		$uid=$doctor["userid"];
		$uname=$doctor["username"];
		$gender=$doctor["gender"];
		$email=$doctor["email"];
		$number=$doctor["phonenumber"];
		$dob=$doctor["dob"];
		$divission=$doctor["divission"];
		$district=$doctor["district"];
		$thana=$doctor["thana"];
		$specialty=$doctor['specialty'];
		$degree=$doctor['degree'];
		$bmdcregno=$doctor['bmdcregno'];
		$description=$doctor['description'];
	}

?>
<html>
	<head>
		<title>
			Doctor Profile
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
	</head>
	<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
	<button type="button"name="home"class="button"onclick="window.location='DoctorHomePage.php'">Home Page</button>
	<body>
		<div class="div1">
			<h2>My Profile</h2>
		</div>
		<!--Update Profile Starts-->
		<div class="dregister">
			<h4>Update your profile</h4><hr><br>
			<form method="post" action="../control/DoctorsControls.php?uid=<?php echo $uid ?>"id="dregister">
				<table>
					<tr>
						<td>
							<label>User Id</label><br><br>
						</td>
						<td>
							<input type="text" name="uid"placeholder="Enter User id"id="field" value="<?php echo $uid ?>"disabled>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname"placeholder="Enter User name"id="field" value="<?php echo $uname ?>"required>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="password" name="pass"placeholder="Enter Password"id="field" value="<?php echo $pass?>"required>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="text"name="gender"value="<?php echo $gender?>" id="field"disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email" id="field"value="<?php echo $email?>"disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number" id="field"value="<?php echo $number?>"required>
							<br><br>
					</tr>		
					<tr>
						<td>
							<label>Date of Birth</label><br><br>
						</td>
						<td>
							<input type="text" name="dob" value="<?php echo $dob ?>"id="field" disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Address</label><br><br>
						</td>
						<td>
							<select name="divission"id="address"required>
								<option selected value="<?php echo $divission ?>"><?php echo $divission ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="district"id="address"required>
								<option selected value="<?php echo $district ?>"><?php echo $district ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="thana"id="address"required>
								<option selected value="<?php echo $thana ?>"><?php echo $thana ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Specialty</label><br><br>
						</td>
						<td>
							<select name="specialty"id="field"required>
								<option selected value="<?php echo $specialty?>"><?php echo $specialty?></option>
								<option value="Allergy & immunology">Allergy & immunology</option>
								<option value="Anesthesiology">Anesthesiology</option>
								<option value="Dermatology">Dermatology</option>
								<option value="Emergency medicine">Emergency medicine</option>
								<option value="Medical genetics">Medical genetics</option>
								<option value="Neurology">Neurology</option>
							</select>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Degree</label><br><br>
						</td>
						<td>
							<input type="text" name="degree" id="field"value="<?php echo $degree?>"required>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>BMDCRegno</label><br><br>
						</td>
						<td>
							<input type="text" name="bmdcregno"placeholder="10 digits"id="field"value="<?php echo $bmdcregno?>"disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Description</label><br><br>
						</td>
						<td>
							<textarea name="description" id="description" maxlength="200" required><?php echo $description?></textarea>
							<br><br>
						</td>
					</tr>
				</table>
				<!--update button here -->
				<button name="update"class="submit">Update</button>
			</form>	
		</div>
		<!--Update Profile Ends-->
	</body>
</html>