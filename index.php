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
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="js/func.js"></script> -->
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background: url('images/triangle.png');
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

        $email_search= "SELECT * FROM `teachers` WHERE EMAIL = '$email' ";
        $execut=mysqli_query($connection,$email_search);

        $email_count = $execut->num_rows;
        
        if ($email_count) {
            $_SESSION['uname']=$email;//session variable
            $email_pass = mysqli_fetch_assoc($execut);
            $db_pass = $email_pass['password'];
            $pass_decode = password_verify($password, $db_pass);
            
            
            if ($db_pass) {
                echo '<script type="text/javascript">alert("login sucessfully")</script>';
                header('refresh: 0.1; URL=home.php');
            }
            else {
                echo '<script type="text/javascript">alert("Password incorrect")</script>';
                 header('refresh: 0.1; URL=index.php');
                
            }
        }
        else {
            
            echo '<script type="text/javascript">alert("Invalid email")</script>';
              header('refresh: 0.1; URL=index.php');

        }


      
        
        
    }
}

?>
    <form action="index.php" method="POST">
   <div class="container">
       <div id="email">
           <input type="email" name="email" placeholder="Enter your user id " required>
       </div>
       <div id="pass">
           <input type="password" name="password" placeholder="Enter your password" required>
       </div>
       <div id="buton">
        <button class="button-64" role="button" type="submit" name="submit"><span class="text">Sign in</span></button>
       </div>
       <div id="text1">
           <a href="signup.php">Create an account</a>
       </div>
   </div>
   </form>

    <script src="js/func.js"></script>
    </body>
</html>




