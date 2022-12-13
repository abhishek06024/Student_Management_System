<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
    <link rel="stylesheet" href="css/login.css">
    <!-- <script src="js/func.js"></script> -->
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        /* background: url('images/img1.jpg'); */
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}

    </style>
</head>
<body>
  
<?php

// require "login.php";
// include("login.php");

// session_start();

// ini_set('max_execuation_time', 100);
// Connecting to the server 
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "regestration";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection)
{
    echo "Connection Failed".mysqli_connect_error();
}
else {
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $email_search= "SELECT * FROM `admin` WHERE email = '$email' ";
        $execut=mysqli_query($connection,$email_search);

        $email_count = mysqli_num_rows($execut);
        
        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($execut);
            $admin_pass = $email_pass['password'];
            $_SESSION['admin_uname']=$email_pass['email'];//session variable
            $pass_decode = password_verify($password, $admin_pass);
            
            
            if ($pass_decode) {
                echo '<script type="text/javascript">alert("login as admin sucessfully")</script>';
                header('refresh: 0.1; URL=home.php');
            }
            else {
                echo '<script type="text/javascript">alert("Password incorrect")</script>';
                 header('refresh: 0.1; URL=adminLogin.php');
                
            }
        }
        else {
            
            echo '<script type="text/javascript">alert("Invalid admin email")</script>';
            
              header('refresh: 0.1; URL=adminLogin.php');

        }


      
        
        
    }
}

?>
    <!-- <form action="#" method="POST">
   <div class="container">
       <div id="email">
           <input type="email" name="email" placeholder="Enter your admin id " required>
       </div>
       <div id="pass">
           <input type="password" name="password" placeholder="Enter your admin password" required>
       </div>
       <div id="buton">
        <button class="button-64" role="button" type="submit" name="submit"><span class="text">Sign in</span></button>
       </div>
       <div id="text1">
           <a href="../index.php">Back to Teacher Login</a>
       </div>
   </div>
   </form> -->

   <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" action="#" method="POST">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="email" name="email" class="login__input" placeholder="User name / Email">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" name="password" class="login__input" placeholder="Password">
                        </div>
                        <button name="submit" type="submit" class="button login__submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
                  
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>	
            </div>

            <a href="../teacherlogin.php" id="tech">Teacher Login</a>	
        </div>
    
    </section>

    <script src="js/func.js"></script>
    </body>
</html>




