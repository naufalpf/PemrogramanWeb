<?php
	//echo $id_buku;
	session_start();
	//echo $_SESSION['email'];
	if($_SESSION['email']=='imam@its.ac.id')
	{
		include 'connect.php';
		$b=$_GET['id_buku'];
		$namabuku = mysqli_real_escape_string($conn, $_POST['nama_buku']);
	    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
	    $review = mysqli_real_escape_string($conn, $_POST['review']);
	    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
	   	$usr=$_SESSION['email'];
	   	//echo $usr;
	   	$namabuku = stripslashes($namabuku);
	   	$penulis = stripslashes($penulis);
	   	$review = stripslashes($review);
	   	$kategori = stripslashes($kategori);
		//echo $b;
		mysqli_query($conn,"UPDATE buku SET namabuku='$namabuku',penulis='$penulis',review='$review',kategori='$kategori' where id='" . $b . "' ");
		//echo 'cek';
	}
	header("location: index3.php");
?>