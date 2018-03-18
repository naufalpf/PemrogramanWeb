<?php 
require ("connect.php");
$nama = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$sinopsis= $_POST['sinopsis'];
$link= $_POST['link'];
$category= $_POST['category'];
$cekuser = mysqli_query($con,"SELECT 1 FROM buku where nama_buku='$nama'");
$fetch   = mysqli_fetch_row($cekuser);

if($fetch[0]==1)
    echo 'Buku sudah ada';

  else 
  {

    require("connect.php");
    $sql="INSERT INTO buku ".
       "(nama_buku,penulis, sinopsis, link,category) ".
       "VALUES('$nama','$penulis','$sinopsis','$link','$category')";
    $query= mysqli_query($con, $sql);

    echo "TERIMAKASIH SUDAH MENAMBAH DAFTAR BUKU ";
    header("location:menu.php");

  }
  mysqli_close($con);


?>