  
<?php 
require_once('code/common.php');
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>VedicShadi</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header" style="background-color:green;">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                  +91 7027481102 , 7027471102
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@vedicshadi.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="register.php" class="aa-register">Register</a>

<?php
if(isset($_SESSION['userid'])){
echo '<a href="code/logout.php" class="aa-login">Logout</a>';

}

else{

echo ' <a href="signin.php" class="aa-login">Login</a>';
}
?>

                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- Start menu section -->
  <section id="aa-menu-area" style="background-color:black;margin-top:-2px;">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
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
          <!-- Text based logo -->
         <a href="index.php"> <img src="img/ylg.png" alt="img" height="50px;width:100px;"></span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li ><a href="index.php">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="about-us.php">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="">Get In Touch</a></li>                                            
              </ul>
            </li>
                       
                       <?php 
                       if(isset($_SESSION['userid'])){
                       ?>               
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="view-profile.php">User Section <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">   
               <li><a href="view-profile.php">View Profile</a></li>             
                <li><a href="complete-profile.php">Edit Profile</a></li>
                                                       
              </ul>
            </li> 
<?php } ?>

    <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="about-us.php">Jobs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="about-us.php">Part Time</a></li>
                <li><a href="">Full TIme</a></li>                                            
              </ul>
            </li>


            <li><a href="contact.php">CONTACT</a></li>
         <!--   <li><a href="404.php">404 PAGE</a></li> -->
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->