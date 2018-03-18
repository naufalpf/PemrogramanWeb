 
 
      
      <?php
session_start();
if(!isset($_SESSION['sudahLogin']))
	{
		header("menu.php");
	}
?>

<?php
    $kon=isset($_GET['submit']) ? $_GET['submit']:'';

    if($kon!="") 
    {

  
    require ("connect.php");
    $hasil=mysqli_query($con,"SELECT * FROM user where username_='".$_POST['i_username']."' AND  password_='".$_POST['i_password']."'   ") ;
    $fetch=mysqli_fetch_array($hasil);
    if ($fetch['username_']!=""){$_SESSION['sudahLogin']="Done";
    header("location:menu.php");}
    else{
    echo mysql_error();
    }
    mysqli_close($con);


  }



?>

<!DOCTYPE html>
<html>
<head>
     <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Fodensi e-Learning</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>    
    <!-- Default Theme css file -->
    <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="style.css" type="text/css">
<title>Login</title>
  </head>

</head>
<style>
body{
  background: url(https://newevolutiondesigns.com/images/freebies/city-wallpaper-18.jpg) no-repeat fixed;
}
</style>
<body>
    

<div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Fodensi<span> e-Library</span></div>
    </div>
    <br>
    <div class="login">
     <form action="?submit=1" method="post" name="form1" id="form1">
        <input type="text" name="i_username" id="i_username" placeholder="username"><br>
        <input type="password" name="i_password" id="i_password" placeholder="password"><br>
        <input type="submit" value="Masuk" name="Masuk" id="i_Masuk">
<input type="button" value="Registration" name="regis" id="i_regis " onclick="location.href='regis.php'">
        <!--<input type="submit" name="Masuk" id="i_masuk" value="Masuk">-->
    </div>

</form>

</html>