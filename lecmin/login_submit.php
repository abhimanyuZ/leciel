<?php
        session_start();
        if (isset($_POST['email']))
        {
        	
        	extract($_POST);
        	$password = md5($_POST['password']);
        	if('afa629878c69ccef3ee4a7de27537626'==$password && $_POST['email']=='lcadmin')
        	{
        		//session_start();
        		$_SESSION['admin_id'] = 'lcadmin';
                echo "1";
        		header('location: admin.php');
        	}
        	else
        	{
        		echo "0";
        	}
        

        }
    ?>