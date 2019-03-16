<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Lip Synchro - Le Ciel '18</title>



      <link rel="stylesheet" href="css/music-style.css">
<style>

      @media only screen and (max-width:620px) {
        /* For mobile phones: */
        .tab, .tab.active, .tab-content {
          width:100%;
          margin-left: 0px;
        }
        .name{
          margin-bottom: 150px;
          left: 0%;
          width: 380px;
          height: auto;
        }
      }
      </style>
</head>

<body>
  <div id="hero">
  <div id="kaneda" class="main" data-rellax-speed="-3">  </div>
  <div id="akira" class="name" data-rellax-speed="-3">
     <img src="https://image.ibb.co/iAVE5U/lip.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Lip Synchro</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Are you a movie lover? Have you ever wondered how your favorite actor/ actress does their lip sync to their actions? Do you want to experience the similar kind of feeling?</i> </p>
    <p>If your answer is yes, congratulations you are on the right event. Join us and experience the beauty in it.
Make your lips to sync along the actions and taste the flavor of joy you get through lip Synchro.
We are ready to admire your talent. Are you ready to showcase yourself?
</p>
<br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="lipsync/lipsync.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>The video should be made using Musical.ly/ Tik Tok application and should be
original work of the participant.</li>
<br>
<li>The video can be in any language.</li>
<br>
<li>Musical.ly/ Tik Tok video should be e-mailed to leciel.nitpy@gmail.com along with
the Name, Facebook ID name and College ID.</li>
<br>
<li>The video should not be vulgar, should not contain swear word and should not hurt
feelings of any community.</li>
<br>
<li>The video will be posted on our FB page.</li>
<br>
<li>Winner will be decided based on the reactions on the video
1 point (good reaction)
5 points (execellent reaction)
-1 point (bad reaction)
Rest all the reactions have 2 points</li>
<br>
<li>Participants are not allowed to use any application to increase the number of likes.</li>
<br>
<li>Participants can share the video from our FB page.</li>
<br>
<li>If the participant is found violating any rule, he/she will be disqualified immediately</li>

  </div>

	<div id="three" class="tab-content">Will be updated soon..</div>
</div>

  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/rellax/1.6.2/rellax.min.js'></script>



    <script  src="js/index.js"></script>


<br><br><br>


</body>

</html>
