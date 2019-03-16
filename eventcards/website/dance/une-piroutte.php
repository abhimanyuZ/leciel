<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Une Pirouette - Le Ciel '18</title>



      <link rel="stylesheet" href="css/une-style.css">
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
     <img src="https://image.ibb.co/djcTVU/une.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Une Pirouette</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p>Dance is an art of moving the body that draws a thin border for itself from walking, gymnastics and all other regular actions. Only a few can reflect those actions as a dance.</p>
    <p>Are you the one of those few? Come, join the Une Pirouette to give an eye feast for the audience and steal their hearts with your solo performance. </p>
<br>

    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="une/une.php" data-id="best-offer-section">Register Now</a></div>';
        echo "<script>console.log(".$_SESSION['lcid'].")</script>";
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Those participants who have registered must report at the PR desk at reception ATLEAST TWO hours before the scheduled time of the event.</li>
      <br>
      <li>Late registrations will be NOT be entertained.</li>
      <br>
      <li>Participants must pick up slot at a time specified by the organizers to decide the order of appearance on stage. The first participant must be ready at least 30 MINUTES before the scheduled time of beginning of the event. Other Participants must be ready backstage when the preceding.</li>
      <br>
      <li>Time of each performances is limited to 3-5 MINUTES.</li>
      <br>
      <li>An official timekeeper will be present during the event. Timings are to be STRICTLY adhered. In case any Participant exceeds the time limit on stage, the music will be SWITCHED OFF after the designated time.</li>
      <br>
      <li>Organizers are NOT responsible for the loss or damage of personal or confiscated property.</li>
      <br>
      <li>Unruly behaviour can result in the DISQUALIFICATION</li>
      <br>
      <li>Vulgarity in any form is strictly prohibited and may warrant DISQUALIFICATION.</li>
      <br>
      <li>Props are Allowed. Should bring of their own and must be SPECIFIED before the event.</li>
      <br>
      <li>Use of fire, matches or any other inflammable substance is strictly prohibited.</li>
      <br>
      <li>Organizers reserve the RIGHT to cancel any event or prize.</li>
      <br>
      <li>All the participants are requested to bring their song on pendrive or any portable storage device and hand it over to Event Coordinator prior to performance.</li>
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
