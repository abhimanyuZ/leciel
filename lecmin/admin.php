<?php

require '../includes/common.php';
if(!isset($_SESSION['admin_id']))
{	
	
	header('location: login.php');
}

	$q="select * from events";

	$r = mysqli_query($con, $q) or die(mysqli_error($con));

	

?>

<!DOCTYPE HTML>
<html>
<head>

	<hr>
	<a href="sessionDestroy.php">logout</a>
	<hr>
	<title>Admin Panel</title>


	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>	
	
	
	<div class="col-xs-12" style="margin-top: 2%; margin-bottom: 4%;">
		<h2>Details</h2>
		<table id="example" class="display" style="width:100%;">
	        <thead>
	            <tr>
	            	<th>#</th>
	                <th>LID</th>
	                <th>NAME</th>
	                <th>CONTACT</th>
	                <th>EVENT</th>
	                <th>TEAM</th>
	                <th>PAYMENT</th>
	                <th>TRANS ID</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php $i=1; while($row1=mysqli_fetch_array($r)) {
	            		$userId=$row1['LC_ID'];
	            	    $q="SELECT * from `user_details` WHERE LC_ID='".$userId."'";
					    $result=mysqli_query($con,$q) or die(mysqli_error($con));
					    $row = mysqli_fetch_array($result);


	             ?>
	            <tr>
	            	<td><?php echo $i; $i++; ?></td>
	                <td><?php echo $row['LC_ID']; ?></td>
	                <td><?php echo $row['FULL_NAME']; ?></td>
	                <td><?php echo $row['CONTACT']; ?></td>
	                <td><?php echo $row1['EVENT_ID']; ?></td>
	                <td><?php echo $row1['TEAM_NAME'].' ('.$row1['MEMBERS'].')'; ?></td>
	                <td><?php echo $row1['STATUS']; ?></td>
	                <td><?php /* echo $row1['TID'];*/ ?></td>
	                
	                
	            </tr>
	            <?php } ?>
	            
	            
	            
	            
	        </tbody>
	        <tfoot>
	            <tr>
	            	<th>#</th>
	                <th>LID</th>
	                <th>NAME</th>
	                <th>CONTACT</th>
	                <th>EVENT</th>
	                <th>TEAM</th>
	                <th>PAYMENT</th>
	                <th>TRANS ID</th>
	            </tr>
	        </tfoot>
	    </table>
	</div>


<!-- table js-->
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>