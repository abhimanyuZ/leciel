<?php   
        header('Content-Type: application/json');
        
        require '../includes/common.php';
            
          $token = $_GET['q'];
          $select_query = "SELECT `LC_ID` FROM `token` where TOKEN='".$token."'";
          $res1 = mysqli_query($con,$select_query);
          $res = mysqli_fetch_array($res1);

          if (mysqli_num_rows($res1)==0) {

                $return = array("data"=>"0");
                $myJSON = json_encode($return);
                echo $myJSON;
                exit;
          }

            $select_query = "SELECT `SR`, `FULL_NAME`, `EMAIL`, `COLLEGE`, `CONTACT`, `LC_ID` FROM `user_details` WHERE LC_ID='".$res['LC_ID']."'";
            $res = mysqli_query($con,$select_query);
            
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC );
            
            $myJSON = json_encode($row);
            echo $myJSON;
            exit;
        
?>