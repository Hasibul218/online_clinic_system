<?php
	include '../control/AdminControl.php';
	
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
?>

<html>
	<head>
		<title>
			Admin Clinic Registration
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/adminclinicreg.css">
		<link rel="stylesheet"type="text/css"href="CSS/admincliniclist.css">
	</head>
	<body>
		<div class="head">
			<label class="l1">Online Clinic</label>
			<button class="adminbtn"onclick="window.location='../control/LogoutControl.php'">Logout</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
		</div>
		<div class="cregister">
			<h4>Clinic Register Form</h4><hr><br>
				<form method="post" action="../control/AdminControl.php"id="cregister">
					<table>
						<tr>
							<td>
								<label>Clinic Id</label><br><br>
							</td>
							<td>
								<input type="text" name="cid"placeholder="Clinic id"id="field" value="<?php echo $cid ?>">
								<label class="errmgs"><?php echo $err_cid ?></label>
								<br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label>Clinic Name</label><br><br>
							</td>
							<td>
								<input type="text" name="cname"placeholder="Clinic name"id="field" value="<?php echo $cname ?>">
								<label class="errmgs"><?php echo $err_cname?></label>
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
								<label>Phone Number</label><br><br>
							</td>
							<td>
								<input type="text" name="number"placeholder="01XXXXXXXXX"id="field"value="<?php echo $number?>">
								<label class="errmgs"><?php echo $err_number?></label>
								<br><br>
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
					<button name="submit"class="submit">Register</button>
				</form>	
			</div>
	</body>
</html>