<?php
	require ("connect.php");

	$hasil=mysqli_query($con,"SELECT * FROM buku where category='religion'") ;
	if (false === $hasil) 
    echo mysql_error();
		$i=0;
	while ($row = mysqli_fetch_array($hasil)) {

			$i++;
			$id[$i] = $row['id_buku'];
			$nama_buku[$i] = $row['nama_buku'];
			$penulis[$i] = $row['penulis'];
			$sinopsis[$i] = $row['sinopsis'];
			$link[$i]= $row['link'];
			
	}
	mysqli_close($con);


?>


<!DOCTYPE html>
<html lang="en">
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
  </head>
  <body> 
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">Fodensi<span> e-Library</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#team">Team</a></li> 
                <li><a href="#testimonial">Testimonials</a></li> 
              <li><a href="#contactFeature">Contacts</a></li>    
             
                <li><a href="login.php">Login</a><span class="sep">&nbsp;</span></li>
            <li><a href="allbooks.php">All Books</a><span class="sep">&nbsp;</span></li>
            </ul>   
          
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

<table>
  <tr>
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Sinopsis</th>
    <th></th>
  </tr>

 <?php for ($i=1; $i<=sizeof($id); $i++) {?>
  <tr>
    <td><?php echo $nama_buku[$i] ?></td>
    <td><?php echo $penulis[$i] ?></td>
    <td><?php echo $sinopsis[$i] ?></td>
    <td> <button onclick="location.href='<?php echo $link[$i] ?>'">
Download</button>    
  </tr>
<?php }?>
  
</table>


 	

<script>
	$('.s1').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

</body>




<html> 