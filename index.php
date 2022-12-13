<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/nav2.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/ui.css">
    <style>

      
@import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
     body{
        font-family: 'Fredoka', sans-serif;
        background-image: linear-gradient( 155deg, #845ec2,#d65db1, #ff6f91, #ff9671, #ffc75f, #f9f871 );
        /* background: url('images/back2.jpg'); */
        /* background-repeat: no-repeat; */
        /* background-size: vh; */
}
</style>
</head>
<body>
<header class="primary-header">
        <div class="container">
            <div class="nav-wraper">
            <a href="#"><img src="images/vector.png" alt="Govt. Polytechnic Paonta Sahib" id="logo"></a>
            <button class="mobile-nav" aria-controls="primary-nav" aria-expanded="false">
                <img class="menu-open" src="images/menu-open.svg" alt="" aria-hidden="true">
                <img class="menu-close" src="images/menu-close.svg" alt="" aria-hidden="true">
                <span class="visually-hidden">Menu</span>
            </button>
            <nav class="primary-nav" id="primary-nav" >
                <ul arial-label="primary" role="list" class="nav-list" style="list-style: none;" >
                    <li><a href="#">Home</a></li>
                    <li id="dropdown"><a href="../index.php">Student Details</a>
                    <ul class="option">
                        <li><a href="year1.php">1st Year Students </a></li>
                        <li><a href="year2.php">2nd Year Students </a></li>
                        <li><a href="year3.php">Final Year Students </a></li>
                        <li><a href="passout.php">Passout Students </a></li>
                    </ul></li>
                    <li><a href="teacher.php">Teacher Details</a></li>
                    <li><a href="advance.php">Advance Option</a></li>
                    
                </ul>
                <div id="serch"><form action="" method="POST">
                    <button class="btn-search" name="search"><i class="fas fa-search"></i><svg viewBox="0 0 512 512" width="100" title="search">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg></button>
                <input type="text" name="search_box" class="input-search" placeholder="Type to Search...">
              </form></div>
                <a href="#" id="profifa-pull-left" class="button | display-sm-none display-md-inline-flex"><img src="images/namicon.png" alt="User"  class="uu" ></a>
                <div class="user" id="show" style="display: none ;" >
                    <a href="teacherlogin.php">Sign In</a> 
                </div>
            </nav>
         </div>
        </div>
    </header>

    <div class="cards" style="z-index: 10;">
        <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>1st Year Students</h2>
                <p>Click hear to get the details of all the active
                    students of First Year Students</p>
                    <a href="students/year1.php" class="btn">Get Details</a>
            </div>
        </div>
        <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>2nd Year Students</h2>
                <p>Click hear to get the details of all the active
                    students of Second Year Students</p>
                    <a href="students/year2.php" class="btn">Get Details</a>            
                </div>
        </div>
        <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>Final Year Students</h2>
                <p>Click hear to get the details of all the active
                    students of Final Year Students</p>
                    <a href="students/year3.php" class="btn">Get Details</a>
            </div>
        </div>
        <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>Detained Students</h2>
                <p>Click hear to get the details of all the Detained
                    Students</p>
                    <a href="students/detained.php" class="btn">Get Details</a>
            </div>
        </div>
        <!-- <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>Migrated Students</h2>
                <p>Click hear to get the details of all the Migrated Students</p>
                <a href="students/migrated.php" class="btn">Get Details</a>
            </div>
        </div> -->
        <div class="card">
            <div class="img">
  
                <img src="images/cardimg.jpg">
            </div>
            <div class="content">
                <h2>Pass Out Students</h2>
                <p>Click hear to get the details of all the pass out
                    students from Final Year Students</p>
                    <a href="students/passout.php" class="btn">Get Details</a>
            </div>
        </div>
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