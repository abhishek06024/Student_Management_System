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

      if(isset($_POST['submit'])){
        $Board=$_POST['Board'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $father_name=$_POST['father_name'];
        $branch=$_POST['branch'];
        $statee=$_POST['status'];
        $sem=$_POST['sem'];
        
        // $mdat= strtotime($migrate);
        // $mdate=date('Y-m-d', strtotime($_POST['mdate']));
        //  $mdateee=date_format($mdat, 'Y-m-d');
         //$dom=date("Y-m-d",$migrate);
        //  $dom = date('Y-m-d', strtotime($_POST['migrt']));
        
// echo date('Y-m-d', strtotime($date1));

        // echo$date1;
        $sam=$sem;

        if($statee === "Detained"){
            $date1 = strtr($_REQUEST['mdate'], '/', '-');

            $running= "INSERT INTO `detained_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,detained_date)VALUES('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem','$date1')";
            
            $checking=mysqli_query($connection,$running);
            print_r($checking);
            die();
            
            
            if ($checking) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');

        }
    }
        
        if($statee === "Migrated"){

            $migrate=$_POST['migrt'];
            $date1 = strtr($_REQUEST['mdate'], '/', '-');

            if($sam === "1st" || $sam === "2nd"){

                

                $check= "INSERT INTO `first_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem','$migrate','$date1')";
            
            $execute2=mysqli_query($connection,$check);
            
            
            
            if ($execute2) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }

            }
            if($sam === "3rd" || $sam === "4th"){

                $check2= "INSERT INTO `second_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem','$migrate','$date1')";
            
            $execute3=mysqli_query($connection,$check2);
            
            
            
            if ($execute3) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }

            }
            if($sam === "5th" || $sam === "6th"){

                $check3= "INSERT INTO `final_year_migrated_students`(Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,migrated_collage,migration_date)VALUES('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem','$migrate','$date1')";
            
            $execute4=mysqli_query($connection,$check3);
            
            
            
            if ($execute4) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }

            }

        }

        else{
            
        if ($sam === "1st" || $sam === "2nd" ) {
        
            $query1= " insert into `first_year_students` (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) values ('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem')";
            
            $run1=mysqli_query($connection,$query1);
            
            if ($run1) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }
        
        
            
        }
        elseif ($sam === "3rd" || $sam === "4th" ) {
        
            $query2= " insert into `second_year_students` (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) values ('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem')";
            
            $run2=mysqli_query($connection,$query2);
            
            if ($run2) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }
        
        
            
        }
        elseif ($sam === "5th" || $sam === "6th" ) {
        
            $query3= " insert into `final_year_students` (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) values ('$Board','$email','$phone','$first_name','$last_name','$father_name','$branch','$statee','$sem')";
            
            $run3=mysqli_query($connection,$query3);
            
            if ($run3) {
                echo '<script type="text/javascript">alert("Your data has been inserted sucessfully")</script>';
                header('refresh: 0.1; URL=data.php');
            }
            else {
                echo '<script type="text/javascript">alert("Your account was not inserted pleass check your data")</script>';
                header('refresh: 0.1; URL=data.php');
            }
        
        
            
        }
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
            <ul class="navbar">
               <li><a href="home.php">Student Record</a></li>
               <li><a href="teacher.php">Teacher Record</a></li>
               <li><a href="data.php">Add Record</a></li>
            </ul>
        </div>
    </header>
<div class="containers">
  <form method="POST" action="#">
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
              <!-- <input type="date" name="migrt" placeholder="Enter student fath" required> -->
          </div>
          <div class="form-group">
          <label for="branch"><h3>Choose a Branch:</h3></label>
             <select name="branch" id="branch">
                <option value="Computer" >Computer</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Automobile">Automobile</option>
                <option value="Electrical" >Electrical</option>
             </select>
          </div>
          <div class="form-group" id="stat">
          <label for="status"><h3>Student Current Status:</h3></label>
             <select name="status" id="status" class="status" onchange="migrat();">
                <option value="Active">Active</option>
                <option value="Stuck Off">Stuck off</option>   
                <option id="mtm" value="Migrated">Migrated</option>   
                <option id="dtm" value="Detained">Detained</option>   
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
<script src="js/func.js"></script>
</body>
</html>