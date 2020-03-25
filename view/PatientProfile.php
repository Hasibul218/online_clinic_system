<?php
	include '../control/PatientsControl.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
	$patients=patientsdata($_SESSION['uid']);
	$users=patientuser($_SESSION['uid']);
	foreach ($users as $user) {
		$password=$user["password"];
	}
	foreach ($patients as $patient) {
		$userid=$patient["userid"];
		$username=$patient["username"];
		$gender=$patient["gender"];
		$email=$patient["email"];
		$number=$patient["phonenumber"];
		$dob=$patient["dob"];
		$bloodgroup=$patient["bloodgroup"];
		$divission=$patient["divission"];
		$district=$patient["district"];
		$thana=$patient["thana"];
	}
	
		
	
?>
<html>
	<head>
		<title>
			Patient Profile
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
	</head>
	<button class="button"name="home"onclick="window.location='../control/LogoutControl.php'">Logout</button>
	<button type="button"name="home"class="button"onclick="window.location='PatientHomePage.php'">Home Page</button>
	<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
	<body>
		<div class="div1">
			<h2>My Profile</h2>
		</div>
		<!--Patient Profile starts-->
		<div class="dregister">
			<h4>Update your profile</h4><hr><br>
			<form method="post" action=""id="dregister">
				<table>
					<tr>
						<td>
							<label>User Id</label><br><br>
						</td>
						<td>
							<input type="text" name="uid"placeholder="Enter User id"id="field" value="<?php echo $userid ?>">
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname"placeholder="Enter User name"id="field" value="<?php echo $username ?>">
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="password" name="pass"placeholder="Enter Password"id="field" value="<?php echo $password ?>">
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>
					
					
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="text" name="gender"placeholder="gender"id="field" value="<?php echo $gender ?>">
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email"placeholder="example@mail.com"id="field"value="<?php echo $email ?>">
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number"placeholder="01XXXXXXXXX"id="field"value="<?php echo $number ?>">
							<label class="errmgs"></label>
							<br><br>
					</tr>		
					<tr>
						<td>
							<label>Date of Birth</label><br><br>
						</td>
						<td>
							<input type="text" name="dob" value="<?php echo $dob ?>"id="field" >
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>Blood Group</label><br><br>
						</td>
						<td>
							<input type="text" name="bloodgroup"id="field"value="<?php echo $bloodgroup ?>" >
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>	
					
					<tr>
						<td>
							<label>Address</label><br><br>
						</td>
						<td>
							<select name="divission"id="address"value="">
								<option selected disabled><?php echo $divission ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="district"id="address">
								<option selected disabled><?php echo $district ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="thana"id="address">
								<option selected disabled><?php echo $thana ?></option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<label class="errmgs"></label>
							<br><br>
						</td>
					</tr>		
							
					
				</table> 
				
				
				
				<!--submit button here -->
				<button name="edit"class="submit">Edit</button><br>
				<button name="update"class="submit">Update</button>
				
			</form>	
		</div>
		<!--Patient profile ends-->	
	</body>
</html>