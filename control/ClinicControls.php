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
	$squery="INSERT INTO clinicsetschedule VALUES (NULL,'$cid','$cname','$cbox1','$cbox2','$cbox3','$divission','$district','$thana','$date')";
	execute($squery); 
}
//insert into clinic schedule table

//data retrieve from clinicsetschedule
function clinicschedule($cid)
{
	$csquery="SELECT * FROM clinicsetschedule WHERE cid='$cid'";
	$csresult=getdata($csquery);
	return $csresult;
}
//data retrieve from clinicsetschedule
?>