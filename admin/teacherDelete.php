<?php

// ini_set('max_execuation_time', 200);
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_data";

//Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

$Email=$_GET['email'];


        
    $query= "DELETE FROM teachers WHERE email = '$Email'";
// $sql= "DELETE FROM `year2` WHERE `Board_Roll_No` = '$Board'";

$data=mysqli_query($connection,$query);
    
if ($data) {
    echo '<script type="text/javascript">alert("Teacher has been deleted from  Database")</script>';
    header('refresh: 0.1; URL=teacher2.php');
}
else {
    
    echo '<script type="text/javascript">alert("Faild to deleted teacher from Database")</script>';
    header('refresh: 0.1; URL=teacher2.php');
}


    




?>