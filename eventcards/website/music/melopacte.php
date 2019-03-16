<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Melopacte - Le Ciel '18</title>



      <link rel="stylesheet" href="css/melopacte-style.css">
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
     <img src="https://image.ibb.co/hct5AU/MELOPACTE.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Melopacte</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Are you a group of talented musicians? </i></p>
    <p>Come with your group and make the event unison to your band here on the Melopacte platform. Making the crowd sing to you is the best achievement of the band and here is a great chance in the name of Melopacte to become the best band at the event.</p>
    <br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="melo/melopacte.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Language – Any language of India (Hindi, English, Tamil etc.).</li>
      <br>
      <li>Maximum 10 members can participate from a team.</li>
      <br>
      <li>A Drum kit, keyboard , Acoustic guitar, Bass guitar and Electric guitar will be provided by the college.</li>
      <br>
      <li>Participants can also bring their own instruments other than those which are mentioned above. </li>
      <br>
      <li>At least once instrumentalist should be there. Performances without any instrument are not accepted.</li>
      <br>
      <li>Time duration per team is maximum 15 minutes (excluding setting time).</li>
      <br>
      <li>Any composition can be performed but original compositions will be preferred.</li>
      <br>
      <li>Pre-recorded sounds and effects are not allowed.</li>
      <br>
      <li>Obscenity in behaviour or lyrics will be strictly prohibited.</li>
      <br>
      <li>In any case, Judges’ decision will be final and binding.</li>
      <br>
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
