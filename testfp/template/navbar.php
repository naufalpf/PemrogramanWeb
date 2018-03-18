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
               <li><a href="user-login.php">Login </a></li>  
            </ul>   
           <?php
  if (isset($_SESSION['userlogin']))
  {
    $userlogin = $_SESSION['userlogin'];
?>
          <a href="user-logout.php">
            <button type="button" class="btn btn-default navbar-btn navbar-right">
              Sign out
            </button>
          </a>
          <p class="navbar-text">Signed in as <a href="#" class="navbar-link"><?php echo $userlogin ?></a></p> 
<?php 
  } else
  {
?>
    
          <a href="user-register.php">
            <button type="button" class="btn btn-default navbar-btn navbar-left">
              Sign up
            </button>
          </a>
<?php
  }
?>
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->