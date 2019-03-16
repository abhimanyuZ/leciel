<?php
       session_start();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Le Ciel</title>
        <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
        <meta name="language" content="english"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="author" content="Leciel Web Team"/>
        <meta name="copyright" content="NIT Puducherry"/>
        <meta http-equiv="expires" content="43200"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="coverage" content="Worldwide" />
        <meta name="allow-search" content="yes" />
        <meta name="robots" content="index, follow"/>
        <meta name="rating" content="safe for kids"/>
        <meta name="googlebot" content="index, follow"/>
        <meta name="yahooseeker" content="index, follow"/>
        <meta name="msnbot" content="index, follow" />
        <meta name="Rating" content="General" />
        <meta name="allow-search" content="yes" />
        <meta name="revisit-after" content="daily" />
        <meta name="distribution" content="global"/>
        <meta name="description" content="Le Ciel is the second sublime inter-college cultural fest organized by NIT Puducherry. This astounding event is exquisite fuse of arts, music, dance, literature, pro shows and fun events on 28th and 29th September 2018. This time we don’t walk or run. We fly, because our theme for this edition is Flight. This stage lets you exhibit your knack, dexterity, ingenuity and squeeze out your views and ideas through various events. Unveil yourself to the world and fly till the sky, since this is the Le Ciel.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel='stylesheet' href='https://rawgit.com/AllThingsSmitty/8fb1b38c77ddd4357287f242f07c7797/raw/80da7234eaa5a4bb7e27c06c41dd0717ff4f1c93/system-fonts.css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <style>

    /*start*/
    #firstpic{
      background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      min-height: 100vh;
      height: 680px;
    }

    /*ForMusic*/
    #musicpic{
      background-image: url(img/music.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      min-height: 100vh;
      height: 680px;
    }
    #musicdec{
        width: 60px;
    	height: 3px;
    	margin-top: 20px;
    	margin-bottom: 30px;
    	background-color: #923d28;
    }
    #musicright{
      padding: 100px 45px;
    	background-color: #923d28;
    	text-align: center;
    	min-height: 100vh;
    	height: 680px;
    }
    /*ForArts*/
    #artpic{

    	background-image: url(img/art1.png);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center center;
    	min-height: 100vh;
    	height: 680px;
    }
    #artdec{
      width: 60px;
      height: 3px;
      margin-top: 20px;
      margin-bottom: 30px;
      background-color: #91174f;
    }
    #artright{
      padding: 100px 45px;
      background-color:#91174f;
      text-align: center;
      min-height: 100vh;
      height: 680px;
    }
    /*forLit*/
    #litpic{

    	background-image: url(img/literature.jpg);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center center;
    	min-height: 100vh;
    	height: 680px;
    }
    #litdec{
      width: 60px;
    	height: 3px;
    	margin-top: 20px;
    	margin-bottom: 30px;
    	background-color: #112e38;
    }
    #litright{
      padding: 100px 45px;
    	background-color: #112e38;
    	text-align: center;
    	min-height: 100vh;
    	height: 680px;
    }
    /*Fortheartrical*/
    #thpic{

    	background-image: url(img/theatrical.jpg);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center center;
    	min-height: 100vh;
    	height: 680px;
    }
    #thdec{
      width: 60px;
    	height: 3px;
    	margin-top: 20px;
    	margin-bottom: 30px;
    	background-color: #3e0b08;
    }
    #thright{
      padding: 100px 45px;
    	background-color: #3e0b08;
    	text-align: center;
    	min-height: 100vh;
    	height: 680px;
    }
    /*ForOnline*/
    #onlinepic{

    	background-image: url(img/online.jpg);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center center;
    	min-height: 100vh;
    	height: 680px;
    }
    #onlinedec{
      width: 60px;
    	height: 3px;
    	margin-top: 20px;
    	margin-bottom: 30px;
    	background-color: #b6b6ad;
    }
    #onlineright{
      padding: 100px 45px;
    	background-color: #090907;
    	text-align: center;
    	min-height: 100vh;
    	height: 680px;
    }
    #hpic{

    	background-image: url(img/himage.jpg);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center center;
    	min-height: 100vh;
    	height: 680px;
    }
    #hdec{
      width: 60px;
    	height: 3px;
    	margin-top: 20px;
    	margin-bottom: 30px;
    	background-color: #ac003a
    }
    #hright{
      padding: 100px 45px;
    	background-color: #ac003a;
    	text-align: center;
    	min-height: 100vh;
    	height: 680px;
    }





    </style>




