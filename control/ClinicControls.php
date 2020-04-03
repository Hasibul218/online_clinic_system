<?php 
	include '../model/db_connect.php';
	$cbox1="";
	$cbox2="";
	$cbox3="";
	$has_err=false;
	$cid="";

	if (isset($_POST['schedule'])) {
		
		$cbox1=$_POST['s1'];
		$cbox2=$_POST['s2'];
		$cbox3=$_POST['s3'];
		$cid=$_POST['cid'];
		$date=$_POST['date'];
		if(!$has_err)
		{
			setschedule();
			//echo "<script> alert('Successfully');window.location='../view/ClinicSchedule.php' </script>";
			 header ('Location:../view/ClinicSchedule.php');
		}

	}
//data retrieve fron clinics table starts
function clinicsdata($cid)
{
	$cquery="SELECT * FROM clinics WHERE cid='$cid'";
	$cresults=getdata($cquery);
	return $cresults;

}
//data retrieve fron clinics table ends

//insert into clinic schedule table
function setschedule()
{
	global $cbox1;
	global $cbox2;
	global $cbox3;
	global $cid;
	global $date;
	$results=clinicsdata($cid);
	foreach ($results as $cresult) 
	{
		$cname=$cresult['cname'];
		$phonenumber=$cresult['phonenumber'];
		$divission=$cresult['divission'];
		$district=$cresult['district'];
		$thana=$cresult['thana'];
	}
	$s1query="INSERT INTO slot1 VALUES (NULL,'$cid','$cname','$cbox1','$divission','$district','$thana','$date')";
	execute($s1query); 
		$s2query="INSERT INTO slot2 VALUES (NULL,'$cid','$cname','$cbox2','$divission','$district','$thana','$date')";
	execute($s2query); 
			$s3query="INSERT INTO slot3 VALUES (NULL,'$cid','$cname','$cbox3','$divission','$district','$thana','$date')";
	execute($s3query); 
}
//insert into clinic schedule table

//data retrieve from slot 1
function slot1($cid)
{
	$csquery="SELECT * FROM slot1 WHERE cid='$cid'";
	$csresult=getdata($csquery);
	return $csresult;
}
//data retrieve from slot 1
//data retrieve from slot 2
function slot2($cid)
{
	$csquery="SELECT * FROM slot2 WHERE cid='$cid'";
	$csresult=getdata($csquery);
	return $csresult;
}
//data retrieve from slot 2
//data retrieve from slot 3
function slot3($cid)
{
	$csquery="SELECT * FROM slot3 WHERE cid='$cid'";
	$csresult=getdata($csquery);
	return $csresult;
}
//data retrieve from slot 3
//delete clinic schedule
if (isset($_GET['sdeleteid'])) {
	$sid=$_GET['sdeleteid'];
	scheduledelete($sid);
	header ('Location:../view/ClinicSchedule.php');

}
function scheduledelete($id)
{
	$sdelete="DELETE FROM `clinicsetschedule` WHERE id='$id'";
	execute($sdelete);
}
//delete clinic schedule
?>