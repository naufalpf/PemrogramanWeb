<?php
	include "test.php";
	session_start();
	session_destroy();
	//echo "Terima kasih, Anda Berhasil Logout";
	header("location: index.php");
?>