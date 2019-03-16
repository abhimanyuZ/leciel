<?php
    
    require 'includes/common.php';
    if (!isset($_SESSION['lcid'])) 
    {
      header('location: ../index.php');
    }

    include "qrcode/phpqrcode/qrlib.php";
    $lid= $_SESSION['lcid'];
    QRcode::png('http://lecielfest.com/lecmin/details.php?q='.$lid.'', './qrcode/image/'.$lid.'QR.png', 'L', 10, 2);

    $q="SELECT * from `user_details` WHERE LC_ID='".$lid."'";
    $result1=mysqli_query($con,$q) or die(mysqli_error($con));
    $row1 = mysqli_fetch_array($result1);

    $q="SELECT * from `events` WHERE LC_ID='".$lid."'";
    $result2=mysqli_query($con,$q) or die(mysqli_error($con));
    

    //$select_query = "SELECT `SR`, `FULL_NAME`, `EMAIL`, `COLLEGE`, `CONTACT`, `LC_ID` FROM `user_details` WHERE EMAIL='".$email."'";
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    
    <title>User Profile - Leciel Cultural Fest NIT Puducherry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;}
        @media only screen and (max-width: 600px) { #lid{text-align: center;}}
    </style>
</head>
<body>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-12">
        <a href="../index.php"  style="float: left;font-size: 1.5em;background: #d9edf7;padding: 2px;border-radius: 4px;">Home</a>
        <a href="logout.php"  style="float: right;font-size: 1.5em;background: #d9edf7;padding: 2px;border-radius: 4px;">Logout</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-10">
            <h1 style="font-weight: 700;" id="lid">ID: <?php echo $lid ?></h1></div>
        <div class="col-sm-2">
            <center> <?php echo "<img src='./qrcode/image/".$lid."QR.png' title='QRcode' id ='userQR' class='img-responsive' >";?>
           	<a href="<?php echo './qrcode/image/'.$lid.'QR.png'; ?>" download >Download QR Code</a><br><p class="alert alert-info ">Bring this along with you</p>
            </center>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span><?php echo $row1['FULL_NAME']; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>No. of Events Registered</strong></span><?php echo mysqli_num_rows($result2); ?></li>
                <!-- <li class="list-group-item text-right"><span class="pull-left"><strong>College</strong></span> <?php echo $row['COLLEGE']; ?></li> -->

            </ul>


            

            <!-- <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                </div>
            </div> -->

        </div>
        <!--/col-3-->
        <div class="col-sm-12">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#messages" data-toggle="tab">Events Registered</a></li>
                <li ><a href="#home" data-toggle="tab">User Details</a></li>
                <!-- <li><a href="#settings" data-toggle="tab">Payment Status</a></li> -->
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="messages">

                    <h2></h2>

                    
                        
                        <?php 
                        echo '  <table class="table">
                                    <thead>
                                      <tr>
                                        <th>Event</th>
                                        <th>Team Name</th>
                                        <th>Members</th>
                                        <th>Payment Status</th>
                                        <th>Reg. time</th>
                                      </tr>
                                    </thead>
                                    <tbody>';
                        while($row2 = mysqli_fetch_array($result2)){
                            echo '    <tr>
                                        <td>'.$row2["EVENT_ID"].'</td>
                                        <td>'.$row2["TEAM_NAME"].'</td>
                                        <td>'.$row2["MEMBERS"].' </td>
                                        <td>'.$row2["STATUS"].'</td>
                                        <td>'.$row2["TIME_STAMP"].'</td>
                                      </tr>
                                    ';
                        }
                        echo '</tbody>
                                  </table>';
                        ?>
                </div>

                <div class="tab-pane " id="home">
                    
                        <hr>
                   
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name: </h4> <h5><?php echo $row1['FULL_NAME']; ?></h5></label>                               		
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Email: </h4> <h5><?php echo $row1['EMAIL']; ?></h5></label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>College: </h4> <h5><?php echo $row1['COLLEGE']; ?></h5></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Contact: </h4> <h5><?php echo $row1['CONTACT']; ?></h5></label>
                            </div>
                        </div>
                        <!--
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name: </h4> <h5><?php echo $row1['FULL_NAME']; ?></h5></label>
                            </div>
                        </div>
                         <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name: </h4> <h5>myName</h5></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name: </h4> <h5>myName</h5></label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name: </h4> <h5>myName</h5></label>
                            </div>
                        </div> -->
                        
                <hr>

                </div>
                <!--/tab-pane-->


                <!--/tab-pane-->
                <!-- <div class="tab-pane" id="settings">

                    <hr>
                    
                </div>
 -->
            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
</div>
<!--/row-->

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
<!--  All snippets are MIT license https://bootdey.com/license -->
</body>
</html>
