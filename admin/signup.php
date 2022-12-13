<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style2.css">
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
    
<div class="containers">
  <form action="teacherAdd.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <h1>Add Teacher</h1>
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
<?php
// include("reg.php");
?>


</body>
</html>
