<?php

// session_start();

// if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
//     header("location: index.php");
//     exit;
// }

// echo "Welcome to home page"

require 'connection.php';

if(isset($_POST['export'])){
    
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=data1.csv');
    $outpot=fopen("php://output","w");

    fputcsv($outpot, array('Sr_No','Board_Roll_No','email','mobile','first_name','last_name','father_name','branch','status','sem'));
    $query= "SELECT * from year2 ORDER BY Sr_No DESC";
    $result= mysqli_query($connection, $query);
    while ($row=mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
}

?>