<body>

  <section class="banner" id="top">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="left-banner-content" id="firstpic">


                    <div id='stars2'></div>
                    <div id='stars3'></div>
                    <div class="container">



                    <button href="#" class="hamburger open-panel nav-toggle">
                        <span class="screen-reader-text">Menu</span>
                    </button>


	<nav role="navigation" class="menu">

		<a href="#" class="logotype">Le<span>&nbspCiel</span></a>

		<div class="overflow-container">

			<ul class="menu-dropdown">
      <br>

		<!--	<li	href="#" data-toggle="modal" data-target="#myModal"><a href="#">Login/Signup</a></li>
      <br>
      <li href="#" data-toggle="modal" data-target="#myModal2"><a href="#">College Ambassador<br>Login/Signup</a></li>


			</ul>

		</div>

	</nav>-->

  <?php
  //require './php/includes/common.php';

   if(!isset($_SESSION['lcid']) && !isset($_SESSION['amb_id']) )
   {
     echo '<li href="#" data-toggle="modal" data-target="#myModal"><a href="#">Login/Signup</a></li><br><li href="#" data-toggle="modal" data-target="#myModal2"><a href="#">College Ambassador<br>Login/Signup</a></li>';
   }
   else if(isset($_SESSION['lcid']))
   {
     echo '<li href="#"><a href="./php/profile.php">Profile</a></li><br>';
   }
   else if(isset($_SESSION['amb_id']))
   {
     echo '<li href="#"><a href="./php/amb_details/amb_profile.php">Profile</a></li><br>';
   }

  ?>
 <?php

  if(isset($_SESSION['lcid']))
   {
     echo '<li href=""><a href="./php/logout.php">Logout</a></li><br>';
   }
   else if(isset($_SESSION['amb_id']))
   {
     echo '<li href=""><a href="./php/amb_details/logout.php">Logout</a></li><br>';
   }

 ?>
<li><a href="proshow/index.html">Pro Show</a></li>;

 </ul>

</div>

</nav>


<!--Login-->


      <!-- Modal1 -->
      <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

              <div class="bs-example bs-example-tabs">
                  <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>

                  </ul>
              </div>
            <div class="modal-body">
              <div id="myTabContent" class="tab-content">

              <div class="tab-pane fade active in" id="signin">
                <form class="form-horizontal" id="ajax-form">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->

               <div class="group">
<input required="" class="input" name="email" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>


            <!-- Password input-->
            <div class="group">
<input required="" class="input" name="password" type="password" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>




            <!-- Button -->

            </fieldset>
            </form>
            <div id="incorrect" ></div>
             <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-primary btn-block ajax-button
                ">Log In</button>
              </div>
            </div>
        </div>


        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" action="php/signup_script.php" method="POST">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="group">
<input required="" class="input" name="name" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Full Name</label></div>

    <div class="group">
<input required=""  name="college" class="input" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
<label class="label" for="date">College Name</label></div>



            <!-- Password input-->
            <div class="group">
<input required="" class="input" name="email" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email</label></div>

            <!-- Text input-->
            <div class="group">
<input required="" class="input" name="password1" type="password" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label></div>
              <em>minimum 6 characters</em>

              <div class="group2">
<input required="" class="input" name="contact" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Phone No</label></div>



            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade bs-modal-sm log-sign" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
               <li id="tab1" class=" active tab-style login-shadow "><a href="#signin2" data-toggle="tab">Log In</a></li>
               <li id="tab2" class=" tab-style "><a href="#signup2" data-toggle="tab">Sign Up</a></li>
            </ul>
         </div>
         <div class="modal-body">
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade active in" id="signin2">
                  <form class="form-horizontal" method="POST" id="amb-form">
                     <fieldset>
                        <!-- Sign In Form -->
                        <!-- Text input-->
                        <div class="group">
                           <input required="" class="input" name="email" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Email address</label>
                        </div>
                        <!-- Password input-->
                        <div class="group">
                           <input required="" class="input"  name="password" type="password" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Password</label>
                        </div>
                        <em>minimum 6 characters</em>
                        <!-- Button -->

                     </fieldset>
                  </form>
                  <div id="incorrect2" ></div>
                   <div class="control-group">
                           <label class="control-label" for="signin"></label>
                           <div class="controls">
                              <button id="signin" name="signin" class="btn btn-primary  amb_button btn-block">Log In</button>
                           </div>
                        </div>
               </div>
               <div class="tab-pane fade" id="signup2">
                  <form class="form-horizontal" action="./php/amb_details/signup_script.php" method="POST">
                     <fieldset>
                        <!-- Sign Up Form -->
                        <!-- Text input-->
                        <div class="group">
                           <input required=""  name="name" class="input" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Full Name</label>
                        </div>
                        <!-- Text input-->
                        <div class="group">
                           <input required="" class="input"  name="college" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">College Name</label>
                        </div>
                        <!-- Password input-->
                        <div class="group">
                           <input required="" class="input"  name="email" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Email</label>
                        </div>
                        <!-- Text input-->
                        <div class="group">
                           <input required="" class="input"  name="password2" type="password" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Password</label>
                        </div>
                        <em>minimum 6 characters</em>
                        <div class="group2">
                           <input required="" class="input"  name="contact" type="text" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
                           <label class="label" for="date">Phone</label>
                        </div>
                        <!-- Button -->
                        <div class="control-group">
                           <label class="control-label" for="confirmsignup"></label>
                           <div class="controls">
                              <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
         <!--<div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </center>
            </div>-->
      </div>
   </div>
