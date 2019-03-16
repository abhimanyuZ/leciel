<?php
require '../includes/common.php';

foreach ($_POST as $key => $value) 
        	{
        		$_POST[$key]= mysqli_real_escape_string($con,$value);	
        	}
extract($_POST);
if (isset($_POST['password1'])) {
  $password=$_POST['password1'];
}
else if (isset($_POST['password2'])) {
  $password=$_POST['password2'];
}
function rand_string_gen($size)
    {
      $s = "1234567890ABCDEFGHIJKLMOPQRSTUVWXYZ";
      $rs = "";
      for($i=0;$i<$size;$i++)
      {
        $rs = $rs.$s[rand(0,(strlen($s)-1))];
      }
      return $rs;
    }
    $flag=0;
     do
     {
      $promo = rand_string_gen(5);
      $query = 'SELECT * FROM amb_details WHERE PROMO="'.$promo.'"';
      $res = mysqli_query($conn,$query);
      if(mysqli_num_rows($res)==0)
      { 
        $flag=0;
      }
      else
      {
        $flag=1;
      }
     }while($flag);

$password = md5($password);
$select_query =  "INSERT INTO `amb_details` (`FULL_NAME`, `EMAIL`, `COLLEGE`, `CONTACT`, `PASSW`, `PROMO`, `CREDIT`) VALUES ('".$name."','".$email."','".$college."','".$contact."','".$password."','".$promo."','$credit')";

$res = mysqli_query($con,$select_query);

if(!$res)
{
	die("Sign Up error!");

}
else
{
	//session_start();
	//$_SESSION['email'] = $email;
  $select_query = "SELECT `SR` FROM `amb_details` WHERE EMAIL='".$email."'";
  $res = mysqli_query($con,$select_query);
  $res = mysqli_fetch_array($res);
  $amb_id = "LCAMB".($res['SR']+100);
  $_SESSION['amb_id'] = $amb_id;
  $select_query = "UPDATE `amb_details` SET `AMB_ID`='".$amb_id."' WHERE SR='".$res['SR']."'";
  //print_r($select_query);
  $res = mysqli_query($con,$select_query);
    //$select_query = "INSERT"
	header('location: amb_profile.php');
}

/*$email = mysqli_real_escape_string($con,$_SESSION['new_email']);

$passwordss = mysqli_real_escape_string($con,$_POST['psw-repeat']);

$address = mysqli_real_escape_string($con,$_POST['address']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$anum = mysqli_real_escape_string($con,$_POST['anum']);
$qual = mysqli_real_escape_string($con,$_POST['qual']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_phone= "[0-9]";
*/


/*$select_query = "SELECT user_id FROM users WHERE email= '$email' " ;
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$hi = mysqli_num_rows($select_query_result);
*/
/*if(!preg_match($regex_email, $email)){
        header('location: signup.php?email_error=Enter a valid email');
} 

if(strlen($passwordss)<8 ){
   
   echo $passwordss."<br>".strlen($passwordss);
   die();
    header('location: signup.php?email_error=Min length of password is 8 characters');
}

*/
//if(strlen($phone)!==10 || !preg_match($regex_phone, $phone) ){
    
   
//    header('location: signup.php?email_error=Enter a valid phone no. of 10 digits');
//}

/*
if($hi >0){  
   
   header('location: signup.php?email_error=Already registered with the email id');
}
 else {
        
        $target_dir1 = "uploads/certificate/";
        $target_file1 = $target_dir1 . basename($_FILES["certificate"]["name"]);

        $target_dir2 = "uploads/degree/";
        $target_file2 = $target_dir2 . basename($_FILES["degree"]["name"]);

        $uploadOk = 1;

        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

        $check1 = getimagesize($_FILES["certificate"]["tmp_name"]);
        $check2 = getimagesize($_FILES["degree"]["tmp_name"]);

        if(  ($check1 !== false) &&  ($check2 !== false) )
        {
            $uploadOk = 1;
        } 
        else 
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file1) || file_exists($target_file2) ) 
        {
         echo "Sorry, file already exists.";
         $uploadOk = 0;
        }

        if (   ($_FILES["certificate"]["size"] > 50000000000000) || ($_FILES["degree"]["size"] > 50000000000000) )
        {
            echo "Sorry, your files are too large.";
            $uploadOk = 0;
        }
      if(  ($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" ) || ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" )  )
        {
            echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
            $uploadOk = 0;
        }
      if ($uploadOk == 0)
      {
          echo "Sorry, your file was not uploaded.";
      } 
      else 
      {     
          
        
          if (   (move_uploaded_file($_FILES["certificate"]["tmp_name"],  $target_file1) ) && (move_uploaded_file($_FILES["degree"]["tmp_name"], $target_file2) ) )
          {
              echo "The files has been uploaded";
          }
          else 
          {
              echo "Sorry, there was an error uploading your file";
          }
      }
*/


   /*$u_mail=explode('@',$email)[0];*/
   //$u_mail="hui";
    //$passwordsss = md5($passwordss);
   /* $insert_query = "INSERT INTO `users`(`name`,`email`,`u_mail`,`phone`, `password`, `address` , `father_name`, `a_number` , `qualification`, `certificate`,`degree`) VALUES ('$name', '$email','$u_mail' ,'$phone', '$passwordsss',  '$address' , '$fname' , '$anum' , '$qual' ,  '".$_FILES['certificate']['name']."' , '".$_FILES['degree']['name']."' )" ;
        $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
         
          unset($_SESSION['new_mail']);
        header('location: pending.php');*/
       