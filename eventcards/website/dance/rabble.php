<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="shortcut icon" type="image/png" href="https://image.ibb.co/cHS1jp/fav.png"/>
  <meta charset="UTF-8">
  <title>Rabble - Le Ciel '18</title>



      <link rel="stylesheet" href="css/rabble-style.css">
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

     <img src="https://image.ibb.co/i1evc9/rabble.png" >
   </div>
</div>
<div id="content">
  <div class="container">
    <h2>Rabble</h2>
    <img src="https://jeffbredenkamp.neocities.org/redline-min.png" alt="" />

<div class="tabs">
	<nav class="tab-list">
		<a class="tab active" href="#one">Description</a>
		<a class="tab" href="#two">Rules</a>

	</nav>

	<div id="one" class="tab-content show">
    <p>Coming together is a beginning.<br> Keeping together is a progress. <br>Dancing together is the success.</p>
    <p>Group dances have always been a sight to see. Here many teams compete to step up and become the conquering cadre.</p>
<br>
<?php

  if(isset($_SESSION['lcid']))
  {
    echo '<div class="white-border-button"><a href="rabble/rabble.php" data-id="best-offer-section">Register Now</a></div>';
  }

 ?>
  </div>

	<div id="two" class="tab-content">
    <ul>
      <li>Maximum team strength allowed is 20 dancers + 3 helpers.</li>
      <br>
      <li>On stage maximum 10 members allowed at a time. Rest can rotate between rounds.</li>
      <br>
      <li>In Case no. of participants are more, there will be a preliminary round.</li>
      <br>
      <li>Time limit (excluding briefing time) – Max: 8 min. Min: 4 min.</li>
      <br>
      <li>All forms of dance allowed. Fusion allowed.</li>
      <br>
      <li>Weightage for costumes, music, choreography and coordination. Props can be used. </li>
      <br>
      <li>Negative marking on exceeding time limit. </li>
      <br>
      <li>Disqualification on exceeding the number of participants.</li>
      <br>
      <li>Get your own CD/pen-drive with music for the dance. No audio cassettes will be allowed.</li>
      <br>
      <li>Teams will be judged on the basis of their own prepared sequence.</li>
      <br>
      <li>Teams need to show all the props which they might be using in their performance before the performance itself. </li>
      <br>
      <li>Props using fire are strictly prohibited.</li>
      <br>
      <li>Teams also need to show at least a single set of costumes they will be wearing for their performance.</li>
      <br>
      <li>In case of any issue, final decision will be taken by the event coordinators.</li>
      <br>
      <li>Performances with dangerous stunts will be at one's own risk.</li><br>
      <li>Provocative clothing and abusive song choices are not entertained.</li>
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