</div>





                    <div class="myHome">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 459.2 275.5" style="enable-background:new 0 0 459.2 275.5;" xml:space="preserve">
                   <style type="text/css">
                      .st0{fill:white;stroke:#ffff;stroke-width:1;stroke-miterlimit:10;}
                   </style>
                   <g>
                   	<path class="st0" d="M12,178.6c-1.2-1-2-2.1-2.3-3.4c-0.4-1.3-0.4-2.4-0.1-3.4c0.2-1.1,0.8-1.9,1.6-2.5c0.8-0.6,1.9-0.9,3.2-0.8
                   		l0.9-0.5c0-0.1,0-0.1,0.1-0.1c3.3-6.5,7-14.1,11-22.9c4.1-8.8,8-18.1,12-27.9c3.9-9.8,7.7-19.7,11.2-29.8
                   		c3.5-10.1,6.5-19.7,8.9-28.8c2.4-9.1,4.1-17.3,5-24.8c0.9-7.4,0.8-13.3-0.4-17.7L63,14.9c0-0.7,0.5-0.9,1.6-0.8
                   		c1.1,0.2,2.5,0.7,4.1,1.5c1.6,0.8,3.5,1.8,5.5,3.1c2,1.3,3.9,2.5,5.6,3.8c1.7,1.3,3.2,2.6,4.4,3.8c1.2,1.2,1.9,2.2,2.1,3
                   		c0.2,3.6-0.4,8.6-1.7,14.9c-1.3,6.3-3.3,13.5-5.8,21.5c-2.6,8-5.6,16.5-9.1,25.5c-3.5,9-7.3,18-11.4,27c-4.1,9-8.4,17.7-13,25.9
                   		c-4.6,8.3-9.1,15.8-13.7,22.4c4.8,0.2,9.9,0.7,15.3,1.4s11.1,1.6,17.3,2.5c7.8,1.3,15.8,2.5,24.1,3.5c8.3,1,16.4,1.6,24.4,1.6
                   		c7.1,0,14-0.6,20.6-1.8c6.6-1.2,12.8-3.4,18.6-6.5c1-0.1,1.8,0.8,2.4,2.6c0.6,1.8,0.9,3.8,1,6.1c0,2.3-0.1,4.5-0.5,6.6
                   		c-0.4,2.1-0.9,3.4-1.6,3.9l0.5-0.1c-3.6,3.6-8,6.2-13.3,7.6c-5.3,1.5-11.1,2.3-17.5,2.3c-8.7,0-17.9-1-27.5-2.8
                   		c-9.7-1.9-19.3-4-29-6.3c-8.8-2-17.2-3.8-25.1-5.3c-8-1.6-14.9-2.3-20.9-2.3c-1.1,0-2.1,0-2.9,0.1c-0.9,0-1.8,0.1-2.8,0.2L12,178.6
                   		z"/>
                   	<path class="st0" d="M149.4,104.2c-3.1,9-7.7,16.5-13.9,22.5c-6.1,6-13.4,10.5-21.8,13.4c0.6,2.7,1.6,5.3,3.1,7.6
                   		c1.4,2.4,3.4,3.9,5.8,4.4l-0.3-0.1c2.1,0.5,4.4,0.4,6.8-0.5c2.4-0.8,5-2.2,7.6-4.3c2.6-2,5.1-4.7,7.7-8c2.5-3.3,4.8-7.2,7-11.7
                   		c1.1-2.4,2.1-4.9,3.1-7.4c0.9-2.6,1.8-5,2.6-7.3c0.7-1.3,1.7-2,3.1-2.1c1.3-0.1,2.6,0.2,3.8,1c1.1,0.8,2,1.8,2.7,3.1
                   		c0.6,1.4,0.7,2.9,0.1,4.6l-2,5.4c-1.8,4.5-4,9.5-6.8,14.9c-2.7,5.5-6.1,10.7-10.3,15.8c-2.5,2.8-5.1,5-7.8,6.5s-5.3,2.7-7.8,3.4
                   		c-2.5,0.8-4.8,1.2-6.8,1.4c-2.1,0.1-3.7,0.2-4.9,0.2c-7.8,0-14.2-2.3-19.1-6.8s-8.2-10.6-9.7-18.5c-1.3-6.8-1.3-13.4,0.1-19.9
                   		c1.4-6.5,3.9-13.5,7.7-21.1c1.3-2.5,3.1-5.2,5.5-8c2.4-2.8,5.2-5.5,8.3-7.9c3.1-2.4,6.6-4.3,10.3-5.8c3.7-1.5,7.5-2.2,11.6-2.1
                   		c4.2,0.1,7.8,1.5,10.7,4.1c2.9,2.7,4.8,6.2,5.5,10.7c0.3,2,0.3,4,0.1,6.1c-0.3,2.1-0.9,4.2-1.9,6.5V104.2z M137.7,91.9
                   		c-3.3,0.7-6.3,2.3-9,4.8c-2.7,2.5-5.1,5.5-7.1,8.9c-2.1,3.4-3.7,7-5,10.9c-1.3,3.9-2.3,7.5-2.9,10.9c6.1-2.9,11.4-6.8,15.9-11.8
                   		c4.5-5,7.8-10.9,9.9-17.8v0.1c0.3-0.8,0.5-1.6,0.5-2.4c0-0.8,0-1.5-0.1-2.1C139.6,92,138.9,91.5,137.7,91.9z"/>
                   	<path class="st0" d="M295.5,119c-2.3,8.7-5.5,17.4-9.5,26c-4,8.6-8.7,16.3-14.2,22.9c-5.5,6.7-11.5,12-18.2,16
                   		c-6.7,3.9-13.9,5.7-21.8,5.2c-4.2-0.4-8.1-1.5-11.8-3.4c-3.7-1.9-7-4.3-10-7.2c-3-3-5.6-6.4-7.7-10.3c-2.2-3.9-3.8-8.1-5-12.6
                   		c-1.2-5.7-1.7-12.2-1.6-19.4c0.1-7.2,0.9-14.8,2.3-22.8c1.3-8,3.2-16,5.6-24.2c2.4-8.2,5.3-16.2,8.7-23.9c3.4-7.7,7.3-15,11.6-21.8
                   		c4.4-6.8,9.1-12.7,14.2-17.8c5.1-5,10.6-9,16.4-12c5.8-2.9,12-4.4,18.5-4.4c3.9,0,7.3,0.4,10.1,1.3c2.9,0.9,5.2,2.1,7.1,3.6
                   		c1.9,1.6,3.4,3.4,4.5,5.5c1.1,2.2,1.8,4.5,2.3,7.1c0.4,2.7,0.5,5.6,0.2,8.6c-0.3,3.1-0.9,6.2-1.7,9.5c-0.9,3.3-1.9,6.5-3.2,9.8
                   		c-1.3,3.3-2.7,6.4-4,9.4c-0.3,0.6-0.7,1.3-1.3,1.9c-0.6,0.7-1.2,1.4-2,2c-0.8,0.7-1.7,1.2-2.8,1.7c-1,0.4-2.2,0.7-3.5,0.7
                   		c-1,0-2.5-0.4-4.4-1.1c-1.9-0.8-4.4-2-7.5-3.7c1.6-1.5,3.3-3.7,5.2-6.6c1.8-2.9,3.6-6,5.2-9.5c1.6-3.4,2.9-6.8,4-10.3
                   		s1.6-6.5,1.7-9.1c0.2-2,0.2-3.4,0-4.3c-0.2-1.2-0.9-2-2.1-2.6c-1.2-0.5-2.8-0.8-4.8-1c-3.9,0.4-7.8,2.2-11.6,5.4
                   		c-3.9,3.2-7.5,7.2-11,12.1c-3.5,4.9-6.8,10.3-9.9,16.3c-3.1,6-5.9,12.1-8.3,18.1c-2.5,6.1-4.6,12-6.4,17.6
                   		c-1.8,5.7-3.1,10.5-3.9,14.5c-1,4.5-1.9,9.1-2.6,13.9c-0.8,4.8-1.2,9.9-1.3,15.2c-0.3,5.8-0.1,11.2,0.8,16
                   		c0.9,5.8,2.5,10.6,4.9,14.3c2.3,3.8,5.4,5.7,9.2,5.9c4,0.3,7.8-0.3,11.5-1.9c3.6-1.6,7.1-3.8,10.3-6.7c3.2-2.9,6.2-6.3,9-10.1
                   		c2.8-3.8,5.3-8,7.7-12.3c2.3-4.4,4.4-8.7,6.2-13.1c1.8-4.4,3.4-8.6,4.7-12.6c0.3-0.6,1.1-0.8,2.3-0.7c1.2,0.1,2.4,0.5,3.8,1
                   		c1.3,0.6,2.4,1.3,3.3,2.1c0.9,0.9,1.2,1.6,0.9,2.3L295.5,119z"/>
                   	<path class="st0" d="M296.1,77.5c1.3-0.7,3.1-0.6,5.3,0.4c2.3,1,4.4,2.4,6.6,4.2c2.1,1.9,3.9,4,5.3,6.5c1.3,2.5,1.8,4.8,1.3,7.1
                   		c0.1-0.2,0,0-0.2,0.6c-0.2,0.6-0.5,1.4-0.8,2.4c-0.4,1-0.8,2.2-1.2,3.4c-0.4,1.3-0.9,2.5-1.3,3.6c-0.9,2.6-1.9,5.5-3.1,8.6
                   		c-1.2,3.1-2.3,6.4-3.3,9.6c-1,3.3-2.1,6.4-3.1,9.5c-1,3.1-1.8,5.9-2.3,8.3c-0.6,2.4-0.9,4.3-1,5.8c-0.2,1.5,0.1,2.2,0.7,2.2h1
                   		c2.9-1,5.5-2.6,7.9-4.9c2.3-2.3,4.5-4.8,6.5-7.7c2-2.9,3.7-6,5.3-9.2c1.6-3.2,3.2-6.4,4.7-9.4l1.6-3.6c0.3-0.6,1-0.7,2.2-0.4
                   		c1.1,0.4,2.3,1,3.4,1.8c1.1,0.9,2,1.8,2.8,2.9c0.8,1,0.9,1.9,0.5,2.6l0.1-0.3c-2.9,6.5-6.4,13.1-10.4,19.8c-4,6.7-8.4,12.6-13,17.7
                   		c-0.8,0.7-1.8,1.5-2.9,2.5c-1.1,1-2.4,1.8-3.8,2.6c-1.5,0.8-3,1.5-4.7,2c-1.7,0.5-3.5,0.8-5.4,0.8c-4-0.1-7.1-1.6-9.4-4.6
                   		c-2.3-2.9-3.8-6.6-4.5-11c-0.2-1.6-0.3-3.2-0.4-5c0-1.7,0-3.4,0.2-5.3v0.2c0.5-5,1.6-10.8,3.2-17.4c1.6-6.6,3.3-13.2,5.1-19.8
                   		c1.1-4.5,2.2-8.9,3.3-13.1c1.1-4.2,2-8.1,2.5-11.6L296.1,77.5z M303.9,31.6c0.8-0.1,1.8,0.2,3.1,0.8c1.2,0.7,2.6,1.6,4,2.7
                   		c1.4,1.2,2.9,2.5,4.3,3.9c1.4,1.5,2.8,2.9,3.9,4.2c1.1,1.4,2.1,2.6,2.8,3.8c0.8,1.2,1.2,2,1.3,2.6c-0.1,2.9-0.5,5.5-1.1,7.7
                   		c-0.7,2.2-1.3,4.5-2,6.8c-0.7,2.3-1.4,4.6-2,7c-0.7,2.4-1.1,5.2-1.4,8.4c-1.3-0.3-2.8-1-4.6-2.2c-1.8-1.1-3.4-2.5-5-4
                   		c-1.6-1.5-2.9-3-4-4.6c-1.2-1.6-1.8-2.9-2-4.1c-0.2-2-0.3-4.2-0.1-6.6c0.1-2.4,0.2-4.9,0.4-7.5c0.3-2.6,0.5-5.3,0.6-8
                   		c0.1-2.7,0-5.3-0.2-7.8L303.9,31.6z"/>
                   	<path class="st0" d="M380.4,104.2c-3.1,9-7.7,16.5-13.9,22.5c-6.1,6-13.4,10.5-21.8,13.4c0.6,2.7,1.6,5.3,3.1,7.6
                   		c1.4,2.4,3.4,3.9,5.8,4.4l-0.3-0.1c2.1,0.5,4.4,0.4,6.8-0.5c2.4-0.8,5-2.2,7.6-4.3c2.6-2,5.1-4.7,7.7-8c2.5-3.3,4.8-7.2,7-11.7
                   		c1.1-2.4,2.1-4.9,3.1-7.4c0.9-2.6,1.8-5,2.6-7.3c0.7-1.3,1.7-2,3.1-2.1c1.3-0.1,2.6,0.2,3.8,1c1.1,0.8,2,1.8,2.7,3.1
                   		c0.6,1.4,0.7,2.9,0.1,4.6l-2,5.4c-1.8,4.5-4,9.5-6.8,14.9c-2.7,5.5-6.1,10.7-10.3,15.8c-2.5,2.8-5.1,5-7.8,6.5s-5.3,2.7-7.8,3.4
                   		c-2.5,0.8-4.8,1.2-6.8,1.4c-2.1,0.1-3.7,0.2-4.9,0.2c-7.8,0-14.2-2.3-19.1-6.8s-8.2-10.6-9.7-18.5c-1.3-6.8-1.3-13.4,0.1-19.9
                   		c1.4-6.5,3.9-13.5,7.7-21.1c1.3-2.5,3.1-5.2,5.5-8c2.4-2.8,5.2-5.5,8.3-7.9c3.1-2.4,6.6-4.3,10.3-5.8c3.7-1.5,7.5-2.2,11.6-2.1
                   		c4.2,0.1,7.8,1.5,10.7,4.1c2.9,2.7,4.8,6.2,5.5,10.7c0.3,2,0.3,4,0.1,6.1c-0.3,2.1-0.9,4.2-1.9,6.5V104.2z M368.7,91.9
                   		c-3.3,0.7-6.3,2.3-9,4.8c-2.7,2.5-5.1,5.5-7.1,8.9c-2.1,3.4-3.7,7-5,10.9c-1.3,3.9-2.3,7.5-2.9,10.9c6.1-2.9,11.4-6.8,15.9-11.8
                   		c4.5-5,7.8-10.9,9.9-17.8v0.1c0.3-0.8,0.5-1.6,0.5-2.4c0-0.8,0-1.5-0.1-2.1C370.6,92,369.9,91.5,368.7,91.9z"/>
                   	<path class="st0" d="M418.6,84.1c-0.6,1.9-1.4,4.5-2.4,7.8c-1,3.3-2.1,7-3.2,11c-1.2,4-2.3,8.3-3.4,12.8c-1.2,4.5-2.2,8.8-3,12.9
                   		c-0.9,4.2-1.5,8-1.9,11.5c-0.4,3.5-0.4,6.3,0,8.4v1.2h1c2.6-1,4.9-2.6,7-4.9c2-2.3,3.9-4.8,5.5-7.6c1.7-2.9,3.2-5.9,4.5-9.2
                   		c1.4-3.2,2.6-6.4,3.8-9.5h-0.1c0.3-0.9,0.7-1.8,1.1-2.6c0.4-0.8,0.8-1.7,1.1-2.5c0.2-0.6,0.8-0.8,1.9-0.4c1.1,0.3,2.3,0.8,3.5,1.5
                   		c1.2,0.7,2.2,1.5,3.1,2.5c0.8,1,1.2,1.8,1,2.5l-2.7,6.8c-2.3,5.7-4.9,11.5-7.7,17.3c-2.8,5.9-6.2,11-10,15.4
                   		c-0.7,0.8-1.6,1.7-2.7,2.6c-1.1,1-2.4,1.8-3.8,2.6c-1.4,0.8-3,1.5-4.7,2c-1.7,0.5-3.6,0.8-5.5,0.8c-4.5-0.2-8-2.1-10.6-5.6
                   		c-2.5-3.5-4.2-7.8-5-12.9c-0.2-1.1-0.3-2.3-0.4-3.5c0-1.2-0.1-2.4-0.1-3.4c-0.2-10,0.9-19.7,3.2-29.2c2.3-9.5,4.8-18.8,7.5-28
                   		l3.9-12.6c1-3.8,2-7.7,3-11.6c1-3.9,1.9-7.8,2.8-11.6c0.8-3.8,1.5-7.5,2.1-11c0.5-3.5,1-6.8,1.3-9.8c1.3-0.8,3.2-0.8,5.6,0.1
                   		c2.4,0.9,4.8,2.2,7.1,4c2.3,1.8,4.3,3.9,6,6.2c1.7,2.4,2.4,4.6,2.3,6.8c-0.3,1.5-0.8,3.7-1.6,6.5c-0.8,2.8-1.6,6-2.5,9.4
                   		c-1,3.5-2,7.1-3.2,10.9c-1.2,3.8-2.2,7.3-3.2,10.6L418.6,84.1z"/>
                   </g>
                   <g>
                   	<path class="st0" d="M22.9,233c5.8,1.2,12.1,3.5,11.6,10.5c-0.4,5.7-6.1,8.8-11.9,8.8c-4.4,0-9-1.7-11.7-5.7l1.2-0.5
                   		c2.3,3.3,6.5,5,10.6,5c4.9,0,9.8-2.3,10.5-7.6c0.4-6.3-5.1-8-10.6-9.3c-5.3-1.1-11.7-3.1-11.4-9.8c0.2-5.9,5.8-8.6,11.4-8.6
                   		c4.6,0,8.8,1.6,11,5.5l-1.2,0.5c-1.9-3.2-5.9-4.7-9.9-4.7c-5,0-9.8,2.1-10.2,7.4C12.1,229.6,17.2,231.8,22.9,233z"/>
                   	<path class="st0" d="M43,233.4h18.3v1.3H43v15.7h19.8v1.3H41.7v-35.4h21.1v1.3H43V233.4z"/>
                   	<path class="st0" d="M70,251.7v-35.4h12.5c7.2,0.1,10.9,5.6,10.9,10.8c0,5.2-3.6,10.5-10.8,10.6H71.2v14.1H70z M82.5,236.4
                   		c6.5,0,9.6-4.8,9.6-9.4c0-4.7-3.2-9.5-9.6-9.6H71.2v18.9H82.5z"/>
                   	<path class="st0" d="M120.9,217.5h-11.8v34.2h-1.3v-34.2H96v-1.3h24.9V217.5z"/>
                   	<path class="st0" d="M127.9,233.4h18.3v1.3h-18.3v15.7h19.8v1.3h-21.1v-35.4h21.1v1.3h-19.8V233.4z"/>
                   	<path class="st0" d="M156.6,217.5l-0.5,0v34.1h-1.3v-35.4h2.6l12.7,28.7l12.6-28.7h2.7v35.4h-1.3v-34.5h-0.5L171,246.1h-1.7
                   		L156.6,217.5z"/>
                   	<path class="st0" d="M213.6,233.5c3.9,1.7,5.1,5.6,5,8.8c-0.1,7.3-4.8,9.5-11,9.5h-12.9v-35.4h13c5.2,0,9.3,3,9.3,8.6
                   		c0,3-1.1,5.7-3.6,7.2l-1.5,0.9L213.6,233.5z M207.7,232.3c4.7,0,8-2.3,8-7.4c0-5-3.5-7.5-8-7.5H196v14.9H207.7z M207.7,250.5
                   		c5.7,0.1,9.7-2.2,9.7-8.3c0-6.2-3.8-8.7-9.7-8.7H196v17H207.7z"/>
                   	<path class="st0" d="M227.3,233.4h18.3v1.3h-18.3v15.7h19.8v1.3h-21.1v-35.4h21.1v1.3h-19.8V233.4z"/>
                   	<path class="st0" d="M275.5,251.7l-11.9-15.8h-8.1v15.8h-1.2v-35.4h12.5c6.2,0,10.9,2.4,11,9.6c0,7.4-4.5,10-11,10H265l12,15.8
                   		H275.5z M266.9,234.8c6.5,0,9.8-2.6,9.8-8.9c0-6.4-4.1-8.6-9.8-8.5h-11.4v17.4H266.9z"/>
                   	<path class="st0" d="M296.6,222.2l-1.1-0.5c1.9-4,5.3-5.9,10.7-5.9c6.3,0,10.9,4.1,10.9,9.4c0,2.7-1.6,5.8-4.3,8.5l-16.1,16.8H317
                   		v1.3h-21.8l-0.5-1.2l17.1-17.9c2.4-2.5,3.9-5.2,3.9-7.6c0-4.3-3.8-7.9-9.6-8.1C301.7,216.9,298.4,218.7,296.6,222.2z"/>
                   	<path class="st0" d="M334.8,252.2c-6,0-11.8-3.6-11.9-10.1c0-4.8,2.1-8,7.1-9.6c-4.2-1.4-5.5-5-5.5-8.2c0-5.7,5-8.6,10.3-8.6h1
                   		c5.2,0,10.3,2.9,10.3,8.6c0,3-1.2,6.7-5.4,8.2c4.7,1.3,7.1,4.5,7.1,9.6c-0.2,6.5-6,10.1-12,10.1H334.8z M335.8,251.1
                   		c4.9,0,10.7-2.8,10.7-9c0-7.1-5.1-9-10.7-9h-1c-5.6,0-10.7,1.9-10.7,9c0,6.1,5.8,9,10.7,9H335.8z M334.8,216.9
                   		c-4.7,0-9.1,2.3-9.1,7.5c0,5.9,4.7,7.7,9.1,7.7h1c4.5,0,9.1-1.8,9.1-7.7c0-5.2-4.5-7.5-9.1-7.5H334.8z"/>
                   	<path class="st0" d="M367.9,237.3h-13.5v-1.2h13.5V237.3z"/>
                   	<path class="st0" d="M374.5,222.2l-1.1-0.5c2-4,5.3-5.9,10.7-5.9c6.3,0,10.9,4.1,10.9,9.4c0,2.7-1.6,5.8-4.3,8.5l-16.1,16.8h20.4
                   		v1.3h-21.8l-0.5-1.2l17.1-17.9c2.4-2.5,3.9-5.2,3.9-7.6c0-4.3-3.8-7.9-9.6-8.1C379.6,216.9,376.3,218.7,374.5,222.2z"/>
                   	<path class="st0" d="M403.3,246.6c1.9,3,5.5,4.4,9.5,4.4c5.6,0,11-2.8,11-8.5v-9.9c-3.1,4.7-7.5,5.1-11,5.1
                   		c-6.1-0.1-12.1-3.2-12.1-9.5v-3.1c0-6.3,6-9.5,12.1-9.5c6.2,0,12.2,3,12.3,9.5v17.5c0,6.3-6.2,9.6-12.3,9.5c-4.6,0-8.5-1.5-10.7-5
                   		L403.3,246.6z M402,228.3c0,5.5,5.3,8.3,10.8,8.3c5.6,0,11.1-2.7,11.1-8.3v-3c0-5.6-5.5-8.3-11.1-8.3c-5.6,0-10.8,2.8-10.8,8.3
                   		V228.3z"/>
                   </g>
                   <g>
                   </g>
                   <g>
                   </g>
                   <g>
                   </g>
                   <g>
                   </g>
                   <g>
                   </g>
                   <g>
                   </g>
                   </svg>

            </div>

                </div>

              </div>

      </div>
  </section>


    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec"></div>
                            <h1>“Dance is the hidden<br>language of the soul”<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp― Martha Graham </h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content">
                        <div class="logo"><a href="index.html"><img src="img/logo.png" alt=""></a></div>
                        <br>
                        <h2>Dance</h2>
                        <span>Step <span style="font-weight: bold;">Up</span> To The beat</span>
                        <div class="line-dec"></div>
                        <p>Natyashastra or Horos. Classical mudras or Bollywood dumkas. Show off here at Step Up   </p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/dance.html" data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!--Music-->
    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content" id="musicpic">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec" id="musicdec"></div>
                            <h1>“Where words fail, music speaks.”<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ― Hans Christian</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content" id="musicright">
                        <div class="logo"><a href="index.html"><img src="img/music.png" alt=""></a></div>
                        <br>
                        <h2>Music</h2>
                        <span>Bring <span style="font-weight: bold;">music</span> to life</span>
                        <div class="line-dec"></div>
                        <p> Art form Muses. Melody or Harmonies. Hard rock or Orchestra. This is the place! </p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/music.html"  data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!--Art-->
    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content" id="artpic">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec" id="artdec"></div>
                            <h1>"I dream of painting and then I paint my dream"<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - Vincent Van Gogh</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content" id="artright">
                        <div class="logo"><a href="index.html"><img src="img/art.png" alt=""  height="140" width="140"></a></div>
                        <br>
                        <h2>Fun & Arts</h2>
                        <span>Where<span style="font-weight: bold;"> imagination </span>and <span style="font-weight: bold;">Creativity</span> come to Life</span>
                        <div class="line-dec"></div>
                        <p>"A picture Paints a Thousand words", Do you wish to bring your thoughts to life ? and have some fun along the road, Then this is the place.</p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/art.html"  data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Literature-->
    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content" id="litpic">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec" id="litdec"></div>
                            <h1>"Literature is the garden of wisdom"<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- James Ellis</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content" id="litright">
                        <div class="logo"><a href="index.html"><img src="img/literature.png" alt=""  height="140" width="140"></a></div>
                        <br>
                        <h2>Literature</h2>
                        <span>Where <span style="font-weight: bold;">Fiction</span> and <span style="font-weight: bold;">Reality</span> Coalesce</span>
                        <div class="line-dec"></div>
                        <p>Spoken or Written. Fiction or non fiction. Is your imagination at its peak? Then be here !</p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/literature.html"  data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---theatrical-->
    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content" id="thpic">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec" id="thdec"></div>
                            <h1>"In the theater the audience wants to be surprised<br>but by things that they expect"<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Tristan Bernard</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content" id="thright">
                        <div class="logo"><a href="index.html"><img src="img/theatrical.png" alt="" height="140" width="170"></a></div>
                        <br>
                        <h2>Theatrical</h2>
                        <span>Bringing the <span style="font-weight: bold;">stage</span> to life</span>
                        <div class="line-dec"></div>
                        <p>Silent Comedy or Short feature. Can you Stirr the crowd? The stage is yours then!</p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/theatrical.html"  data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-banner-content" id="onlinepic">
                        <div class="text-content">
                            <h6>Events</h6>
                            <div class="line-dec" id="onlinedec"></div>
                            <h1>“ Photography takes an instant<br> out of time,<br> altering life by holding it still ”<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp– Dorothea Lange</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-banner-content" id="onlineright">
                        <div class="logo"><a href="index.html"><img src="img/online.png" alt="" height="120" width="120"></a></div>
                        <br>
                        <h2>Online</h2>
                        <span></span>
                        <div class="line-dec"></div>
                        <p></p>
                        <br><br><br><br>
                        <div class="white-border-button">
                            <a href="eventcards/online.html"  data-id="best-offer-section">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scr pane prt an" style="background:#ffffff;" data-id="Hospitality">


         <section class="banner" id="top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8">
                     <div class="left-banner-content" id="hpic">
                        <div class="text-content">
                           <h6>Details</h6>
                           <div class="line-dec" id="hdec"></div>
                           <h1>"True hospitality consists of giving the best of yourself to your guests" <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- Eleanor Roosevelt </h1>

                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="right-banner-content" id="hright">
                        <div class="logo"><a href="index.html"><img src="img/hosp.png " alt="" height="110" width="150" ></a></div>
                        <br>
                        <h2>Hospitality</h2>
                        <span>National Institute Of technology Puducherry</span>
                        <div class="line-dec"></div>
                        <p><br><br><div class="white-border-button">
                           <a href="hospitality/index.php"  data-id="best-offer-section">Read More</a>
                        </div></p>

                     </div>
                  </div>
               </div>
            </div>
         </section>

         <div class="section">
  <div class="top-border left"></div>
  <div class="top-border right"></div>
  <br>
  <h2>CONTACT US</h2>
  <p><strong>Hospitality Queries</strong><br>Kumudhini<br>8555086890<br><br><strong>Event Queries</strong><br>Snigdha Taura<br>9933223115<br>Zechariah M<br>9952251743<br><br><strong>Sponsorship Queries</strong><br>Athithyan<br>7418735532<br><br><strong>Helpdesk/Registration Queries</strong><br>S.Shiyam Cumar<br>8754053872<br>Sarga Satheesh<br>9495469296</p>
    <a>CONTACT US</a>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="js/index.js"></script>
<script type="text/javascript">

  $(".ajax-button").on("click",function()
  {
    var resp = -1;
    window.stop();
    var jsondata = $("#ajax-form").serializeArray();
    //console.log(jsondata);
    $.ajax({
      url : './php/login_submit.php',
      data: jsondata,
      type: 'POST',
      beforeSend: function()
      {
        //console.log("wait");
      },
      success: function(response)
      {
        //resp = response;
        //console.log(response);
        if(response=='1')
        {
          //console.log("hello");
          window.location = './index.php';
        }
        else
        {
          $("#incorrect").html("incorrect");
        }
      },
      error: function(response)
      {
        //console.log("error");
      }
    });
  });
  $(".amb_button").on("click",function()
  {
    var resp = -1;
    window.stop();
    var jsondata = $("#amb-form").serializeArray();
    //console.log(jsondata);
    $.ajax({
      url : './php/amb_details/login_submit.php',
      data: jsondata,
      type: 'POST',
      beforeSend: function()
      {
        //console.log("wait");
      },
      success: function(response)
      {
        //resp = response;
        //console.log(response);
        if(response=='1')
        {
          //console.log("hello");
          window.location = './index.php';
        }
        else
        {
          $("#incorrect2").html("incorrect");
        }
      },
      error: function(response)
      {
        //console.log("error");
      }
    });
  });

 $(document).ready(function() {

  if(window.location.href.indexOf('#myModal') != -1) {
    $('#myModal').modal('show');
  }

}); 
</script>


</body>
</html>
