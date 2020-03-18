<?php
	$err_uid="";
	$uid="";
	$err_uname="";
	$uname="";
	$err_pass="";
	$pass="";
	$err_gender="";
	$err_email="";
	$email="";
	$err_number="";
	$number="";
	$err_dob="";
	$dob="";
	$err_address="";
	$err_bloodgroup="";
	
	
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['uid']))
		{
			$err_uid="*user id required";
		}
		elseif(!preg_match('/^[a-z A-Z 0-9]*$/', $_POST['uid']))
		{
			$err_uid="Invalid input";
		}
		else
		{
			$uid=htmlspecialchars($_POST['uid']);
		}
		if(empty($_POST['uname']))
		{
			$err_uname="*user name required";
		}
		elseif(!preg_match('/^[a-z A-Z ]*$/', $_POST['uname']))
		{
			$err_uname="Invalid input";
		}
		else
		{
			$uname=htmlspecialchars($_POST['uname']);
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*password required";
		}
		elseif(strlen($_POST['repass'])<4)
		{
			$err_pass="password minimum 4 digit";
		}
		else
		{
			$pass=htmlspecialchars($_POST['pass']);
		}
		
		if(empty($_POST['gender']))
		{
			$err_gender="*select gender";
		}
		if(empty ($_POST['email']))
		{
			$err_email="*email required";
		}
		elseif(!strpos(($_POST['email']),"@"))
		{
			$err_email="*Invalid Email";
		}
		elseif(!strpos(($_POST['email']),"."))
		{
			$err_email="*Invalid Email";
		}
		elseif(!preg_match('/^[a-z A-Z 0-9 . @]*$/', $_POST['email']))
		{
			$err_email="*Invalid Email";
		}
		else
		{
			$email=htmlspecialchars($_POST['email']);
		}
		if(empty($_POST['number']))
		{
			$err_number="*number required";
		}
		elseif(!preg_match('/^[0-9]*$/', $_POST['number']))
		{
			$err_number="*invalid number";
		}
		elseif(!(strlen($_POST['number'])==11))
		{
			$err_number="*11 digit number";
		}
		else
		{
			$number=htmlspecialchars($_POST['number']);
		}
		if(empty($_POST['dob']))
		{
			$err_dob="*fill this field";
		}
		if(empty($_POST['divission']))
		{
			$err_address="*fill full address";
		}
		elseif(empty($_POST['district']))
		{
			$err_address="*fill full address";
		}
		elseif(empty($_POST['thana']))
		{
			$err_address="*fill full address";
		}
		if(empty($_POST['bloodgroup']))
		{
			$err_bloodgroup="*select bloodgroup";
		}
		if(empty($_POST['term']))
		{
			$err_term="*select term";
		}
		
	}
?>
<html>
	<head>
		<title>Patient Registration Form</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
		<link rel="stylesheet"type="text/css"href="CSS/homepage.css">
	</head>
	<body>
		<div class="btngrp1">
			<button type="button"name="home"class="button"onclick="window.location='HomePage.php'">Home</button>
			<button name="home"class="button"onclick="window.location='Login.php'">Login</button>
				<div class="dropdown">
				<button class="dropbtn">Sign up 
				</button>
				<div class="dropdown-content">
				  <a href="DoctorRegistration.php">Doctor</a>
				  <a href="PatientRegistration.php">Patient</a>
				</div>
			</div> 
		</div>
		<div class="dregister">
			<div class="para1">
				<p class="p1">
					Welcome to Online Clinic ! By signing up 
					with Onlineclinic.com, you confirm your understanding and agreement 
					that each appointment brought to you by Onlineclinic.com will have a nominal fee of <mark>BDT 20</mark>
				</p>
			</div>
			<h4>Patient Register Form</h4><hr><br>
			<form method="post" action=""id="dregister">
				<table>
					<tr>
						<td>
							<label>User Id</label><br><br>
						</td>
						<td>
							<input type="text" name="uid"placeholder="Enter User id"id="field" value="<?php echo $uid ?>">
							<label class="errmgs"><?php echo $err_uid ?></label>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname"placeholder="Enter User name"id="field" value="<?php echo $uname ?>">
							<label class="errmgs"><?php echo $err_uname?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="password" name="pass"placeholder="Enter Password"id="field" value="<?php echo $pass?>">
							<label class="errmgs"><?php echo $err_pass?></label>
							<br><br>
						</td>
					</tr>
					
					
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="radio"name="gender"value="Male" class="gender">Male &nbsp
							<input type="radio"name="gender"value="Female" class="gender">Female 
							<label class="errmgs"><?php echo $err_gender?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email"placeholder="example@mail.com"id="field"value="<?php echo $email?>">
							<label class="errmgs"><?php echo $err_email?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number"placeholder="01XXXXXXXXX"id="field"value="<?php echo $number?>">
							<label class="errmgs"><?php echo $err_number?></label>
							<br><br>
					</tr>		
					<tr>
						<td>
							<label>Date of Birth</label><br><br>
						</td>
						<td>
							<input type="date" name="dob" value=""id="field" >
							<label class="errmgs"><?php echo $err_dob?></label>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>Blood Group</label><br><br>
						</td>
						<td>
							<select name="bloodgroup"id="field">
								<option selected disabled>Select Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
							<label class="errmgs"><?php echo $err_bloodgroup?></label>
							<br><br>
						</td>
					</tr>	
					
					<tr>
						<td>
							<label>Address</label><br><br>
						</td>
						<td>
							<select name="divission"id="address">
								<option selected disabled>Divission</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="district"id="address">
								<option selected disabled>District</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<select name="thana"id="address">
								<option selected disabled>Thana</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Dhaka" >Dhaka</option>
								<option value="Borisal" >Borisal</option>
								<option value="Khulna">Khulna</option>
								<option value="Chittagong">Chittagong</option>
							</select>
							<label class="errmgs"><?php echo $err_address?></label>
							<br><br>
						</td>
					</tr>		
							
					
				</table> 
				
				
				
				<!--submit button here -->
				<button name="submit"class="submit">Sign up</button>
				
			</form>	
		</div>
		<div class="div1">
			<a href=""class="d1">About us |</a>
			<a href=""class="d1">FAQ| </a>
			<a href=""class="d1"> Privacy Policy</a>
		</div>
	</body>
</html>