<?php
	$dbhost="localhost";
	$dbuser = "yzjvincb_allquiz";
	$dbpass = "R+h$(OmGACv5";
	$dbname = "yzjvincb_allquiz";
	
	$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die("DB error");	
	}
?>