<html>
	<head><title>Doctor Registration</title></head>
	<body>
		<h1 style="color:red">REGISTRATION FORM</h1>
		<form method="post" action="">
			<table>
				<tr>
					<td>
						<b>User Id</b>
					</td>
					<td>
						<input type="text" name="uid" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>User Name</b>
					</td>
					<td>
						<input type="text" name="uname" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>Password</b>
					</td>
					<td>
						<input type="password" name="pass" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>Gender</b>
					</td>
					<td>
						Male<input type="radio" name="gender" value="Male">
						Female<input type="radio" name="gender" value="Female">
					</td>
				</tr>
				<tr>
					<td>
						<b>Email</b>
					</td>
					<td>
						<input type="text" name="email" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>Phone Number</b>
					</td>
					<td>
						<input type="text" name="pnumber" value="" placeholder="01XXXXXXXXX">
					</td>
				</tr>
				<tr>
					<td>
						<b>Date of Birth</b>
					</td>
					<td>
						<input type="date" name="dob" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>Address</b>
					</td>
					<td>
						<select name="divission">
							<option selected disabled>Select Divission</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Dhaka" >Dhaka</option>
							<option value="Borisal" >Borisal</option>
							<option value="Khulna">Khulna</option>
							<option value="Chittagong">Chittagong</option>
						</select>
						<select name="district">
							<option selected disabled>Select District</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Dhaka" >Dhaka</option>
							<option value="Borisal" >Borisal</option>
							<option value="Khulna">Khulna</option>
							<option value="Chittagong">Chittagong</option>
						</select>
						<select name="thana">
							<option selected disabled>Select Thana</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Dhaka" >Dhaka</option>
							<option value="Borisal" >Borisal</option>
							<option value="Khulna">Khulna</option>
							<option value="Chittagong">Chittagong</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<b>Specialty</b>
					</td>
					<td>
						<select>
							<option selected disabled>Select Specialty</option>
							<option value="Allergy & immunology">Allergy & immunology</option>
							<option value="Anesthesiology">Anesthesiology</option>
							<option value="Dermatology">Dermatology</option>
							<option value="Emergency medicine">Emergency medicine</option>
							<option value="Medical genetics">Medical genetics</option>
							<option value="Neurology">Neurology</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<b>Degree</b>
					</td>
					<td>
						<input type="text" name="degree" value="">
					</td>
				</tr>
				<tr>
					<td>
						<b>BMDCRegno</b>
					</td>
					<td>
						<input type="text" name="bmdcregno" value="" placeholder="10 digits">
					</td>
				</tr>
				<tr>
					<td>
						<b>Description</b>
					</td>
					<td>
						<input type="textfield" name="description" value="">
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<input type="checkbox" name="checkbox" value="" placeholder="10 digits">
						<span>Agreed to terms and conditions</span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>