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
               <li><a href="add_data.php">Edit Record</a></li>
            </ul>
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
          <div class="form-group">
          <label for="status"><h3>Student Current Status:</h3></label>
             <select name="status" id="status">
                <option value="Active" <?php if($status == 'Active'){ echo "selected"; } ?>>Active</option>
                <option value="Stuck_off" <?php if($status == 'Stuck_off'){ echo "selected"; } ?>>Stuck off</option>
                
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
</body>
</html>