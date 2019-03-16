<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Impersonate - Le Ciel '18</title>



      <link rel="stylesheet" href="css/mime-style.css">
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

     <img src="https://image.ibb.co/jmzkep/impersonate.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Impersonate</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Do you have a group that is expert in conveying the whole information without a single syllable coming out of your mouth? </i></p>
    <p>Join the Impersonate, enact a situation and make the audience laugh or cry at you acts, you succeed if you make them emotional to the topic you are spreading. </p>
    <br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="imp/imp.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Every participant must bring their college id cards with them without which he / she will not be allowed to participate. (each respective member in the group).</li>
      <br>
      <li>No act shall contain any offensive, obscene, disrespectful actions or gestures. The act will be stopped and immediately disqualified if instructions are not followed.</li>
      <br>
      <li>Maximum of 10 members can form a group.</li>
      <br>
      <li>Each group can perform only for 5 – 6 minutes. Negative marks will be awarded for exceeding the time limit.</li>
      <br>
      <li>The act should not contain lip sync and dialogues.</li>
      <br>
      <li>Only 5 – 6 Props can be used. Marks for props will be awarded.</li>
      <br>
      <li>Music only without wordings is allowed.</li>
      <br>
      <p>Judgement will be based on the following criteria:</p>
      <br>
      <li>Innovation</li>
      <br>
      <li>Depiction of the situation</li>
      <br>
      <li>Props</li>
      <br>
      <li>Team Work</li>
      <br>
      <li>Expressions</li>
      <br>
      <li>Make up</li>

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
