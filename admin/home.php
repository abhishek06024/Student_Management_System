<?php

session_start();

if(!isset($_SESSION['admin_uname']) || $_SESSION['admin_uname']!=true){
    header("location: index.php");
    exit;
}

require 'connection.php';
// echo "Welcome to home page"
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
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">

    <!-- <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> -->

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
               <li><a href="teacher2.php">Teacher Record</a></li>
               <li><a href="data.php">Add Student</a></li>
               <li><a href="signup.php">Add Teacher</a></li>
               <li><a href="logout.php">Logout</a></li>
               <li><a href="test.php">Advance Option</a></li>
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
      <form action="" method="POST">
            <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
            </svg></button>
        <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
      </form>
    </div>

        </div>
</header>
    <div class="container" style="background-color: whitesmoke;">
    <table class="content-table">
    <thead>
        <tr>
            <th>Sr. No</th>
            <th>Board Roll No.</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Branch</th>
            <th>Status</th>
            <th>Samester</th>
            <th colspan="2">Operations</th>
        </tr>
    </thead>
    <?php

if(isset($_POST['search'])){
    
    $box=$_POST['search_box'];
  $query =" SELECT * from first_year_students where Board_Roll_No like '%$box%' or email like '%$box%' or mobile like '%$box%' or first_name like '%$box%' or last_name like '%$box%' or father_name like '%$box%' or branch like '%$box%' or status like '%$box%' or sem like '%$box%' order by Board_Roll_No ASC";
//$query =" SELECT * from first_year_students where Board_Roll_No like '%$box%' or email";

// $query=" SELECT * FROM first_year_students WHERE Board_Roll_No like '%".$box."%' or email like '%$box%'  "; 

  $data= mysqli_query($connection,$query);
//   print_r($data);die();
  
  $total=mysqli_num_rows($data);
  // echo $result['Sr_No']."".$result['Board_Roll_No']."".$result['email']."".$result['mobile']."".$result['first_name']."".$result['last_name']."".$result['father_name']."".$result['branch']."".$result['status'].$result['sem'];
  if($total!=0)
  { 
    $count=1;
      while ($result=mysqli_fetch_assoc($data)) {
          echo"
          <tr>
          <td>$count</td>
          <td>".$result['Board_Roll_No']."</td>
          <td>".$result['email']."</td>
          <td>".$result['mobile']."</td>
          <td>".$result['first_name']."</td>
          <td>".$result['last_name']."</td>
          <td>".$result['father_name']."</td>
          <td>".$result['branch']."</td>
          <td>".$result['status']."</td>
          <td>".$result['sem']."</td>
          <td><a href = 'edit2.php?Roll_Number=$result[Board_Roll_No]&emil=$result[email]&mob=$result[mobile]&first=$result[first_name]&last=$result[last_name]&father=$result[father_name]&branch=$result[branch]&status=$result[status]&sem=$result[sem]'><input type='submit' value='Edit/Update' id='edit'></a></td>
         
          <td><a href = 'delete2.php?Roll_Number=$result[Board_Roll_No]' onclick='return checkdelete()'><input type='submit' value='Delete' id='del'></a></td>
          </tr>
          ";
          $count++;
      }
  }
  else{
      echo"No records found";
  }
}

  else
     {
    $query1="SELECT * FROM first_year_students  ORDER BY Board_Roll_No ASC";
    $data1= mysqli_query($connection,$query1);
    
    $total1=mysqli_num_rows($data1);
    // echo $result['Sr_No']."".$result['Board_Roll_No']."".$result['email']."".$result['mobile']."".$result['first_name']."".$result['last_name']."".$result['father_name']."".$result['branch']."".$result['status'].$result['sem'];
    if($total1!=0)
    {
        $count=1;
        while ($result=mysqli_fetch_assoc($data1)) {
            echo"
            <tr>
            <td>$count</td>
            <td>".$result['Board_Roll_No']."</td>
            <td>".$result['email']."</td>
            <td>".$result['mobile']."</td>
            <td>".$result['first_name']."</td>
            <td>".$result['last_name']."</td>
            <td>".$result['father_name']."</td>
            <td>".$result['branch']."</td>
            <td>".$result['status']."</td>
            <td>".$result['sem']."</td>
            <td><a href = 'edit.php?Roll_Number=$result[Board_Roll_No]&emil=$result[email]&mob=$result[mobile]&first=$result[first_name]&last=$result[last_name]&father=$result[father_name]&branch=$result[branch]&status=$result[status]&sem=$result[sem]'><input type='submit' value='Edit/Update' id='edit'></a></td>
           
            <td><a href = 'delete.php?Roll_Number=$result[Board_Roll_No]' onclick='return checkdelete()'><input type='submit' value='Delete' id='del'></a></td>
            </tr>
            ";
            $count++;
        }
    }
    else{
        echo"No records found";
    }
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