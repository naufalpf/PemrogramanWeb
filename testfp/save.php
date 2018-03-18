<?php
	//INSERT INTO `buku` (`id`, `namabuku`, `penulis`, `review`, `kategori`, `gambar`, `buku`) VALUES (NULL, 'd', 'dd', 'd', 'd', 'default.jpg', 'd');
	include('connect.php');
	session_start();
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

   	$tipe2_file = $_FILES['ebook']['type'];
   	//echo $tipe2_file;
   	$t=time();
   	//echo $t;
   	$rand=rand(10,1000);
   	$x=$t.$rand;
   	// echo "<br>".$rand;
   	// echo "<br>".$x;
   	if($tipe2_file=="application/pdf"||$tipe2_file=="application/vnd.openxmlformats-officedocument.presentationml.presentation"||$tipe2_file=="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
   	{
     	$nama_fil2 = $_FILES['ebook']['name'];
     	$nama_fil2 = $x.$nama_fil2;
  		$path = "buku/".$nama_fil2;
  		$tmp_file = $_FILES['ebook']['tmp_name'];
     	echo $nama_fil2;
   		if(move_uploaded_file($tmp_file, $path))
		  {
        mysqli_query($conn,"INSERT INTO buku VALUES (NULL, '$usr', '$namabuku', '$penulis', '$review', '$kategori', '$nama_fil2')" );
		  	//mysqli_query($conn,"INSERT INTO buku VALUES(2,'$usr','$namabuku','$penulis','$review','$kategori','$nama_fil2')");
				echo "berhasil";
				echo "<br>";
		  	header("location: index2.php");
				//echo "<meta http-equiv='refresh' content='1 url=home2.php'>";
		  }
		  else
		  {
		   	//echo "Maaf, Gambar gagal untuk diupload.";
		   	//session_start();
        //$_SESSION['msg']="fail";
        header("location: buku.php");
		  }
   		//echo "sukses";
   	}
   	else
   	{
   		echo "failed";
   		header("location: buku.php");
   	}
   	// if($nama_fil=="")
   	// {

   	// }
?>