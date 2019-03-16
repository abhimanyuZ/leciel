<?php
session_start();
 ?>
!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Rubric Illustration - Le Ciel '18</title>



      <link rel="stylesheet" href="css/caption-style.css">
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
     <img src="https://image.ibb.co/kYUz5U/captioon.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Rubric Illustration</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Have you ever felt proud of listening to “Wah Wah” from the audience? Are you that naughty guy who always caption everything?</i></p>
    <p>Yes? Well, Rubric Illustration provides you with a great platform to grasp millions of appreciations. Come, join you and kill the show with you soothing captions. We are waiting for you.</p>
    <br>
    <?php

      if(isset($_SESSION['lcid']))
      {
        echo '<div class="white-border-button"><a href="rubric/rubric.php" data-id="best-offer-section">Register Now</a></div>';
      }

     ?>
  </div>

	<div id="two" class="tab-content">
    <ul>

      <li>Participant are supposed to caption the picture posted on our FB page.</li>
      <br>
<li>The caption should be e-mailed to leciel.nitpy@gmail.com along with Name,
Facebook ID name and College ID.</li>
<br>
<li>Caption should be related to the picture and should be in English</li>
<br>
<li>The caption should not be more than 20 words.</li>
<br>
<li>Caption will be posted on our FB page along with the picture.</li>
<br>
<li>Winner will be decided based on the reactions on the caption.
1 point (good reaction)
5 points (excellent reaction)
-1 point (bad reaction)
Rest all the reactions have 2 points</li>
<br>
<li>Participants are not allowed to use any application to increase the number of likes.</li>
<br>
<li>Participants can share the picture along with the caption from our FB page.</li>
<br>
<li>If the participant is found violating any rule, he/she will be disqualified immediately</li>

</ul>
<br><br>
  </div>



  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/rellax/1.6.2/rellax.min.js'></script>



    <script  src="js/index.js"></script>





</body>

</html>
