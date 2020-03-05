<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet"type="text/css"href="CSS/logincss.css">
	</head>
	<body>
	
		<script>
		function myFunction() {
		  var x = document.getElementById("myinput");
		  if (x.type === "password") {
			x.type = "text";
		  } else {
			x.type = "password";
		  }
		}
		</script>
		
		<div class="btngrp">
			<button type="button"name="home"class="button">Home</button>
			<button type="button"name="home"class="button">Login</button>
		</div>
		<form method="" action="">
			<div class="login">
				<table>
					<tr>
						<td>
							<input type="text" class="field" name="uname" value="" placeholder="User Name">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="password" class="field" name="pass" value="" placeholder="Password"id="myinput"><br><br>
							<input type="checkbox" onclick="myFunction()"> &nbsp Show Password
						</td>
					</tr>
					<tr>
						<td>
							<!--login button here -->
							<br>
							<button name="submit"class="submit">Login</button><br><br>
							<label class="lbl"><b>Or Register <a href="HomePage.php">here</a></b></label>
						</td>
					</tr>
				</table>
			</div>
		</form>	
		<div class="div1">
			<a href=""class="d1">About us |</a>
			<a href=""class="d1">FAQ| </a>
			<a href=""class="d1"> Privacy Policy</a>
		</div>
	</body>
</html>