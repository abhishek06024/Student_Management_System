<?php

session_start();

// ini_set('max_execuation_time', 200);
// Connecting to the server 
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "regestration";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT * FROM `teachers` WHERE email = '$email' ";
    $result = mysqli_query($connection, $sql);
    $num =$result->num_rows;
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: home.php");
                echo '<script type="text/javascript">alert("login sucessfully")</script>';
            } 
            else{
                // $showError = "Invalid Password";
                echo '<script type="text/javascript">alert("invalid password")</script>';
            }
        }
        
    } 
    else{
        // $showError = "Invalid Credentials";
        echo '<script type="text/javascript">alert("invalid email")</script>';
    }
}
 

?>  