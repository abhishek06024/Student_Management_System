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


if (isset($_GET['update'])) {
    
    $first = $_GET['first_name'];
    $last = $_GET['last_name'];
    $email = $_GET['email'];
    $mobile = $_GET['phone'];
    $designation = $_GET['designation'];
    $depart = $_GET['department'];
    $gender=$_GET['gender'];
    

   


// below samester condition is for normal edit     


  
    // if ($sem === "1st" || $sem === "$2nd") {

        $query = "UPDATE `teachers` SET first_name='$first',last_name='$last',email='$email',phone='$mobile',designation='$designation',department='$depart',gender='$gender' WHERE  email='$email' OR phone='$mobile'";
      
        $run = mysqli_query($connection, $query);

        if ($run) {
            echo '<script type="text/javascript">alert("Record of teacher has been updated ")</scrip>';
            header('refresh: 0.1; URL=teacher2.php');
        } else {

            echo '<script type="text/javascript">alert("Faild to update record of teacher")</script>';
            header('refresh: 0.1; URL=teacher2.php');
        }
    

   

   
  }

// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/hom.css">
    <link rel="stylesheet" href="css/hom2.css">
    <link rel="stylesheet" href="css/search.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');

        body {
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
    < class="header">
        <div class="mid" style="background-color: white ;">
            <ul class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher2.php">Teacher Record</a></li>
               <li><a href="data.php">Add Student</a></li>
               <li><a href="signup.php">Add Teacher</a></li>
               <li><a href="logout.php">Logout</a></li>
               <li><a href="test.php">Advance Option</a></li>
            </ul>
        </div>
    
         
</header>
    <div class="containers" style="border:4px solid green;">
        <form method="GET">
            <div class="container">
                <!-- <h1>Add Student Data Form</h1> -->
                <h1>Please update details correctly</h1>
                <form>
                   <?php

                        $first = $_GET['first'];
                        $last = $_GET['last'];
                        $email = $_GET['emal'];
                        $mobile2 = $_GET['mob'];
                        $des = $_GET['desc'];
                        $depart = $_GET['dpt'];
                        $gender=$_GET['gendr'];  

                    ?>

<div class="form-group" >
              <input type="text" value="<?php echo "$first" ?>" name="first_name" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$last" ?>" name="last_name" placeholder="Enter your last name" required>
          </div>
          <div class="form-group">
              <input type="email" value="<?php echo "$email" ?>" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
              <input type="number" value="<?php echo "$mobile2" ?>" name="phone" placeholder="Enter your mobile number" required minlength="10" maxlength="10">
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$des" ?>" name="designation" placeholder="Designation" required>
          </div>
          <div class="form-group">
              <input type="text" value="<?php echo "$depart" ?>" name="department" placeholder="Enter your department" required>
          </div>
          <div class="form-group">
              <h3>Select your Gender</h3><br>
              <div class="gender"> 
              <label for="">Male
                  <input type="radio" name="gender"  <?php if ($gender == 'Male') { echo "checked"; } ?> id="male"value="Male" required>
                  <span class="check"></span>
                </label>
            </div>
            <div class="gender">
              <label for="" id="female">Female
                  <input type="radio" name="gender" <?php if ($gender == 'Female') { echo "checked"; } ?> id="female" value="Female" required>
              </label>
            </div>
            
                    </div>
                  

                    <button class="btn" type="submit" name="update">Update Details</button>
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
</body>

</html>