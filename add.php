<?php

// ini_set('max_execuation_time', 200);
// Connecting to the server 
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_data";

//Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection)
{
    echo "Connection Failed".mysqli_connect_error();
}
else {

      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $Board=$_GET['Board'];
        $email=$_GET['email'];
        $phone=$_GET['phone'];
        $first_name=$_GET['first_name'];
        $last_name=$_GET['last_name'];
        $father_name=$_GET['father_name'];
        $branch=$_GET['branch'];
        $stat=$_GET['status'];
        $sem=$_GET['sem'];
        
        
            
        
        
            $query= " insert into year1 (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,stat,sem) values ('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$status','$sem')";
            
            $run=mysqli_query($connection,$query);
            
            if (!$run) {
                echo '<script type="text/javascript">alert("Your data was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=signup.php');
        }
            else {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=index.php');
            }
        
        
            }
     }
   



?>
