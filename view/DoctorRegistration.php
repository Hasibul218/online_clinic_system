<?php 
	include '../control/DoctorsControls.php';
?>
<html>
	<head>
		<title>Doctor Registration Form</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
		<link rel="stylesheet"type="text/css"href="CSS/homepage.css">
	</head>
	<body>
		<div class="btngrp1">
			<button type="button"name="home"class="button"onclick="window.location='HomePage.php'">Home</button>
			<button name="home"class="button"onclick="window.location='Login.php'">Login</button>
			<div class="dropdown">
				<button type="button" class="dropbtn">Sign up</button>
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
			<h4>Doctor Register Form</h4><hr><br>
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
					<tr>
						<td>
							<label>Specialty</label><br><br>
						</td>
						<td>
							<select name="specialty"id="field">
								<option selected disabled>Select Specialty</option>
								<option value="Allergy & immunology">Allergy & immunology</option>
								<option value="Anesthesiology">Anesthesiology</option>
								<option value="Dermatology">Dermatology</option>
								<option value="Emergency medicine">Emergency medicine</option>
								<option value="Medical genetics">Medical genetics</option>
								<option value="Neurology">Neurology</option>
							</select>
							<label class="errmgs"><?php echo $err_specialty?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Degree</label><br><br>
						</td>
						<td>
							<input type="text" name="degree"placeholder="Enter Degree"id="field"value="<?php echo $degree?>">
							<label class="errmgs"><?php echo $err_degree?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>BMDCRegno</label><br><br>
						</td>
						<td>
							<input type="text" name="bmdcregno"placeholder="10 digits"id="field"value="<?php echo $bmdcregno?>">
							<label class="errmgs"><?php echo $err_bmdcregno?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Description</label><br><br>
						</td>
						<td>
							<textarea name="description"placeholder="Message(optional)maxlength=200"id="description" maxlength="200"></textarea>
							<br><br>
						</td>
					</tr>
				</table>
				<!--submit button here -->
				<button name="submit"class="submit">Submit</button>
			</form>	
		</div>
		<div class="div1">
			<a href=""class="d1">About us |</a>
			<a href=""class="d1">FAQ| </a>
			<a href=""class="d1"> Privacy Policy</a>
		</div>
	</body>
</html>