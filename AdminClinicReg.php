<?php
	$err_cid="";
	$cid="";
	$err_cname="";
	$cname="";
	$err_pass="";
	$pass="";
	$err_number="";
	$number="";
	$err_address="";
	if(isset($_POST['submit']))
	{
		if(empty($_POST['cid']))
		{
			$err_cid="*user id required";
		}
		elseif(!preg_match('/^[a-z A-Z 0-9]*$/', $_POST['cid']))
		{
			$err_cid="Invalid input";
		}
		else
		{
			$cid=htmlspecialchars($_POST['cid']);
		}
		
		if(empty($_POST['cname']))
		{
			$err_cname="*user name required";
		}
		elseif(!preg_match('/^[a-z A-Z ]*$/', $_POST['cname']))
		{
			$err_cname="Invalid input";
		}
		else
		{
			$cname=htmlspecialchars($_POST['cname']);
		}
		
		if(empty($_POST['pass']))
		{
			$err_pass="*password required";
		}
		elseif(strlen($_POST['pass'])<4)
		{
			$err_pass="password minimum 4 digit";
		}
		else
		{
			$pass=htmlspecialchars($_POST['pass']);
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
	}
?>

<html>
	<head>
		<title>
			Admin Clinic Registration
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/adminclinicreg.css">
	</head>
	<body>
		<div class="head">
			<label class="l1">Online Clinic</label>
		</div>
		<div class="cregister">
			<h4>Clinic Register Form</h4><hr><br>
				<form method="post" action=""id="cregister">
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