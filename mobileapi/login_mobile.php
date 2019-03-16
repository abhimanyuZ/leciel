<?php
        
        header('Content-Type: application/json');
        require '../includes/common.php';

        function rand_string_gen($size)
        {
          $s = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMOPQRSTUVWXYZ";
          $rs = "";
          for($i=0;$i<$size;$i++)
          {
            $rs = $rs.$s[rand(0,(strlen($s)-1))];
          }
          return $rs;
        }


        if (isset($_GET['email']))
        {
         
            
          $email= mysqli_real_escape_string($con,$_GET['email']); 
          $password= mysqli_real_escape_string($con,$_GET['id']);
          
          
          $select_query = "SELECT `EMAIL`, `PASSW`,`LC_ID` FROM `user_details` where EMAIL='".$email."'";
          $res = mysqli_query($con,$select_query);
          $res = mysqli_fetch_array($res);
          
          if($res['PASSW']==$password)
          {
                  //echo $res['LC_ID'];
                  $query2 = "DELETE FROM token WHERE LC_ID='".$res['LC_ID']."'";
                  $res2 = mysqli_query($con,$query2);
            
            
            
            $flag=0;
             do
             {
                  $promo = rand_string_gen(10);
                  $query3 = 'SELECT * FROM token WHERE TOKEN="'.$promo.'"';
                  $res3 = mysqli_query($con,$query3);
                  if(mysqli_num_rows($res3)==0)
                  { 
                    $flag=0;
                  }
                  else
                  {
                    $flag=1;
                  }

            }while($flag);
                

                $select_query =  "INSERT INTO `token` (`TOKEN`, `LC_ID`) VALUES ('".$promo."','".$res['LC_ID']."')";

                $res = mysqli_query($con,$select_query);
                $return = array("login"=>"1", "token"=>$promo);
                $myJSON = json_encode($return);
                echo $myJSON;
                exit;

          }
          else
          {
            $return = array("login"=>"0");
            $myJSON = json_encode($return);
            echo $myJSON;
            exit;
          }
        }

        else
          {
            $return = array("login"=>"0");
            $myJSON = json_encode($return);
            echo $myJSON;
            exit;
          }

?>