<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
    header("location: login.php");
    exit;
}

// echo "Welcome to home page"

require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "regestration";

// //Create a connection
// $connection = mysqli_connect($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/hom2.css">
    <link rel="stylesheet" href="css/search.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background-color: #5cdb95; 
        /* background: url('images/back2.jpg'); */
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}
/* tr{
    color: whitesmoke;
}

table{
    border: 2px solid green;
} */

.container{
    /* display: block;
    width: 44rem;
    margin: auto; */
    /* margin-left: 12rem; */
    display: flex;
justify-content: center;
}

   
    </style>
</head>
<body>
    <header class="header">
        <div class="mid">
            <ul class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher.php">Teacher Record</a></li>
               <li><a href="data.php">Add Record</a></li>
            </ul>
        </div>
    </header>
         <div class="container">
            <ul class="navbar2">
            <li><a href="home.php">1st Year</a></li>
               <li><a href="year2.php">2nd Year </a></li>
               <li><a href="year3.php">3rd Year</a></li>
               
            </ul>
            
            <div class="search-box">
      <button class="btn-search"><i class="fas fa-search"></i></button>
      <input type="text" class="input-search" placeholder="Type to Search...">
    </div>

        </div>
    <div class="container" style="background-color: whitesmoke;">
    <table class="content-table">
    <thead>
        <tr>
            <th>Sr. No</th>
            <th>Photo</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Designation</th>
            <th>Department</th>
            <th>Gender</th>
            <!-- <th colspan="2">Operations</th> -->
        </tr>
    </thead>
    <?php

    $query="select * from teachers";
    $data= mysqli_query($connection,$query);
    $total=mysqli_num_rows($data);
    // echo $result['Sr_No']."".$result['Board_Roll_No']."".$result['email']."".$result['mobile']."".$result['first_name']."".$result['last_name']."".$result['father_name']."".$result['branch']."".$result['status'].$result['sem'];
    if($total!=0)
    {
        $count=1;
        while ($result=mysqli_fetch_assoc($data)) {
            echo"
            <tr>
            <td>$count</td>
            <td><img src ='".$result['tec_image']."' height='100px' width='100px'></td>
            <td>".$result['first_name']."</td>
            <td>".$result['last_name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['designation']."</td>
            <td>".$result['department']."</td>
            <td>".$result['gender']."</td>
            
           </tr>
            ";

            $count++;
        }
    }
    else{
        echo"No records found";
    }
?>
</table>
<script>
    function checkdelete()
    {
        return confirm('Are you sure want to delete');
    }
</script>
</div>
    
</body>

</html>