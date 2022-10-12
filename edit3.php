<?php
// error_reporting(0);
// session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: login.php");
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


if(isset($_GET['submit'])){
    $board=$_GET['Board'];
    $email=$_GET['email'];
    $mobile=$_GET['phone'];
    $first=$_GET['first_name'];
    $last=$_GET['last_name'];
    $father=$_GET['father_name'];
    $branch=$_GET['branch'];
    $stats=$_GET['status'];
    $sem=$_GET['sem'];

/*  This page code is kind of sililar like edit.php some of the javascript function and variables or table name is changed  */
if ($stats === "Stuck Off") {
    //when user select migrated in edit section
    
    $date1 = strtr($_REQUEST['sdate'], '/', '-');

    $dquery = "INSERT INTO `second_year_stuckoff_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,stuckOff_date)VALUES('$board','$email','$mobile','$first','$last','$father','$branch','$stats','$sem','$date1')";

    $dquerycheck = mysqli_query($connection, $dquery);



    if ($dquerycheck) {
        echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
        header('refresh: 0.1; URL=year3.php');
    } else {
        echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
        header('refresh: 0.1; URL=year3.php');
    }
    
}
elseif ($stats === "Detained") {
    //when user select migrated in edit section
    
    $date1 = strtr($_REQUEST['mdate'], '/', '-');

    $dquery = "INSERT INTO `detained_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,detained_date)VALUES('$board','$email','$mobile','$first','$last','$father','$branch','$stats','$sem','$date1')";

    $dquerycheck = mysqli_query($connection, $dquery);



    if ($dquerycheck) {
        echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
        header('refresh: 0.1; URL=year3.php');
    } else {
        echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
        header('refresh: 0.1; URL=year3.php');
    }
    
}

elseif ($stats === "Migrated") {
    //when user select migrated in edit section
    $migrate = $_GET['migrt'];
    $date1 = strtr($_REQUEST['mdate'], '/', '-');

    if ($sem === "1st" || $sem === "2nd") {



        $check = "INSERT INTO `first_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$board','$email','$mobile','$first','$last','$father','$branch','$stats','$sem','$migrate','$date1')";

        $execute2 = mysqli_query($connection, $check);



        if ($execute2) {
            echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
            header('refresh: 0.1; URL=year3.php');
        } else {
            echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
            header('refresh: 0.1; URL=year3.php');
        }
    }

    elseif ($sem === "3rd" || $sem === "4th") {



        $check = "INSERT INTO `second_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$board','$email','$mobile','$first','$last','$father','$branch','$stats','$sem','$migrate','$date1')";

        $execute2 = mysqli_query($connection, $check);



        if ($execute2) {
            echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
            header('refresh: 0.1; URL=year3.php');
        } else {
            echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
            header('refresh: 0.1; URL=year3.php');
        }
    }

    elseif($sem === "5th" || $sem === "6th") {



        $check = "INSERT INTO `final_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$board','$email','$mobile','$first','$last','$father','$branch','$stats','$sem','$migrate','$date1')";

        $execute2 = mysqli_query($connection, $check);



        if ($execute2) {
            echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
            header('refresh: 0.1; URL=year3.php');
        } else {
            echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
            header('refresh: 0.1; URL=year3.php');
        }
    }
    

  }

else{

  $query= "UPDATE `final_year_students` SET Board_Roll_No='$board',email='$email',mobile='$mobile',first_name='$first',last_name='$last',father_name='$father',branch='$branch',status='$stats',sem='$sem' WHERE  Board_Roll_No='$board' OR email='$email' OR mobile='$mobile' OR father_name='$father'";

  $run=mysqli_query($connection,$query);
  if ($run) {
    echo '<script type="text/javascript">alert("Record has been updated in Third Year Database")</scrip>';
    header('refresh: 0.1; URL=year3.php');
  }
    else {
    
    echo '<script type="text/javascript">alert("Faild to update record in Third Year Database")</script>';
    header('refresh: 0.1; URL=year3.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/nav2.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background: url('images/back2.jpg');
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}
   
    </style>
</head>
<body>
    <?php
    // require 'add.php';
    ?>
<header class="header">
        <div class="mid">
            <ul    l class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher.php">Teacher Record</a></li>
               <li><a href="data.php">Add Record</a></li>
               <li><a href="logout.php">Logout</a></li>
               <li><a href="test.php">Advance Option</a></li>
            </ul>
        </div>
    
        <header class="primary-header">
        <div class="container">
            <div class="nav-wraper">
            <a href="#"><img src="vector.png" alt="Govt. Polytechnic Paonta Sahib" id="logo"></a>
            <button class="mobile-nav" aria-controls="primary-nav" aria-expanded="false">
                <img class="menu-open" src="menu-open.svg" alt="" aria-hidden="true">
                <img class="menu-close" src="menu-close.svg" alt="" aria-hidden="true">
                <span class="visually-hidden">Menu</span>
            </button>
            <nav class="primary-nav" id="primary-nav" >
                <ul arial-label="primary" role="list" class="nav-list" style="list-style: none;" >
                    <li><a href="#">Home</a></li>
                    <li id="dropdown"><a href="#">Student Details</a>
                    <ul class="option">
                        <li><a href="#">1st Year Students </a></li>
                        <li><a href="#">2nd Year Students </a></li>
                        <li><a href="#">Final Year Students </a></li>
                        <li><a href="#">Passout Students </a></li>
                    </ul></li>
                    <li><a href="#">Teacher Details</a></li>
                    <li><a href="#">Advance Option</a></li>
                    <li id="log-out"><a href="#">Sign In</a></li>
                </ul>
                <div id="serch"><form action="" method="POST">
                    <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg></button>
                <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
              </form></div>
                <a href="#" id="profifa-pull-left" class="button | display-sm-none display-md-inline-flex"><img src="namicon.png" alt="User"  class="uu" ></a>
                <div class="user" id="show" style="display: none ;" >
                    <a href="#">Sign In</a> 
                </div>
            </nav>
         </div>
        </div>
    </header>
<div class="containers">
  <form method="GET">
    <div class="container">
      <!-- <h1>Add Student Data Form</h1> -->
      <h1>Please update details correctly</h1>
      <form >
          <?php
            $board=$_GET['Roll_Number'];
            $email=$_GET['emil'];
            $mobile=$_GET['mob'];
            $first=$_GET['first'];
            $last=$_GET['last'];
            $father=$_GET['father'];
            $branch=$_GET['branch'];
            $status=$_GET['status'];
            $sem=$_GET['sem'];
          ?>
          <div class="form-group">
              <input type="text" value="<?php echo "$board"?>" name="Board" placeholder="Enter board roll number" required>
          </div>
          <div class="form-group">
              <input type="email" value="<?php echo "$email"?>" name="email" placeholder="Enter student email" required>
          </div>
          <div class="form-group">
              <input type="number" value="<?php echo "$mobile"?>" name="phone" placeholder="Enter student mobile number" required>
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$first"?>" name="first_name" placeholder="Enter student first name" required>
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$last"?>" name="last_name" placeholder="Enter student last name" required>
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$father"?>" name="father_name" placeholder="Enter student father name" required>
          </div>
          <div class="form-group">
          <label for="branch"><h3>Choose a Branch:</h3></label>
             <select name="branch" id="branch">
                <option value="Computer"<?php if($branch == 'Computer'){ echo "selected"; } ?>>Computer</option>
                <option value="Mechanical"<?php if($branch == 'Mechanical'){ echo "selected"; } ?>>Mechanical</option>
                <option value="Automobile"<?php if($branch == 'Automobile'){ echo "selected"; } ?>>Automobile</option>
                <option value="Electrical"<?php if($branch == 'Electrical'){ echo "selected"; } ?>>Electrical</option>
             </select>
          </div>
          <div class="form-group" id="st">
          <label for="status"><h3>Student Current Status:</h3></label>
             <select name="status" id="status" onchange="chedit3();">
                <option value="Active" <?php if($status == 'Active'){ echo "selected"; } ?>>Active</option>
                <option value="Stuck off" id="st3" <?php if($status == 'Stuck off'){ echo "selected"; } ?>>Stuck off</option>
                <option id="m3" value="Migrated">Migrated</option>
                <option id="dt3" value="Detained">Detained</option>
             </select>
        </div>
        <div class="form-group">
          <label for="sem"><h3>Choose a Semester:</h3></label>
             <select name="sem" id="sem">
                <option value="1st" <?php if($sem == '1st'){ echo "selected"; } ?>>1st</option>
                <option value="2nd"<?php if($sem == '2nd'){ echo "selected"; } ?>>2nd</option>
                <option value="3rd"<?php if($sem == '3rd'){ echo "selected"; } ?>>3rd</option>
                <option value="4th"<?php if($sem == '4th'){ echo "selected"; } ?>>4th</option>
                <option value="5th"<?php if($sem == '5th'){ echo "selected"; } ?>>5th</option>
                <option value="6th"<?php if($sem == '6th'){ echo "selected"; } ?>>6th</option>
             </select>
          </div>
         
          <button class="btn" type="submit" name="submit">Update Details</button>
          <!-- <input type="submit" value="Submit" class="btn" name="submit"> -->
          <!-- <div id="text1">
           <a href="index.php">Alrady have an account</a> -->
          </div>
          
       </div>
      </form>
  </div>
  </form>
</div>
<script src="js/func.js"></script>
<script src="nav.js"></script>
    <script src="jquery-3.6.0.js"></script>
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