<?php
	include '../model/db_connect.php';
	//form validation starts 
	$err_uid="";
	$uid="";
	$err_uname="";
	$uname="";
	$err_pass="";
	$pass="";
	$err_gender="";
	$gender="";
	$err_email="";
	$email="";
	$err_number="";
	$number="";
	$err_dob="";
	$dob="";
	$err_address="";
	$divission="";
	$district="";
	$thana="";
	$err_bloodgroup="";
	$bloodgroup="";
	$has_err=false;
	$click="";
	
	if(isset($_POST['submit']))
	{
	

		if(empty($_POST['uid']))
		{
			$err_uid="*user id required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z 0-9]*$/', $_POST['uid']))
		{
			$err_uid="Invalid input";
			$has_err=true;

		}
		else
		{
			$uid=htmlspecialchars($_POST['uid']);
		}
		if(empty($_POST['uname']))
		{
			$err_uname="*user name required";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z ]*$/', $_POST['uname']))
		{
			$err_uname="Invalid input";
			$has_err=true;
		}
		else
		{
			$uname=htmlspecialchars($_POST['uname']);
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
		
		if(empty($_POST['gender']))
		{
			$err_gender="*select gender";
			$has_err=true;
		}
		else
		{
			$gender=htmlspecialchars($_POST['gender']);
		}
		if(empty ($_POST['email']))
		{
			$err_email="*email required";
			$has_err=true;
		}
		elseif(!strpos(($_POST['email']),"@"))
		{
			$err_email="*Invalid Email";
			$has_err=true;
		}
		elseif(!strpos(($_POST['email']),"."))
		{
			$err_email="*Invalid Email";
			$has_err=true;
		}
		elseif(!preg_match('/^[a-z A-Z 0-9 . @]*$/', $_POST['email']))
		{
			$err_email="*Invalid Email";
			$has_err=true;
		}
		else
		{
			$email=htmlspecialchars($_POST['email']);
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
		if(empty($_POST['dob']))
		{
			$err_dob="*fill this field";
			$has_err=true;
		}
		else
		{
			$dob=htmlspecialchars($_POST['dob']);
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
		if(empty($_POST['bloodgroup']))
		{
			$err_bloodgroup="*select bloodgroup";
			$has_err=true;
		}
		else
		{
			$bloodgroup=htmlspecialchars($_POST['bloodgroup']);
		}
		//insert into database use function
		if (!$has_err) 
		{
			//matching userid with database
			$query="SELECT userid FROM users WHERE userid='$uid'";
			$query1="SELECT userid FROM tempusers WHERE userid='$uid'";
			$result=execute($query);
			$result1=execute($query1);
			if(mysqli_num_rows($result)>0)
			{
				$err_uid= "user id not available";
			}
			elseif(mysqli_num_rows($result1)>0)
			{
				$err_uid= "*user id not available";
			}
			else
			{
				//insert into patients & users table
				insertpatient();
				echo "<script> alert('Successfuly registered');window.location='Login.php' </script>";
			}
			//matching userid with database ends
		}
	}
	//form validation ends
if(isset($_POST['update']))
{
	//patient update own profile
	$uid=($_GET['uid']);
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$number=$_POST['number'];
	$divission=$_POST['divission'];
	$district=$_POST['district'];
	$thana=$_POST['thana'];
	updatepatient();
	echo "<script> alert('Successfully Updated');window.location='../view/PatientProfile.php' </script>";
}
	
//insert into database query
function insertpatient()
{
	global $uid;
	global $uname;
	global $pass;
	global $gender;
	global $email;
	global $number;
	global $dob;
	global $divission;
	global $district;
	global $thana;
	global $bloodgroup;
	$status=3;

	//insert into patients table
	$pquery="INSERT INTO patients VALUES (NULL,'$uid','$uname','$gender','$email','$number','$dob','$bloodgroup','$divission','$district','$thana')";
	//insert into users table
	$uquery="INSERT INTO users VALUES (NULL,'$uid','$pass','$status')";

	execute($pquery); 
	execute($uquery); 
}
//Update
//insert into database query
function updatepatient()
{
	global $uid;
	global $uname;
	global $pass;
	global $number;
	global $divission;
	global $district;
	global $thana;

	//update into patients table
	$pquery="UPDATE `patients` SET `username`='$uname',`phonenumber`='$number',`divission`='$divission',`district`='$district',`thana`='$thana' WHERE `userid`='$uid'";
	//update into users table
	$uquery="UPDATE users SET password='$pass' WHERE userid='$uid'";

	execute($pquery); 
	execute($uquery); 
}
//update ends


function patientsdata($uid)
{
	//data retrieve fron patient table
	$pquery="SELECT * FROM patients WHERE userid='$uid'";
	$presults=getdata($pquery);
	return $presults;
}
function patientuser($uid)
{
	//data retrieve fron users table
	$uquery="SELECT password FROM users WHERE userid='$uid'";
	$uresults=getdata($uquery);
	return $uresults;
}
	function divission()
	{
		$query="SELECT * from divission";
		$results=getdata($query);
		return $results;
	}
	
?>