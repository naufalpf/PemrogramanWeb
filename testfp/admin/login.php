<?php
	session_start();
	$act=0;
	if(isset($_GET['act']))
	{
		$act=1;
	}
	if($act==1)
	{
		if($_POST['i_username']=="dosen" && $_POST['i_password'] == "dosen" || $_POST['i_username']=="bonar" && $_POST['i_password'] == "admin")
		{
			$_SESSION['login']=1;
		}
		else
		{
			echo '<h2>Username atau password anda salah!</h2>';
		}
	}
	if(isset($_SESSION['login']))
	  header('Location:gamelist.php');
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <title>Admin Login Database</title>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<title>LOGIN</title>
<header>
<div class="bodyps">
<h1> Login Section</h1>
<form id="form1" name="form1" method="post" action="?act=1">
<p>Username	 : 
  <input name="i_username" type="text" id="i_username" required/>
</p>
<label for="i_username"></label>
<p>Password 	&nbsp: 
  <input type="password" name="i_password" id="i_password" required/>
</p>
  <input type="submit" name="submit" id="submit" value="Login" />
</form>
</div>
<header>
</body>
</html>
