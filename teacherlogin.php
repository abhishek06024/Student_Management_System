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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style22.css">
    <!-- <script src="js/func.js"></script> -->
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        /* background: url('images/collage.jpg');
        background-repeat: no-repeat;
        background-size: 118%;
        z-index: 1; */
        
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

        $email_search= "SELECT * FROM `teachers` WHERE email = '$email' ";
        $execut=mysqli_query($connection,$email_search);

        $email_count = mysqli_num_rows($execut);
        
        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($execut);
            $user_pass = $email_pass['password'];
            $_SESSION['uname']=$email_pass['email'];//session variable
            $pass_decode = password_verify($password, $user_pass);
            
            
            
            if ($pass_decode) {
                echo '<script type="text/javascript">alert("login sucessfully")</script>';
                header('refresh: 0.1; URL=year1.php');
            }
            else {
                echo '<script type="text/javascript">alert("Incorrect Password")</script>';
                 header('refresh: 0.1; URL=teacherlogin.php');
                
            }
        }
        else {
            
            echo '<script type="text/javascript">alert("Invalid email")</script>';
              header('refresh: 0.1; URL=teacherlogin.php');

        }


      
        
        
    }
}

?>

   <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
        
        <div class="container">
            <div class="form" >
                <h2>Teacher Login</h2>
                <form action="#" method="POST">
                <div class="inputBox">
                    <input type="email" name="email" placeholder="Username" require>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="Password" require>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="Login">
                </div>
                <p class="forget"><a href="admin/adminLogin.php">Admin Login </a></p>
            </form>
            </div>
        </div>
    </div>
    
    </section>
  

    <script src="js/func.js"></script>
    </body>
</html>




