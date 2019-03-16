<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>What the Flix? - Le Ciel '18</title>



      <link rel="stylesheet" href="css/short-style.css">
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
     <img src="https://image.ibb.co/gq3Oh9/short.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>What the Flix?</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Are you a movie lover? Is a writer in you, waiting for a chance? Are you curious to see your face on the screen? Are you the one who admires to taste the 24 crafts of the film?</i></p>
    <p>What the flix? gives you an opportunity to showcase your creativity on the 24 crafts. Make a short film with the help of your team and get a chance of appreciation from all the eyes seeing it at the event. </p>
    <br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="film/film.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>No restriction on topic. However topics that are offensive to certain community, religion, gender, etc are strictly prohibited and will lead to direct disqualification. Nudity is not allowed.</li>
      <br>
      <li>Maximum time limit : 15 min.</li>
      <br>
      <li>The language prefered is English, however other languages are also allowed only if there is English subtitles.</li>
      <br>
      <li>A brief discussion of topic chosen must be provided during the registration to lecielfest@gmail.com</li>
      <br>
      <li>The script must be original. </li>
      <br>
      <li>Forging of identity will disqualify the participants.</li>
      <br>
      <li>Participants are not to question the marking done by the judges. </li>
      <br>
      <li>Participants should posses their college id card while reporting for the event.</li>
      <br>
      <li>Proof for registering for the event must be produced at the time of reporting.</li>
      <br>
      <li>No refund will be given.</li>

</ul>
<br><br>
  </div>

	<div id="three" class="tab-content">Will be updated soon..</div>
</div>

  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/rellax/1.6.2/rellax.min.js'></script>



    <script  src="js/index.js"></script>





</body>

</html>
