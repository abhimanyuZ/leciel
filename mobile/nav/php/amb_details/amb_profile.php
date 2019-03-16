<?php
    
    require '../includes/common.php';
    //$_SESSION['amb_id']="amb1";
    if (!isset($_SESSION['amb_id'])) 
    {
      header('location: ../../index.php');
    }

    
    $lid= $_SESSION['amb_id'];
    

    $q="SELECT * from `amb_details` WHERE AMB_ID='".$lid."'";
    $result1=mysqli_query($con,$q) or die(mysqli_error($con));
    $row1 = mysqli_fetch_array($result1);

    
    

    //$select_query = "SELECT `SR`, `FULL_NAME`, `EMAIL`, `COLLEGE`, `CONTACT`, `amb_id` FROM `user_details` WHERE EMAIL='".$email."'";
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    
    <title>AMBASSADOR Profile - Leciel Cultural Fest NIT Puducherry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;}
        @media only screen and (max-width: 600px) { #lid{text-align: center;}}
    </style>
</head>
<body>
<hr>
<div class="container bootstrap snippet">
    
    
    
    <div class="row">
        <div class="col-sm-10">
            <h1 style="font-weight: 700;" id="lid">AMBASSADOR ID: <?php echo $lid ?></h1>
        </div>
        <div class="col-sm-2">
            <center><h3><a href="logout.php">Log Out</a></h3></center>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>NAME</strong></span><?php echo $row1['FULL_NAME']; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>PROMOCODE</strong></span><?php  echo $row1['PROMO']; ?></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>CREDITS EARNED</strong></span><?php  echo $row1['CREDIT']; ?></li>

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
                <li class="active"><a href="#home" data-toggle="tab">User Details</a></li>
                <!-- <li><a href="#settings" data-toggle="tab">Payment Status</a></li> -->
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="home">
                    
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
