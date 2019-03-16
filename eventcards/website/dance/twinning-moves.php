<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Twinning Moves - Le Ciel '18</title>



      <link rel="stylesheet" href="css/duet-style.css">
</head>

<body>
  <div id="hero">
  <div id="kaneda" class="main" data-rellax-speed="-3">  </div>
  <div id="akira" class="name" data-rellax-speed="-3">
     <img src="https://image.ibb.co/n15ULU/duet.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Twinning Moves</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>Are the dance events just for solo and group? </i></p>
    <p>No, not at all. We also conduct a Duet competition.<br> if you and your dance partner are romantic dancers?<br><br>Twinning Moves welcomes you to join the stage and mesmerize the crowd with your Duet.  We are eager to see your pair on the stage.</p>
<br>
  <?php

    if(isset($_SESSION['lcid']))
    {
      echo '<div class="white-border-button"><a href="duet/duet.php" data-id="best-offer-section">Register Now</a></div>';
    }

   ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Music must be pre-cut and prepared. Please have a back-up of your music. Please make sure the version is CLEAN/family friendly otherwise a penalty may be applied.</li>
      <br>
      <li>No dangerous props to be used on stage, such as fire, swords, or knives.</li>
      <br>
      <li>NO SCENERY ALLOWED.  Prop must be an integral part of the routine.  If you cannot hold it, stand on it, or hang from it, it is considered scenery and is not a prop.</li>
      <br>
      <li>Participants agree that the time, manner, and method of judging the competition are final.  Judges break all ties.  No teacher, student, or parent will question a judge.</li>
      <br>
      <li>Time limit 3 min strict. If time limit exceeded then a penalty point will be imposed.</li>
      <br>
      <li>Its better to bring two pendrives.</li>
      <br>
      <li>May or may not be a couple, leave the choice to the participants.</li>
      <br>
      <li>Friends or coaches of the participants should not step on the stage before, during or after the act is performed.</li>
      <br>
      <li>No assessment of the dance will be done it they leave the dance in the middle.</li>
      <br>
      <li>Get your own props that must me informed to the coordinators prior the competition.</li>

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
