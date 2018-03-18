<?php
  session_start();
  if(empty($_SESSION['email']))
  {
    header("location:index.php");
  }
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Fodensi e-Library</title>

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
                <li><a href="buku.php">Tambah Buku</a></li> 
                 <li><a href="edu.php">List Buku</a><span class="sep">&nbsp;</span></li>     
             
                <!-- <li><a href="#subscribe">Login</a><span class="sep">&nbsp;</span></li> -->
              
              <li><a><?php echo "Hai ";echo $_SESSION['nama'];?></a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
            </ul>
        </li>
           
            </ul>   
          
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="img/full-slide1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Selamat datang di Fodensi e-Learning</h2>
                <p>Kami ialah grup yang dibangun oleh pak Naufal untuk memfasilitasi pendidikan</p>
                <a href="#" class="slider_btn">Apakah Kami?</a>              
              </div>
            </li>

            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="img/full-slide2.jpg" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Nikmatilah sistem pembelajaran yang interaktif</h2>
                <p>Diajarkan oleh dosen yang bersertifikat Internasional dan ahli di bidangnya</p>
                <a href="#" class="slider_btn">Apa keunggulan kami?</a>
              </div>
            </li>

            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="img/full-slide3.jpg" alt="img">
              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Sir Naufal Pranasetyo Fodensi</h2>
                <p>The founder of Fodensi e-Learning Website</p>
                <a href="#" class="slider_btn">Siapakah saya?</a>                 
              </div>
            </li>
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">About Us</h2>
                <p>Inilah karya yang insyaAllah bermanfaat yang dibuat oleh pak Fodensi beserta teman-temannya. Semoga web ini berkah.</p>
              </div>

              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 <span class="fa fa-check-square-o"></span>A
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                            a </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #2 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                 <span class="fa fa-check-square-o"></span>B
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                           b</div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #3 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="fa fa-check-square-o"></span>C
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                             c</div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #4 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                <span class="fa fa-check-square-o"></span>24Hours Support
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                            d</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                          
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                          
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                           
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                           
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <a href="#"> <img src="img/feature_img1.jpg" alt="img"></a>                           
                        </div>
                      </div>
                      <!-- END FEATURED SLIDER -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
      
    </section>
    <!--=========== END ABOUT SECTION ================-->

   

    <!--=========== BEGAIN TEAM SECTION ================-->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN ABOUT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Our Team</h2>            
            </div>
            <div class="team_area">
              <!-- BEGAIN TEAM SLIDER -->
              <div class="team_slider">  
                <!-- BEGAIN SINGLE TEAM SLIDE#1 -->              
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Naufal P. Fodensi</h5>
                    <span>Founder</span>                        
                    <p>Pencetus ide</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#2 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Iramaya Fodensi</h5>
                    <span>Manager</span>                        
                    <p>Partner pak Naufal</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Dicky Kaisar</h5>
                    <span>Developer</span>                        
                    <p>Hmm</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#4 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Tim Medfo HMTC</h5>
                    <span>Designer</span>                        
                    <p>Petugas front-end</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#5 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Djohan Prabowo</h5>
                    <span>Programmer</span>                        
                    <p>Jago</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#6 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Adit Cahyo</h5>
                    <span>Web Designer</span>                        
                    <p>Semangat</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#7 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5>Jono</h5>
                    <span>Marketing Head</span>                        
                    <p>Pemasaran</p>
                    <div class="team_social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>                              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->


   


    <!--=========== BEGAIN TESTIMONIAL SECTION ================-->
    <section id="testimonial">
      <div class="container"> 
        <div class="row">
          <div class=" col-lg-7 col-md-7 col-sm-6">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Satisfied Customers</h2>
              <p>Jagolah yang buat, semoga bermanfaat ya. Sukses terus pak Naufal </p>
            </div>
          </div>
          <div class=" col-lg-5 col-md-5 col-sm-6">
            <div class="testimonial_customer">
              <!-- BEGAIN TESTIMONIAL SLIDER -->
              <ul class="testimonial_slider">
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="img/team-2.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Rezky</h4>
                      <span>CEO</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p>Maju terus pak</p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="img/team-2.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Azka Yasin</h4>
                      <span>CEO</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p>Rekrut saya pak</p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#3 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="img/team-2.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Alya Lucu</h4>
                      <span>Manager</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p>webnya lucu kayak aku</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>           
        </div>
      </div>
    </section>
    <!--=========== END TESTIMONIAL SECTION ================-->


   

    <!--=========== BEGAIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Contact Us</h2>
              <p>Kami menerima segala kritik dan saran</p>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGAIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGAIN CONTACT FORM -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="contact_form">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>

                <form>
                  <input class="form-control" type="text" placeholder="Name">
                  <input class="form-control" type="email" placeholder="Email">
                  <input class="form-control" type="text" placeholder="Subject">
                  <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                   <input class="submit_btn" type="submit" value="Send">  
                </form>
              </div>
            </div>
            <!-- BEGAIN CONTACT MAP -->
            <div class="col-lg-7 col-md-7 col-sm-7">
              <div class="contact_map">
              <!-- BEGAIN GOOGLE MAP -->
               <div id="map_canvas"><iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7291886144512!2d106.91736831463848!3d-6.299272495440892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992a96d1f1ced%3A0xf3ed24095f17f4ca!2sJl.+Bunga+Matahari+XVI+Blok+P+No.6%2C+Jatirahayu%2C+Pondokmelati%2C+Kota+Bks%2C+Jawa+Barat+17414%2C+Indonesia!5e0!3m2!1sen!2sid!4v1489046761056" width="95%" height="300" style="border:0" allowfullscreen></iframe></div>
              </div>
            </div>           
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      <!-- SKILLS COUNTER OVERLAY -->
      <div class="slider_overlay"></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Call Us</h4>
                <p>087-8787-191-86</p>                
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Email Address</h4>
                <p>naufalpf@fodensi.com</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Office Location</h4>
                <p>Jl. Jalan ke Pantai</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Working Hours</h4>
                <p>Monday-Friday 9.00-21.00</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->

    <!--=========== BEGAIN SUBSCRIBE SECTION ================-->
    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START SUBSCRIBE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Subscribe Us</h2>
              <p>Ayo rek bantu berlangganan di website ini hehe</p>
            </div>
          
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SUBSCRIBE SECTION ================-->

     <!--=========== BEGAIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
				<!--=========== Designed By WpFreeware Team ================-->
               <p>Copyright &copy; 2017 <a href="http://www.fodensi.kuliahweb.com">Sir Fodensi</a>. All Rights Reserved</p>
			   <!--=========== Designed By WpFreeware Team ================-->
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->

     <!-- Javascript Files
     ================================================== -->
  
     <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/elastic_grid.min.js"></script>
    <script src="js/portfolio_slider.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
  </body>
</html>