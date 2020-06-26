<?php
    include_once 'Connect.php' ;

    $user_first =  $_POST['user_first'] ;
    $user_last =  $_POST['user_last']   ;
    $user_email =    $_POST['user_email']   ;
    $username =   $_POST['username']   ;
    $pwd =   $_POST['pwd']   ;
    $repass =  $_POST['repass']  ;


    if(isset($_POST['signup']))
    {

         $_SESSION['signup'] =1 ; 
         if(empty($user_first)|| empty($user_last) || empty($user_email) || empty($username) || empty($pwd)|| empty($repass))
         {
                header("Location:sign.php?signup=empty") ;
         }
         else
         {
             if( !preg_mactch("/^[a-zA-Z]*$/" , $user_first)||   !preg_mactch("/^[a-zA-Z]*$/" , $user_last) ||  !preg_mactch("/^[a-zA-Z]*$/" , $username))
             {
                header("Location:sign.php?signup=char") ;
             }
             else{

               $sql = "SELECT * FROM users WHERE username = '$username'" ;
               $result = mysqli_query($conn , $sql) ;
               if(mysqli_num_rows($result) > 0 )
               {
                  header("Location:sign.php?signup=exist") ;
               }
               else
               {
                  if(strlen($pwd) < 8)
                  {
                     header("Location:sign.php?signup=passlen") ;
                  }
                  else
                  {
                       if( $pwd != $repass)
                       {
                          header("Location:sign.php?signup=passnomatch");
                       }
                       else
                       {
                          header("Location:sign.php?signup=success") ;
                       }
                  }
               }
             }
         }
    }
    else {
          echo "You need to sign in/sign up first" ;
    }




 ?>
