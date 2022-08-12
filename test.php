<?php

//include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/hom2.css">
    <link rel="stylesheet" href="css/search.css">
    </head>
<body style="background-color: grey;">

<header class="header">
        <div class="mid">
            <ul class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher.php">Teacher Record</a></li>
               <li><a href="data.php">Add Record</a></li>
               <li><a href="logout.php">Logout</a></li>
               <li><a href="test.php">Advance Option</a></li>
            </ul>
        </div>
    </header>
         <!-- <div class="container">
            <ul class="navbar2">
            <li><a href="home.php">1st Year</a></li>
               <li><a href="year2.php">2nd Year </a></li>
               <li><a href="year3.php">3rd Year</a></li>
               
            </ul>
            
            <div class="search-box">
                <form action="" method="POST">
      <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
      </svg></button>
      <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
      </form>
    </div>

        </div> -->

<div align="center">
<h3>Bulk Data upload</h3>
    <form action="upload.php" enctype="multipart/form-data" method="post"/>
        <label>Import csv file :</label>
        <input type="file" name="csv" id="csv" class="large"/>
        <div class="form-group">
          <label for="sem"><h3>Choose a Semester:</h3></label>
             <select name="sem" id="sem">
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Final Year">Final Year</option>
             </select>
          </div>
        <input type="submit" id="btn" name="form_submit" value="import file" />
    </form>
</div>
<div style="border: 5px solid yellow ;">
    <h3>Bulk Data export in CSV</h3>
        <form action="expot.php" method="post">
           <label>Export CSV file</label>
           <select name="year" id="">
                <option value="First_year">First Year</option>
                <option value="Second_year">Second Year</option>
                <option value="Final_year">Final Year</option>
            </select>
           <input type="submit" value="Export" name="export"> 
        </form>
    </div>
</body>
</html>



<!-- <?php


// session_start();

// if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
//     header("location: index.php");
//     exit;
// }

// echo "Welcome to home page"
require 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_data";

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
        /* background: url('images/background.jpg');
        background-repeat: no-repeat;
        background-height:vh;
        background-width:wh; */
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
               <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
         <div class="container" >
            <ul class="navbar2">
               <li><a href="test.php">Advance</a></li>
               <li><a href="home.php">1st Year</a></li>
               <li><a href="year2.php">2nd Year </a></li>
               <li><a href="year3.php">3rd Year</a></li>
            </ul>
             
            <div class="search-box">
                <form action="" method="POST">
      <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
      </svg></button>
      <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
      </form>
    </div>
        </div>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data>
            <input type="file" name="file" id="">
            <select name="year" id="">
                <option value="sem1">1st Sem</option>
                <option value="sem2">2nd Sem</option>
            </select>
            <input type="file" name="csv" id="file">
            <input type="submit" value="Import" name="upload">
        </form>
        <form action="download.php" method="POST">
            
            <input type="submit" value="Export" name="export">
        </form>
    </div>
    
</body>

</html> -->