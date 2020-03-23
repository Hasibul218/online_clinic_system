<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="dummy";

	//execute query into database
	function execute ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		echo "Insert into database";
	}
	//getdata from database
	function getdata ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$data=array();    //normal array
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($rows=mysqli_fetch_assoc($result)) {
				$entity=array();//associative array
				foreach ($row as $key => $value) {
					$entity[$key]=$row[$key];
				}
				$data[]=$entity;
			}
		}
		mysqli_close($conn);
		return $data;//return associative array
	}
	
?>