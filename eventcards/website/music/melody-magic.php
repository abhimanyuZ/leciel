<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Melody Magic - Le Ciel '18</title>



      <link rel="stylesheet" href="css/melody-style.css">
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
     <img src="https://image.ibb.co/j0W3fU/melody.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Melody Magic</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p><i>“Where words fail, music speaks.”</i></p>
    <p>                                       <i>― Hans Christian Andersen</i></p>
    <p>Are you the one who can prove this? Do you have a beautiful voice and passion for singing?
Come, join us and grab the chance of mesmerizing the audiences and get a chance to become the champion of the champions in Melody Magic.
</p>
<br>
<?php

  if(isset($_SESSION['lcid']))
  {
    echo '<div class="white-border-button"><a href="melody/melody.php" data-id="best-offer-section">Register Now</a></div>';
  }

 ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Choice of song and language is open to the participants but the song should not have any offensive or disrespectful words or lines. The participant shall be stopped and disqualified immediately if the instructions are not followed.</li>
      <br>
      <li>The time allotted to each participant is 3 – 4 minutes. If the participant exceeds the given time, he/she shall be disqualified without prior notice.</li>
      <br>
      <li>Every participant must bring their college ID card with them, without which he/she will NOT be allowed to participate.</li>
      <br>
      <li>Participant will NOT be allowed to refer to the lyrics while singing.</li>
      <br>
      <li>The participants will be judged on the song selection, voice quality, clarity, rhythm and their appeal to the audience.</li>
      <br>
      <li>If participants are singing along with a sound track, they should submit the sound track in a pen drive at least one and half hour prior to the start of the event.</li>
      <br>
      <li>The participants should bring their own musical instrument if required in their performance. </li>
      <br>
      <li>The decision of the judges will be final.</li>
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
