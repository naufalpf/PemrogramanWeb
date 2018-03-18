<?php
	 $server 	= "localhost";
	 $username	= "yzjvincb_web2017";
	 $password	= "luar.biasa";
	 $database	= "yzjvincb_5115100057";

	//$server 	= "localhost";
//	$username	= "root";
//	$password	= "";
//	$database	= "yzjvincb_5115100057";

	$conn = mysqli_connect($server, $username, $password, $database);

	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//echo "sukses";
?>