<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) 
{ header('location: home.php'); }    
if (!isset($_SESSION['new_email'])) 
{ header('location: index.php'); }  



?>




<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SIR INFOTECK PVT.LTD</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts 
<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sonsie+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">-->
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet">
 
<!-- //font-awesome-icons -->
</head>
<body>
<!-- banner -->
  <div class="banner1">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="index.php"><span>SIR</span>Infoteck</a></h1>
        </div>
        <br>
        <br>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav class="linkEffects cl-effect-1">
            <ul class="nav navbar-nav w3-agileits_home_nav">
              <li class="active">
                <a href="index.php">home</a>
              </li>
              <li>
                <a class="scroll" href="#about">about</a>
              </li>
              <li>
                <a class="scroll" href="#projects">projects</a>
              </li>
              <li>
                <a class="scroll" href="#team">team</a>
              </li>
              <li>
                <a class="scroll" href="#testimonials">testimonials</a>
              </li>
              <li>
                <a class="scroll" href="#contact">contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </nav>
      
    </div>
  </div>
<!-- //banner -->
<!--THIS IS CONTAINER DIV TO CALL DATA-->

<br><br>
<div>

        <div class="container" >
            <div class="row">
                
                
              <div class="col-sm-4 columns">
                    <h2>SIGN UP</h2>
              <form method="post" action="signup_script.php" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="text"  class="form-control" name="name"  placeholder="Name" required>
              </div>   
              <div class="form-group">
                  <input type="text"  class="form-control" name="fname"  placeholder="Father's Name" required>
              </div> 
              <div class="form-group">
                    <input type="text"  class="form-control" name="phone" placeholder="10 digit contact number" required>
              </div>
              <div class="form-group">
                    <input type="text"  class="form-control" name="address" placeholder="Address" required>
              </div>
              <div class="form-group">
                    <input type="text"  class="form-control"  minlength=12 maxlength=12 placeholder="Enter Aadhar card Number" name="anum" required>
              </div> 
              <div class="form-group">
                    <input type="text"  class="form-control" name="qual" placeholder="Qualification" required>
              </div>
              <div  class="form-group">
                <label>Submit a copy of your degrees</label>    <!-- file upload -->
                  <input type="file" name="degree"><br>
              </div>
              <div  class="form-group">
                <label>Submit a copy of Permission certificate</label>    <!-- file upload -->
                  <input type="file" name="certificate"><br>
              </div>

             <div class="form-group">
                 <input type="password" class="form-control" minlength=8 maxlength=15 placeholder="Enter Password" name="psw" id="password" required>
              </div>
              <div class="form-group">
                 <input type="password" class="form-control" minlength=8 maxlength=15 placeholder="Confirm Password" name="psw-repeat" id="confirm_password" required>
              </div>
              
                                    <div style="color:#f44242; font-style: italic"><?php
                                    if (isset($_GET['email_error'])){
                                        echo $_GET['email_error'];
                                        unset($_GET['email_error']);
                                    }
                                    
                                   
                                    ?></div>
              
                  <button class="btn btn-primary" style="float: right;">Create Account</button>
             </form>
        
             </div>
            
            </div>
                
           
        </div>
</div>


<div class="contact-w3-agileits w3ls-section jarallax" id="contact">
    <div class="container">
      <h3 class="h3-w3l text-center">Contact Us</h3>
      <div class="col-md-5 col-sm-5 col-xs-12 contact-left-w3ls">       
        <div class="visit">
          <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
            <h4>Visit us</h4>
            <p>2115,NIZAMPUR ROAD,PARNALA,BAHADURGARH
            ,HARYANA</p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="mail">
          <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
            <h4>Mail us</h4>
            <p><a href="SIRINFOTECK.ITGMAIL.COM">SIRinfoteck.it@gmail.com</a></p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="call">
          <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
            <h4>Call us</h4>
            <p>7015375221,8901228949</p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="visit">
          <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
            <h4>Business hours</h4>
            <p>Mon-Sat 09:00 AM - 07:00PM</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12 contact-right-w3l">
       <form action="feedback.php" method="POST">
          <input type="text"  class="name" name="name" placeholder="First Name" required="">
          <input type="text"  class="name" name="name" placeholder="Last Name" required="">
          <input type="text"  class="name" name="name" placeholder="Email" required="">
          <input type="text"  class="name" name="name" placeholder="Subject" required="">
          <textarea placeholder="Your Message" required=""></textarea>
          <input type="submit" name="fsubmit" >
        </form>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--//light-box-files -->
    <script type="text/javascript">
    $(function() {
      $('.gallery a').Chocolat();
    });
    </script>
<!-- //js -->

<!-- testimonials -->
  <!-- required-js-files-->
              <link href="css/owl.carousel.css" rel="stylesheet">
                  <script src="js/owl.carousel.js"></script>
                      <script>
                  $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                      items : 1,
                      lazyLoad : true,
                      autoPlay : false,
                      navigation : true,
                      navigationText : true,
                      pagination : true,
                    });
                  });
                  </script>
                 <!--//required-js-files-->


<!--map-->
<!--<div class="agileits_w3layouts-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6997273.672218193!2d-104.56936882173544!3d31.09200792512632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C+USA!5e0!3m2!1sen!2sin!4v1490082267659"  style="border:0" allowfullscreen></iframe>
</div>-->
<!--map-->
<!-- //Tooltip -->
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
  /* init Jarallax */
  $('.jarallax').jarallax({
    speed: 0.5,
    imgWidth: 1366,
    imgHeight: 768
  })
</script>
<!-- here starts scrolling icon -->
    <script type="text/javascript">
      $(document).ready(function() {
        /*
          var defaults = {
          containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear' 
          };
        */
                    
        $().UItoTop({ easingType: 'easeOutQuart' });
                  
        });
    </script>
    
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
    <!-- /ends-smoth-scrolling -->
  <!-- //here ends scrolling icon -->
<!-- footer -->
<div class="agileinfo-copyright text-center">
    <p>© 2018 SIR INFOTECK PVT.LTD. All rights reserved | Designed by SIR INFOTECK TEAM</p>
</div>
<!-- //footer -->
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>



</body>
</html>

