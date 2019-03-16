<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Strokes - Le Ciel '18</title>



      <link rel="stylesheet" href="css/painting-style.css">
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
  <div id="akira" class="name" data-rellax-speed="-3" style="transform: translate3d(0px, 0px, 0px);">

    <img src="https://image.ibb.co/mbyBKp/strokes.png">
  </div>
</div>
<div id="content">
  <div class="container">
    <h2>Strokes</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p>A great painter is the one who makes the whole world to understand his views without the language barrier.</p>
    <p>The Strokes event is searching for the best artist in painting. The Picasso of the event is hiding somewhere. But we are sure he reads this.</p>
    <p>If you feel you are the Picasso of this event you are hearty welcome into the event and get a chance to win the title. </p>
    <br>
<?php

  if(isset($_SESSION['lcid']))
  {
    echo '<div class="white-border-button"><a href="paint/paint.php" data-id="best-offer-section">Register Now</a></div>';
  }

 ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Time limit : 90 minutes</li>
      <br>
      <li>Drawing should be made on A3 sheet that will be provided by us.</li>
      <br>
      <li>Rest of the other kits for drawing like pencils,paints,colours etc should be brought.</li>
      <br>
      <li>Any kind of colours can be used by participants.</li>

</ul>
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
