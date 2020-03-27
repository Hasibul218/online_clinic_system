<?php
	include '../control/AdminControl.php';
	include 'CSS/bootstrap.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
	//data from clinics table
	if(isset($_POST['search']))
	{
		$s=$_POST['search'];
		$clinics=search($s);
	}
	else
	{
		$clinics=clinicsdata();
		$s="";
	}
	$count=count($clinics);//count clinic
?>
<html>
	<head>
		<title>
			Admin Clinic List
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/admincliniclist.css">
	</head>
	<body>
		<div class="div1">
			<label class="h2">Clinic List</label>
			<button class="adminbtn"onclick="window.location='../control/LogoutControl.php'">Logout</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminClinicReg.php'">Add Clinic</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
		</div>
		<!--search bar & table ends-->
			<div class="search">
			<form method="POST" action="">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button class="btn btn-outline-primary" type="button" name="search"><i class="fa fa-search"></i></button>
					</div>
					<input type="text" class="form-control" name="search" value="" placeholder="search with name" >
				</div>
			</form>
				<div class="totalclinic">
					<label>Total Clinic</label>
					<input class="form-control" type="text" value="<?php echo $count ?>" readonly>
				</div>
			</div>
		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">SI#</th>
			      <th scope="col">Clinic id</th>
			      <th scope="col">Clinic name</th>
			      <th scope="col">Phone no.</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
				<?php foreach ($clinics as $clinic) { ?>
					<tbody>
						<th><?php echo $clinic["id"]; ?></th>
						<td><?php echo $clinic["cid"]; ?></td>
						<td><?php echo $clinic["cname"]; ?></td>
						<td><?php echo $clinic["phonenumber"]; ?></td>
						<td><?php echo $clinic["divission"]; ?></td>
						<td><?php echo $clinic["district"]; ?></td>
						<td><?php echo $clinic["thana"]; ?></td>
						<td>
							<a href="../control/AdminControl.php?cid=<?php echo $clinic['cid'] ?>" class="btn btn-danger float-right"style="width: 70px" onclick="return confirm ('Are you sure?');">Delete</a>
						</td>
					</tbody>
				<?php } ?>
			</table>
		</div>
		<!--search bar & table ends-->
	</body>
</html>