<?php
	include '../model/db_connect.php';
	//validation clinic starts
	$err_cid="";
	$cid="";
	$err_cname="";
	$cname="";
	$err_pass="";
	$pass="";
	$err_number="";
	$number="";
	$err_address="";
	$divission="";
	$district="";
	$thana="";
	$has_err=false;

	if(isset($_POST['submit']))
	{
		if(empty($_POST['cid']))
		{
			$err_cid="*user id required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z 0-9]*$/', $_POST['cid']))
		{
			$err_cid="Invalid input";
			$has_err=true;
		}
		else
		{
			$cid=htmlspecialchars($_POST['cid']);
		}
		
		if(empty($_POST['cname']))
		{
			$err_cname="*user name required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z ]*$/', $_POST['cname']))
		{
			$err_cname="Invalid input";
			$has_err=true;
		}
		else
		{
			$cname=htmlspecialchars($_POST['cname']);
		}
		
		if(empty($_POST['pass']))
		{
			$err_pass="*password required";
			$has_err=true;
		}
		elseif(strlen($_POST['pass'])<4)
		{
			$err_pass="password minimum 4 digit";
			$has_err=true;
		}
		else
		{
			$pass=htmlspecialchars($_POST['pass']);
		}
		
		if(empty($_POST['number']))
		{
			$err_number="*number required";
			$has_err=true;
		}
		elseif(!preg_match('/^[0-9]*$/', $_POST['number']))
		{
			$err_number="*invalid number";
			$has_err=true;
		}
		elseif(!(strlen($_POST['number'])==11))
		{
			$err_number="*11 digit number";
			$has_err=true;
		}
		else
		{
			$number=htmlspecialchars($_POST['number']);
		}
		if(empty($_POST['divission']))
		{
			$err_address="*fill full address";
			$has_err=true;
		}
		else
		{
			$divission=htmlspecialchars($_POST['divission']);
		}
		if(empty($_POST['district']))
		{
			$err_address="*fill full address";
			$has_err=true;
		}
		else
		{
			$district=htmlspecialchars($_POST['district']);
		}
		if(empty($_POST['thana']))
		{
			$err_address="*fill full address";
			$has_err=true;
		}
		else
		{
			$thana=htmlspecialchars($_POST['thana']);
		}
		//insert into database use function
		if (!$has_err) 
		{
			//matching userid with database
			$query="SELECT userid FROM users WHERE userid='$cid'";
			$result=execute($query);
			if(mysqli_num_rows($result)>0)
			{
				$err_cid= "user id not available";
			}
			else
			{
				//insert into patients & users table
				insertclinic();
				echo "<script> alert('Successfuly registered');window.location='../view/AdminClinicList.php' </script>";
			}
			//matching userid with database ends
		}
	}
	//validation clinic ends




function insertclinic()
{
	global $cid;
	global $cname;
	global $pass;
	global $number;
	global $divission;
	global $district;
	global $thana;
	$status=4;

	//insert into clinics table
	$cquery="INSERT INTO clinics VALUES (NULL,'$cid','$cname','$number','$divission','$district','$thana')";
	//insert into users table
	$uquery="INSERT INTO users VALUES (NULL,'$cid','$pass','$status')";

	execute($cquery); 
	execute($uquery); 
}
function clinicsdata()
{
	//data retrieve fron clinics table
	$cquery="SELECT * FROM clinics";
	$cresults=getdata($cquery);
	return $cresults;
}

if(isset($_GET['cid']))
{
	$cid=$_GET['cid'];

	deleteclinic($cid);
	header("location:../view/AdminClinicList.php");
}
function deleteclinic($cid)
{
	$cdelete="DELETE FROM `clinics` WHERE cid='$cid'";
	$udelete="DELETE FROM `users` WHERE userid='$cid'";
	execute($cdelete);
	execute($udelete);
}
?>