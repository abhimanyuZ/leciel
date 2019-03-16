<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Rhythm Gods - Le Ciel '18</title>



      <link rel="stylesheet" href="css/rhythm-style.css">
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
     <img src="https://image.ibb.co/jbKqC9/rhythm.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Rhythm Gods</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p>The Gods have come singing songs of might and glory. The choice is up to you to challenge them and become Gods yourselves.</p>
    <p>Unity is Strength. It’s a group competition where you sing in symphony along with your team. Bring out the best in you by uniting your voices as one.</p>
    <br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="gds/gds.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>A team of 6 participants and 3 accompanist only.</li>
      <br>
      <li>Minimum time is not less than 2 minutes and more than 5 minutes. Timings are to be strictly adhered.</li>
      <br>
      <li>Vulgarity or obscenity must be avoided in action, costume and gesture of the singing.</li>
      <br>
      <li>Contestants are not permitted to leave the stage area during their performance.</li>
      <br>
      <li>Participants must report at the PR desk at reception AT LEAST TWO hour before the scheduled time of the event.</li>
      <br>
      <li>Late registration will not be entertained.</li>
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
