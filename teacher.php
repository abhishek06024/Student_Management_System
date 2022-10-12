<?php
// error_reporting(0);
session_start();

if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
    header("location: teacherlogin.php");
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
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/hom2.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/nav2.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background-image: linear-gradient( 155deg, #845ec2,#d65db1, #ff6f91, #ff9671, #ffc75f, #f9f871 );
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

/* .container{
    display: block;
    width: 44rem;
    margin: auto;
    margin-left: 12rem;
    display: flex;
justify-content: center;
} */

   
    </style>
</head>
<body>
  
<header class="primary-header">
        <div class="container">
            <div class="nav-wraper">
            <a href="teacher.php"><img src="images/vector.png" alt="Govt. Polytechnic Paonta Sahib" id="logo"></a>
            <button class="mobile-nav" aria-controls="primary-nav" aria-expanded="false">
                <img class="menu-open" src="images/menu-open.svg" alt="" aria-hidden="true">
                <img class="menu-close" src="images/menu-close.svg" alt="" aria-hidden="true">
                <span class="visually-hidden">Menu</span>
            </button>
            <nav class="primary-nav" id="primary-nav" >
                <ul arial-label="primary" role="list" class="nav-list" style="list-style: none;" >
                    <li><a href="#">Home</a></li>
                    <li id="dropdown"><a href="../index.php">Student Details</a>
                    <ul class="option">
                        <li><a href="year1.php">1st Year Students </a></li>
                        <li><a href="year2.php">2nd Year Students </a></li>
                        <li><a href="year3.php">Final Year Students </a></li>
                        <li><a href="passout.php">Passout Students </a></li>
                    </ul></li>
                    <li><a href="teacher.php">Teacher Details</a></li>
                    <li><a href="advance.php">Advance Option</a></li>
                    
                </ul>
                <div id="serch"><form action="" method="POST">
                    <button class="btn-search2" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg></button>
                <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
              </form></div>
                <a href="#" id="profifa-pull-left" class="button | display-sm-none display-md-inline-flex"><?php  
                $email=$_SESSION['uname'];
                $query3="select * from teachers where email='$email' ";
                $data3= mysqli_query($connection,$query3);
                $total3=mysqli_num_rows($data3);
                if($total3!=0)
    {
        
        while ($result=mysqli_fetch_assoc($data3)) {
                // print_r($result['tec_image']);
                // die();
            echo"
            <img src ='".$result['tec_image']."' height='100px' width='100px' alt='User'  class='uu'>
            ";
        }
    } ?></a>
                <div class="user" id="show" style="display: none ;" >
                    <a href="logout.php">Sign Out</a> 
                </div>
            </nav>
         </div>
        </div>
    </header>

        </div>
    <div class="container2" style="background-color: whitesmoke;">
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
    
<script src="js/nav.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            var applied =false;
            $(".uu").click(function(){
                    if (!applied) {
            $(".user").css("display","flex");
            applied = true;
        } 
        else {
                
            $(".user").hide();
            
            applied = false;
            }
        });
        });
            

    </script>

</body>

</html>