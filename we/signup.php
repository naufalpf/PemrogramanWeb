<?php
	include 'connect.php';
    if (isset($_POST['Masuk'])) 
    {
    	//echo $_POST['email'];
    	$email = mysqli_real_escape_string($conn, $_POST['email']);
    	$nama = mysqli_real_escape_string($conn, $_POST['nama']);
    	$username = mysqli_real_escape_string($conn, $_POST['username']);
     	$password = mysqli_real_escape_string($conn, $_POST['password']);

     	$email = stripslashes($email);
     	$username = stripslashes($username);
     	$password = stripslashes($password);
     	$nama = stripslashes($nama);
     	//echo $username;
    	//echo $email;
     	//echo $password;
     	//echo $nama;
     	$ambilDataSql=mysqli_query($conn,"SELECT * FROM user WHERE user_name = '$username'");
        $row=mysqli_num_rows($ambilDataSql);
        $ambilDataSql2=mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
        $row2=mysqli_num_rows($ambilDataSql2);
        if($row==1||$row2==1)
        {
        	session_start();
            $_SESSION['msg2']="fail";
            header("location: register.php");
        }
     	else
     	{
     		session_destroy();
            session_unset();
	     	$ambilDataSql=mysqli_query($conn,"INSERT INTO user VALUES('$email','$username','$nama','$password')");
	     	header("location: index.php");
	    }
    }
?>