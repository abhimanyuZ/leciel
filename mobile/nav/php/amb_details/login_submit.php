<?php
        require '../includes/common.php';
        //print_r($_POST);	
        if (isset($_POST['email']))
        {
        	foreach ($_POST as $key => $value) 
        	{
        		$_POST[$key]= mysqli_real_escape_string($con,$value);	
        	}
        	extract($_POST);
        	$password = md5($_POST['password']);
        	$select_query = "SELECT `EMAIL`, `PASSW` FROM `amb_details` where EMAIL='".$_POST['email']."'";
        	$res = mysqli_query($con,$select_query);
        	$res = mysqli_fetch_array($res);
        	if($res['PASSW']==$password)
        	{
        		//session_start();
                $select_query = "SELECT `AMB_ID` FROM `amb_details` WHERE EMAIL='".$email."'";
                  $res = mysqli_query($con,$select_query);
                  $res = mysqli_fetch_array($res);
                  $amb_id =$res['AMB_ID'];
        		//$_SESSION['email'] = $email;
                $_SESSION['amb_id'] = $amb_id;
        		echo "1";
        	}
        	else
        	{
        		echo "0";
        	}
           /* $email = stripslashes($_REQUEST['email']);
            $username = mysqli_real_escape_string($con,$email);
            $uname=$username;
            $u_mail = explode('@',$uname)[0];
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            $password = md5($password);

            $query = "SELECT * FROM `users` WHERE u_mail=? and password=? and verified=1";
            $stmt = $con->prepare($query);
                    $stmt->bind_param('ss',$u_mail,$password);
                    $stmt->execute();
            $result=$stmt->get_result();
            $rows  = $result->num_rows;
            $stmt->close();
            //$rows=0;
            if($rows>0){
                $select_query = "SELECT user_id,name FROM users WHERE u_mail= '$u_mail'" ;
                $select_query_result = mysqli_query($con, $select_query);
                $row = mysqli_fetch_array($select_query_result);
                $_SESSION['email'] = $username;
                $_SESSION['name']=$row['name'];                
                $_SESSION['user_id'] = $row['user_id']; 
                header('location: home.php');
                
                }else{
                    $_SESSION['error_msg'] = "<div>Username or password is incorrect</div>";
                   $previous = $_SERVER['HTTP_REFERER'];
				   header("location:index.php#login-modal");
                    }*/

        }
    ?>