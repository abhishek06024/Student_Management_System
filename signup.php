<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" style="border-radius: 50% ;">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/nav2.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background: url('images/triangle.png');
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}
   
    </style>
</head>
<body>

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
  <form action="reg.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <h1>Sign Up Form</h1>
      <h2>Please enter your details correctly</h2>
      <form action="" >
          <div class="form-group">
              <input type="text" name="first_name" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
              <input type="text" name="last_name" placeholder="Enter your last name" required>
          </div>
          <div class="form-group">
              <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
              <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="form-group">
              <input type="password" name="cnf_password" placeholder="Re-enter your password" required>
          </div>
          <div class="form-group">
              <input type="number" name="phone" placeholder="Enter your mobile number" required minlength="10" maxlength="10">
          </div>
          <div class="form-group">
              <input type="text" name="designation" placeholder="Designation" required>
          </div>
          <div class="form-group">
              <input type="text" name="department" placeholder="Enter your department" required>
          </div>
          <div class="form-group">
              <h3>Select your Gender</h3>
              <div class="gender"> 
              <label for="">Male
                  <input type="radio" name="gender" id="male"value="Male" required>
                  <span class="check"></span>
                </label>
            </div>
            <div class="gender">
              <label for="" id="female">Female
                  <input type="radio" name="gender" id="female" value="Female" required>
              </label>
            </div>
            <div class="form-group">
              <label for="" id="female">Upload passport size photo
                 <input type="file" name="img" >
              </label>
            </div>
            
          </div>
          <button class="btn" type="submit" name="submit">Submit</button>
          <!-- <input type="submit" value="Submit" class="btn" name="submit"> -->
          <!-- <div id="text1">
           <a href="index.php">Alrady have an account</a>
       </div> -->
       <div id="text1">
                <a href="index.php">Login to an account</a>
            </div>
      </form>
  </div>
  </form>
</div>

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
