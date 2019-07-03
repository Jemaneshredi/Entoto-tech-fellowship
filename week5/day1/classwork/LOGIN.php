<?php
   include_once 'db2connect.php';

  if(isset($_POST['user']) and isset($_POST['pass'])){
          $user=$_POST['user'];
          $pass=$_POST['pass'];
              echo $user;
              echo $pass;
              $db = new db2connect();
              $result=$db->userlogin($user, $pass);
              {
              
                  if($result=='1'){
                  
                    echo'successfuly';
                
           }
              
       else {
         echo'incorrect';

    }

  }}