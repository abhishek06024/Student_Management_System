<?php
session_start();

if(!isset($_SESSION['admin_uname']) || $_SESSION['admin_uname']!=true){
    header("location: index.php");
    exit;
}


require 'connection.php';
//include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
<link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/hom2.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/nav2.css">
    </head>
<body style="background-image: linear-gradient( 155deg, #845ec2,#d65db1, #ff6f91, #ff9671, #ffc75f, #f9f871 );">
    
            
<header class="primary-header">
        <div class="container">
            <div class="nav-wraper">
            <a href="home.php"><img src="images/vector.png" alt="Govt. Polytechnic Paonta Sahib" id="logo"></a>
            <button class="mobile-nav" aria-controls="primary-nav" aria-expanded="false">
                <img class="menu-open" src="images/menu-open.svg" alt="" aria-hidden="true">
                <img class="menu-close" src="images/menu-close.svg" alt="" aria-hidden="true">
                <span class="visually-hidden">Menu</span>
            </button>
            <nav class="primary-nav" id="primary-nav" >
                <ul arial-label="primary" role="list" class="nav-list" style="list-style: none;" >
                    <li><a href="home.php">Home</a></li>
                    <li id="dropdown"><a href="../index.php">Student Details</a>
                    <ul class="option">
                        <li><a href="home.php">1st Year Students </a></li>
                        <li><a href="year2.php">2nd Year Students </a></li>
                        <li><a href="year3.php">Final Year Students </a></li>
                        <li><a href="passout.php">Passout Students </a></li>
                    </ul></li>
                    <li><a href="teacher2.php">Teacher Details</a></li>
                    <li><a href="advance.php">Advance Option</a></li>
                    
                </ul>
                <div id="serch"><form action="" method="POST">
                    <button class="btn-search2" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg></button>
                <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
              </form></div>
              <a href="#" id="profifa-pull-left" class="button | display-sm-none display-md-inline-flex"><?php  
                $email=$_SESSION['admin_uname'];
                $query3="select * from admin where email='$email' ";
                $data3= mysqli_query($connection,$query3);
                $total3=mysqli_num_rows($data3);
                // print_r($total3);
                // print_r($data3);
                
                if($total3!=0)
    {
        
        while ($result=mysqli_fetch_assoc($data3)) {
                // print_r($result['admin_image']);
                // die();
            echo"
            <img src ='".$result['admin_image']."' height='100px' width='100px' alt='User'  class='uu'>
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

<div style="border: 5px solid yellow ; margin-top:1em;">
<h3>Bulk Data upload</h3>
    <form action="upload.php" enctype="multipart/form-data" method="post"/>
        <label>Import csv file :</label>
        <input type="file" name="csv" id="csv" class="large"/>
        <div class="form-group">
          <label for="sem"><h3>Choose a Year:</h3></label>
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
           <select name="year_csv" id="">
                <option value="First_year">First Year</option>
                <option value="Second_year">Second Year</option>
                <option value="Final_year">Final Year</option>
            </select>
           <input type="submit" value="Export" name="export"> 
        </form>
    </div>

    <div style="border: 5px solid yellow ;">
    <h3>Bulk Data export in PDF</h3>
        <form action="pdftest.php" method="POST">
           <label>Export PDF file</label>
           <select name="year_pdf" id="">
                <option value="First_year">First Year</option>
                <option value="Second_year">Second Year</option>
                <option value="Final_year">Final Year</option>
            </select>
           <input type="submit" value="Export PDF" name="expdf"> 
        </form>
    </div>
    <div style="border: 5px solid yellow ;">
    <h3>Transfer Students from one tabls to another table</h3>
        <form action="transfer.php" method="POST">
            <label for="year_from">select year to from transfer</label>
            <select name="year_from" id="">
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Final Year">Final Year</option>
            </select>
            <label for="year_to">Select Year to transfer</label>
            <select name="year_to"  id="">
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Final Year">Final Year</option>
            </select>
           <label>Select semester </label>
           <select name="sem" id="">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
           <input type="submit" value="Transfer Studentd" name="transfer"> 
        </form>
    </div>

    <div style="border: 5px solid yellow ;">
    <h3>Passout Students</h3>
        <form action="transfer.php" method="POST">
           <label>Click to Passout final students </label>
           <input type="date" name="passdt" id="">
           <input type="submit" value="Pass Out" name="pass">
        </form>
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



<!-- <?php


// session_start();

// if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
//     header("location: index.php");
//     exit;
// }

// echo "Welcome to home page"
// require 'connection.php';
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