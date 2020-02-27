<html>
	<head>
		<title>Doctor Registration Form</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
	</head>
	<body>
		<div class="btngrp">
			<button name="home"class="button">Home</button>
			<button name="home"class="button">Login</button>
		</div>
		<div class="dregister">
			<div class="para1">
				<p class="p1">
					Welcome to Doctorola.com ! By signing up 
					with Doctorola.com, you confirm your understanding and agreement 
					that each appointment brought to you by Doctorola.com will have a nominal fee of <mark>BDT 20</mark>
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
							<input type="text" name="uid"placeholder="Enter User id"id="field"><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname"placeholder="Enter User name"id="field"><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="password" name="pass"placeholder="Enter Password"id="field"><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="radio"name="gender"value="Male" class="gender">Male &nbsp
							<input type="radio"name="gender"value="Female" class="gender">Female <br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email"placeholder="Enter Email"id="field"><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number"placeholder="Enter Phone Number"id="field"><br><br>
					</tr>		
					<tr>
						<td>
							<label>Date of Birth</label><br><br>
						</td>
						<td>
							<input type="date" name="dob" value=""id="field"><br><br>
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
							</select><br><br>
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
							</select><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Degree</label><br><br>
						</td>
						<td>
							<input type="text" name="degree"placeholder="Enter Degree"id="field"><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>BMDCRegno</label><br><br>
						</td>
						<td>
							<input type="text" name="bmdcregno"placeholder="10 digits"id="field"><br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Description</label><br><br>
						</td>
						<td>
							<textarea name="description"placeholder="Message"id="description"></textarea><br><br>
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