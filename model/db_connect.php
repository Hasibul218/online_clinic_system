<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="dummy";

	//insert into database
	function insertdb ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		echo "Insert into database";
	}
	//update into database
	function updatedb ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		echo "update into database";
	}

	//delete into database
	function deletedb ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		echo "delete into database";
	}

	//getdata from database
	function getdata ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		$element;
		if($rows=mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) 
			{
				$element[]= $row;
			}
			return $element;
		}
	}
	
?>