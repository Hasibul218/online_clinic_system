<?php
	include '../control/PatientsControl.php';
	//session starts
	session_start();
	if(isset($_SESSION['uid']))
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

	$patients=patientsdata($_SESSION['uid']);
	$users=patientuser($_SESSION['uid']);

	//data retrieve fron users table
	foreach ($users as $user) {
		$password=$user["password"];
	}
	//data retrieve fron patient table
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
			<form method="post" action="../control/PatientsControl.php?uid=<?php echo $userid ?>" id="dregister">
				<table>
					<tr>
						<td>
							<label>User Id</label><br><br>
						</td>
						<td>
							<input type="text" name="uid" id="field" value="<?php echo $userid ?>"disabled>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname" id="field" value="<?php echo $username ?>"required>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="text" name="pass"id="field" value="<?php echo $password ?>"required>
							<br><br>
						</td>
					</tr>
					
					
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="text" name="gender"id="field" value="<?php echo $gender ?>"disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email"id="field"value="<?php echo $email ?>"disabled>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number"id="field"value="<?php echo $number ?>"required>
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
							<label>Blood Group</label><br><br>
						</td>
						<td>
							<input type="text" name="bloodgroup"id="field"value="<?php echo $bloodgroup ?>" disabled>
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
							
					
				</table> 
				
				
				
				<!--update button here -->
				<button name="update"class="submit">Update</button>
				
			</form>	
		</div>
		<!--Patient profile ends-->	
	</body>
</html>