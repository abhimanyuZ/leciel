<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Picturesque - Le Ciel '18</title>



      <link rel="stylesheet" href="css/photo-style.css">
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
     <img src="https://image.ibb.co/gbXoX9/photo.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Picturesque</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>
“Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.”
</i></p>
    <p><i>— Aaron Siskind</i></p>
    <p>Not everyone one can present the true pleasure of nature on the paper. Are you the one in few? Then you have an opportunity to showcase your talent. Come, join us and get a chance to win the hearts of the spectators along with the prize.</p>
    <br>
        <?php

          if(isset($_SESSION['lcid']))
          {
            echo '<div class="white-border-button"><a href="picture/picture.php" data-id="best-offer-section">Register Now</a></div>';
          }

         ?>
  </div>

	<div id="two" class="tab-content">
    <ul>

      <li>The picture should be the original work of the participant and not copied from any
source.</li>
<br>
<li>The picture should not be edited using any editorial tool. Cropping the picture is fine.</li>
<br>
<li>Participants are required to e-mail the picture along with their Name, Facebook ID
name, College ID and a suitable caption, to leciel.nitpy@gmail.com</li>
<br>
<li>Caption won’t be having evaluated.</li>
<br>
<li>The picture will be posted on our FB page. The picture won’t be posted if found
vulgar or could potentially hurt the feelings of any community.</li>
<br>
<li>Winner will be decided based on the reactions on the picture
1 point (good reaction)
5 points (execellent reaction)
-1 point (bad reaction)
Rest all the reactions have 2 points</li>
<br>
<li>Participants are not allowed to use any application to increase the number of likes.</li>
<br>
<li>Participants are allowed to share the picture from our FB page.</li>
<br>
<li>If the participant is found violating any rule, he/she will be disqualified immediately</li>
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
