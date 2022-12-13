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

      if(isset($_GET['submit'])){
        $Board=$_GET['Board'];
        $email=$_GET['email'];
        $phone=$_GET['phone'];
        $first_name=$_GET['first_name'];
        $last_name=$_GET['last_name'];
        $father_name=$_GET['father_name'];
        $branch=$_GET['branch'];
        $stat=$_GET['status'];
        $sem=$_GET['sem'];
        
        
            
        
        
            $query= " insert into `year1` (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,stat,sem) values ('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$status','$sem')";
            
            $run=mysqli_query($connection,$query);
            
            if ($run) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=index.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=signup.php');
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
    <title>Add Record</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/add.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        /* background: url('images/back2.jpg'); */
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
            <ul class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher.php">Teacher Record</a></li>
               <li><a href="add_data.php">Edit Record</a></li>
            </ul>
        </div>
    </header>
<div class="containers">
  <form method="GET" action="data.php">
    <div class="container">
      <h1>Add Student Data Form</h1>
      <h2>Please enter details correctly</h2>
      <form >
          <div class="form-group">
              <input type="text" name="Board" placeholder="Enter board roll number" required>
          </div>
          <div class="form-group">
              <input type="email" name="email" placeholder="Enter student email" required>
          </div>
          <div class="form-group">
              <input type="number" name="phone" placeholder="Enter student mobile number" required>
          </div>
          <div class="form-group">
              <input type="text" name="first_name" placeholder="Enter student first name" required>
          </div>
          <div class="form-group">
              <input type="text" name="last_name" placeholder="Enter student last name" required>
          </div>
          <div class="form-group">
              <input type="text" name="father_name" placeholder="Enter student father name" required>
          </div>
          <div class="form-group">
          <label for="branch"><h3>Choose a Branch:</h3></label>
             <select name="branch" id="branch">
                <option value="Computer">Computer</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Automobile">Automobile</option>
                <option value="Electrical">Electrical</option>
             </select>
          </div>
          <div class="form-group">
          <label for="status"><h3>Student Current Status:</h3></label>
             <select name="status" id="status">
                <option value="on">Active</option>
                <option value="off">Stuck off</option>
                
             </select>
        </div>
        <div class="form-group">
          <label for="sem"><h3>Choose a Semester:</h3></label>
             <select name="sem" id="sem">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
             </select>
          </div>
         
          <button class="btn" type="submit" name="submit">Submit</button>
          <!-- <input type="submit" value="Submit" class="btn" name="submit"> -->
          <!-- <div id="text1">
           <a href="index.php">Alrady have an account</a> -->
          </div>
          
       </div>
      </form>
  </div>
  </form>
</div>
</body>
</html>