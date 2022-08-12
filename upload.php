<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_management_db";

     $connection = mysqli_connect($servername, $username, $password, $dbname);
$samester=$_POST['sem'];
if(isset( $_FILES['csv'] )) :
  $csv_file = $_FILES['csv']['tmp_name'];
  if(is_file( $csv_file)) :
    if(($handle = fopen($csv_file,"r")) !== FALSE) :
      if ($samester== "First Year") {
        
       while (($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE)  {
       $num = count($csv_data);
        for ($c=0; $c < $num; $c++):
          $colum[$c] = $csv_data[$c]; 
          $find1="SELECT * FROM first_year_students WHERE Board_Roll_No = '$colum[0]'";
          $data1= mysqli_query($connection,$find1);
          $total1=mysqli_num_rows($data1);
        endfor;     
        if($total1>0){
          continue;
      }
      else{   
        $inserted=$connection->query("INSERT INTO first_year_students 
        (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) 
        values ('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]')");
       }
       }
      }
      if($samester == "Second Year")
      {

        while (($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE)  {
          $num = count($csv_data);
           for ($c=0; $c < $num; $c++):
             $colum[$c] = $csv_data[$c]; 
             $find2="SELECT * FROM second_year_students WHERE Board_Roll_No = '$colum[0]'";
          $data2= mysqli_query($connection,$find2);
          $total2=mysqli_num_rows($data2);
           endfor;  
             if($total2>0){
            continue;
                 }
           else{      
           $inserted=$connection->query("INSERT INTO second_year_students 
           (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) 
           values ('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]')");
          }
        }

      }
      if($samester == "Final Year")
      {

        while (($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE)  {
          $num = count($csv_data);
           for ($c=0; $c < $num; $c++):
             $colum[$c] = $csv_data[$c];
             $find3="SELECT * FROM final_year_students WHERE Board_Roll_No = '$colum[0]'";
          $dat3a= mysqli_query($connection,$find3);
          $total3=mysqli_num_rows($data3); 
           endfor; 
           if($total3>0){
            continue;
              }
           else{ 
           $inserted=$connection->query("INSERT INTO final_year_students 
           (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) 
           values ('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]')");
            }

          }

      }
       $msg = "Data uploaded successfully.";
       fclose($handle);
    else :
      $msg = "unable to read the format try again";
    endif;
  else :
    $msg = "CSV format File not found";
  endif;
else : 
    $msg = "Somthing went wrong. Please try again.";
endif;
echo $msg;



// session_start();

// if(!isset($_SESSION['uname']) || $_SESSION['uname']!=true){
//     header("location: index.php");
//     exit;
// }

// echo "Welcome to home page"
// include 'connection.php';
// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // $dbname = "student_data";

// // //Create a connection
// // $connection = mysqli_connect($servername, $username, $password, $dbname);


// if(isset( $_FILES['csv'] )) :
//     print_r($_FILES);
//     die();
//     $csv_file = $_FILES['csv']['tmp_name'];
//     if(is_file( $csv_file)) :
//       if(($handle = fopen($csv_file,"r")) !== FALSE) :
//          while (($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE)  {
//          $num = count($csv_data);
//           for ($c=0; $c < $num; $c++):
//             $colum[$c] = $csv_data[$c]; 
//           endfor;         
//           $inserted=$connection->query("INSERT INTO first_year_students 
//           (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) 
//           values ('$colum[0]','$colum[1]','$colum[2]','$colum[3]','$colum[4]','$colum[5]','$colum[6]','$colum[7]','$colum[8]')");
//          }
//          $msg = "Data uploaded successfully.";
//          fclose($handle);
//       else :
//         $msg = "unable to read the format try again";
//       endif;
//     else :
//       $msg = "CSV format File not found";
//     endif;
//   else :
//       $msg = "Please try again.";
//   endif;
//   echo $msg;
  


// if(isset($_POST["upload"])){
//     $first_year=$_POST['year'];
//     $filename=$_FILES["file"] ["tmp_name"];
//     if($_FILES["file"]["size"]>0)
//     {
        
//         $file=fopen($filename, "r");
//         // if($first_year=="sem1"|| $first_year=="sem2")
//         // {
//             while (($getData = fgetcsv($file, 10000, ","))!==FALSE)
            
//             {
               
//                  $query= " INSERT into first_year_students 
//                  (Sr_No,Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem) 
//                  values ('.$getData[0].','.$getData[1].','.$getData[2].','.$getData[3].','.$getData[4].','.$getData[5].','.$getData[6].','.$getData[7].','.$getData[8].','$.getData[9].')";
//                 $result= mysqli_query($connection, $query);

//                 if(!isset($result))
//                 {
//                   echo "<script type=\"text/javascript\">
//                       alert(\"Invalid File:Please Upload CSV File.\");
//                       </script>"; 
//                       header('refresh:0.1; URL=test.php');   
//                 }
//                 else {
//                     echo "<script type=\"text/javascript\">
//                     alert(\"CSV File has been successfully Imported.\");
//                   </script>";
//                   header('refresh: 0.1; URL=test.php');
//                 }

//             }
//         // }
//     }
//     // fclose($file);
// }








?>