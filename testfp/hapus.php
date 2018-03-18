<?php
	//echo $id_buku;
	session_start();
	if($_SESSION['email']=='imam@its.ac.id')
	{
		include 'connect.php';
		$b=$_GET['id_buku'];
		//echo $b;
		mysqli_query($conn,"DELETE FROM buku WHERE id='" . $b . "' ");
		//echo 'cek';
	}
	header("location: index3.php");
?>