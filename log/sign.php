<?php

session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesign.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

      <?php

          if(isset($_SESSION['status']) == 1)
          {

              echo "you are logged in as user".$_SESSION['user'] ;
              header("Location:index.php");
          }
          else
          {
             echo "you are not logged in" ;
          }


       ?>
      <div class="container" id = "tab"   style = " width : 500px;">

            <img src="logo-black.png" alt="ndd"    style = "width :100px;">
            <ul class= "nav nav-tabs">
              <?php
                  if (isset($_SESSION['signup']))
                  {
                      echo "<li  >  <a  data-toggle = 'tab' href='#signin'>Signin</a></li>
                      <li class = 'active'> <a  data-toggle = 'tab' href='#Signup'>Signup</a> </li>" ;
                  }
                  else {
                    echo "<li class = 'active'>  <a  data-toggle = 'tab' href='#signin'>Signin</a></li>
                    <li > <a   data-toggle = 'tab' href='#Signup'>Signup</a> </li>" ;
                  }


               ?>
            </ul>

            <div class="container-inner">
              <div class="tab-content">
                <?php
                    if(isset($_SESSION['signup']))
                    {
                          echo "<div id='signin'   class = 'tab-pane fade in'>
                              <form class='form' action= 'forSign.php' method='post'>
                                <ul    id = 'signinList'>
                                  <li>  UserName: <input   class = 'form-control textarea-lg'   type='text' name='username' placeholder='Enter your username or email'></li>

                                  <li>Password: <input  class = 'form-control textarea-lg'  type='password' name='pwd'  password='Enter Password'></li>
                                  <button class= 'btn btn-primary' type='submit' name='signin'>Signin</button>
                                </ul>

                              </form>
                              </div>" ;


                    }
                    else {
                      echo "<div id='signin'   class = 'tab-pane fade in active'>
                          <form class='form' action= 'forSign.php' method='post'>
                            <ul    id = 'signinList'>
                              <li>  UserName: <input   class = 'form-control textarea-lg'   type='text' name='username' placeholder='Enter your username or email'></li>

                              <li>Password: <input  class = 'form-control textarea-lg'  type='password' name='pwd'  password='Enter Password'></li>
                              <button class= 'btn btn-primary' type='submit' name='signin'>Signin</button>
                            </ul>

                          </form>
                          </div>" ;
                    }




                 ?>
                    <?php
                      $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

                        if ( strpos($full_url , 'signin=empty'))
                        {
                                  echo "<h1> All the columns are not filled </h1>" ;
                        }
                        else if(strpos($full_url , 'signin=char'))
                        {
                                      echo "<h1>Username or Password invalid</h1>" ;
                        }
                        else if(strpos($full_url , 'signin=noacc')){
                                echo "<h1>It seems you does't have an account</h1>" ;
                        }



                     ?>


                    <?php
                        if(isset($_SESSION['signup']))
                        {
                            echo "<div  id = 'Signup' class='tab-pane fade in active'>
                              <form class='form' action = 'forSignup.php' method='post'>
                                <ul    id = 'signinList'>
                                  <li> First Name: <input  class = 'form-control textarea-lg'   type='text' name='user_first' placeholder='Enter First name'></li>
                                  <li> Last Name: <input   class = 'form-control textarea-lg'   type='password' name='user_last'  placeholder='Enter last name '></li>
                                  <li> Email id :  <input   class = 'form-control textarea-lg'   type='email' name='user_email' placeholder='enter Email address'> </li>
                                  <li> Username : <input  class = 'form-control textarea-lg'   type='text' name='uid' placeholder='Enter a Username'></li>
                                  <li> Password :  <input  class = 'form-control textarea-lg'   type='password' name='pwd' placeholder='Set a password'> </li>
                                  <li> Retype-password : <input  class = 'form-control textarea-lg'  type='password' name='repass' placeholder='retype-password'> </li>
                                  <button class = 'btn btn-primary' type='submit' name='signup'>Signup</button>
                                </ul>
                              </form>
                                </div>" ;
                        }
                        else
                        {
                          echo "<div  id = 'Signup' class='tab-pane fade in'>
                            <form class='form' action = 'forSignup.php' method='post'>
                              <ul    id = 'signinList'>
                                <li> First Name: <input  class = 'form-control textarea-lg'   type='text' name='user_first' placeholder='Enter First name'></li>
                                <li> Last Name: <input   class = 'form-control textarea-lg'   type='password' name='user_last'  placeholder='Enter last name '></li>
                                <li> Email id :  <input   class = 'form-control textarea-lg'   type='email' name='user_email' placeholder='enter Email address'> </li>
                                <li> Username : <input  class = 'form-control textarea-lg'   type='text' name='uid' placeholder='Enter a Username'></li>
                                <li> Password :  <input  class = 'form-control textarea-lg'   type='password' name='pwd' placeholder='Set a password'> </li>
                                <li> Retype-password : <input  class = 'form-control textarea-lg'  type='password' name='repass' placeholder='retype-password'> </li>
                                <button class = 'btn btn-primary' type='submit' name='signup'>Signup</button>
                              </ul>
                            </form>
                              </div>" ;
                        }



                     ?>
                  <?php
                          $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

                            if( strpos($full_url , "signup=empty"))
                            {
                              echo "<h1>Are columns are not filled</h1>" ;
                            }
                            else if (strpos($full_url , "signup=char"))
                            {
                                      echo "<h1>invalid fields (username , firstName , lsat Name) </h1>" ;
                            }
                            else if(strpos($full_url , "signup=exist"))
                            {
                                    echo "<h1>Account with this Username alredy exits</h1>" ;
                            }
                            else if(strpos($full_url , "signup=passlen"))
                            {
                                  echo "<h1>invalid password</h1>" ;
                            }
                            else if (strpos($full_url , "signup=passnomatch"))
                            {
                                  echo "<h1>please recheck the password</h1>" ;
                            }
                            else
                            {


                              if (isset($_SESSION['status'])==1)
                              {
                                  echo "<h1>login successful</h1>" ;
                              }

                            }


                   ?>





              </div>  <!-- tab-content-->
            </div>
      </div>
  </body>
</html>
