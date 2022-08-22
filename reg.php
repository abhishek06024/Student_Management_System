<?php

// ini_set('max_execuation_time', 200);
// Connecting to the server 
require 'connection.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "regestration";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if(!$connection)
{
    echo "Connection Failed".mysqli_connect_error();
}
else {

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){

        
    //     $filename =$_FILES["img"]["name"];
    //     $tempname =$_FILES["img"]["tmp_name"];
    //     $folder="images/teachers/".$filename;
    //     move_uploaded_file($tempname, $folder);


    //     $first_name=test_input($_POST['first_name']);
    //     if(empty($first_name))
    //     {
    //         echo '<script type="text/javascript">alert("Please enter your first name")</script>';
    //         header('refresh: 0.1; URL=signup.php'); 
    //     }
    //     else {
    //             if(!preg_match("/^[a-zA-Z-' ]*$/",$first_name))
    //             {
    //                 echo '<script type="text/javascript">alert("Only letters and white space allowed in name")</script>';
                }
        }
        $last_name=test_input($_POST['last_name']);
        if(empty($last_name))
        {
            echo '<script type="text/javascript">alert("Please enter your last name")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }
        else {
                if(!preg_match("/^[a-zA-Z-' ]*$/",$last_name))
                {
                    echo '<script type="text/javascript">alert("Only letters and white space allowed in name")</script>';
                }
        }
        
        $email=test_input($_POST['email']);
        if(empty($email))
        {
            echo '<script type="text/javascript">alert("Email is required")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }
        else {
               if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    echo '<script type="text/javascript">alert("Please enter a valid email address")</script>';
                }
        }
        $password=test_input($_POST['password']);

        if(empty($password))
        {
            echo '<script type="text/javascript">alert("Password is required")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }
        
        $cnf_password=test_input($_POST['cnf_password']);

        if(empty($cnf_password))
        {
            echo '<script type="text/javascript">alert("Confirm password is required")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }

        $phone=test_input($_POST['phone']);
        $len=strlen($phone);

        if(empty($phone))
        {
            echo '<script type="text/javascript">alert("Phone number is required")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }
       
        elseif(!preg_match("/^[0-9]*$/",$phone)){
            echo '<script type="text/javascript">alert("Only number are allowed")</script>';
            header('refresh: 0.1; URL=signup.php');

        }

        elseif ($len>10||$len<10) {
            echo '<script type="text/javascript">alert("Mobile number should be of 10 digit")</script>';
            header('refresh: 0.1; URL=signup.php'); 
        }

       
        

        $designation=test_input($_POST['designation']);
        $department=test_input($_POST['department']);
        $gender=test_input($_POST['gender']);
        // $exist=false;
        $pass = password_hash($password, PASSWORD_BCRYPT);
        // $pass = md5($password);

        $cword = password_hash($cnf_password, PASSWORD_BCRYPT);

        $check="select * from teachers where email like'%$email%' or phone like '%$phone%'";
        $run=mysqli_query($connection,$check);
        $count=mysqli_num_rows($run);
        
        if ($password === $cnf_password) {
            
            if($count<=0){
        
        $query= "INSERT INTO `teachers` ( `first_name`, `last_name`, `email`, `password`, `cnf_password`, `phone`, `designation`, `department`, `gender`, `tec_image`) VALUES ('$first_name', '$last_name', '$email', '$pass', '$cword','$phone','$designation','$department','$gender','$folder')";
 
        
        $execut=mysqli_query($connection,$query); 
        

        if (!$execut) {
            echo '<script type="text/javascript">alert("Your account was not created pleass check your data")</script>';
            header('refresh: 0.1; URL=signup.php');
         }
        else {
            echo '<script type="text/javascript">alert("Your account has been created sucessfully")</script>';
            header('refresh: 0.1; URL=index.php');
        }
      }
        else {
            echo '<script type="text/javascript">alert("Account alrady exist")</script> ';
            header('refresh: 0.1; URL=signup.php');
        }
    }
    else {
        // <meta http-equiv="refresh" content="10; url=signup.php">
        echo '<script type="text/javascript">alert("Password should be same")</script>';
        header('refresh: 0.1; URL=signup.php');
         }
        }

        
 }
   



?>
