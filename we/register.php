<?php
  session_start();
  if(isset($_SESSION['email']))
  {
    header("location:index2.php");
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Register</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
         <link href="style1.css" rel="stylesheet">
		    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="style.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="style.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='style.css'>    
    <!-- Default Theme css file -->
    <link id="orginal" href="style.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>Register ke Fodensi e-Learning</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="signup.php" method="post"> 
                                <h1>Sign Up</h1> 
                                
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Email anda</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="ex: imam@its.ac.id"/> 
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" >Username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="ex: yzvincb_web2017" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" >Nama Anda</label>
                                    <input id="nama" name="nama" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder=""/>
                                </p>
                                <?php
                                    if(isset($_SESSION['msg']))
                                    {
                                      if($_SESSION['msg2']=="fail")
                                      {
                                        //echo "<strong>"."jancok"."</strong>";
                                        echo '<div class="alert alert-danger" role="alert">'.'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">'.'</span>'.'<span class="sr-only">'.'Error:'.'</span>'.'Email atau username sudah dipakai'.'</div>';

                                      }
                                    }
                                ?>
                                <button type="submit" value="Masuk" id="Masuk" name="Masuk" class="btn btn-primary btn-block">Sign up</button>
                                
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                               
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Email anda</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="ex: imam@its.ac.id"/> 
                                </p>
                                 <p> 
                                    <label for="usernamesignup" class="uname" >Username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="ex: yzvincb_web2017" />
                                </p>
                                 <p> 
                                    <label for="usernamesignup" class="uname" >Nama Anda</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder=""/>
                                </p>
                                <?php
                                    if(isset($_SESSION['msg']))
                                    {
                                      if($_SESSION['msg2']=="fail")
                                      {
                                        //echo "<strong>"."jancok"."</strong>";
                                        echo '<div class="alert alert-danger" role="alert">'.'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">'.'</span>'.'<span class="sr-only">'.'Error:'.'</span>'.'Email atau username sudah dipakai'.'</div>';

                                      }
                                    }
                                ?>
                            
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Sudang bergabung ?
									<a href="#tologin" class="to_register"> Sign in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>