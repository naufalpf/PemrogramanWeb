<?php 
require ("connect.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$cekuser = mysqli_query($con,"SELECT 1 FROM user WHERE username_= '$username' AND password_='$pass' ");
$fetch   = mysqli_fetch_row($cekuser);

if($fetch[0]==1)
    echo 'Username sudah ada';

  else 
  {

    require("connect.php");
    $sql="INSERT INTO user ".
       "(nama_user,username_, password_, email_user) ".
       "VALUES('$nama','$username','$pass','$email')";
    $query= mysqli_query($con, $sql);

    header("location:login.php");
    

  }
  mysqli_close($con);


?>