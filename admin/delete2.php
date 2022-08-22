<?php

// ini_set('max_execuation_time', 200);
// Connecting to the server 
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_data";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

$Board=$_GET['Roll_Number'];

        
    $query= "DELETE FROM second_year_students WHERE Board_Roll_No = '$Board'";
// $sql= "DELETE FROM `year2` WHERE `Board_Roll_No` = '$Board'";

$data=mysqli_query($connection,$query);
    
if ($data) {
    echo '<script type="text/javascript">alert("Record has been deleted from Scond Year Database")</scrip>';
    header('refresh: 0.1; URL=year2.php');
}
else {
    
    echo '<script type="text/javascript">alert("Faild to deleted from Scond Year Database")</script>';
    header('refresh: 0.1; URL=year2.php');
}


    




?>