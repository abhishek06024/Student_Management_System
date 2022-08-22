<?php
// include 'connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_management_db";

//Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['export']))
{
    $year=$_POST['year_csv'];


if($year == "First_year")
{

    header("Content-Type: text/csv; charset=utf-8");
header("Content-disposition: attachment; filename= First_Year_Students.csv");
$output=fopen("php://output","w");
fputcsv($output, array('Board Roll No','Email','Mobile','First Name','Last Name','Father Name','Branch','Status','Samester','Admission Date'));

$query1 = "SELECT * FROM first_year_students ORDER BY Board_Roll_No ASC";
$run1=mysqli_query($connection,$query1);
while($row = mysqli_fetch_assoc($run1))
{
        fputcsv($output,$row);
        
}
 fclose($output); 
}
elseif($year == "Second_year")
{

    header("Content-Type: text/csv; charset=utf-8");
    header("Content-disposition: attachment; filename= Second_Year_Students.csv");
    $output=fopen("php://output","w");
    fputcsv($output, array('Board Roll No','Email','Mobile','First Name','Last Name','Father Name','Branch','Status','Samester'));

$query2 = "SELECT * FROM second_year_students ORDER BY Board_Roll_No ASC";
$run2=mysqli_query($connection,$query2);
while($row = mysqli_fetch_assoc($run2))
{
        fputcsv($output,$row);
        
}
 fclose($output); 
}
elseif($year == "Final_year")
{

    header("Content-Type: text/csv; charset=utf-8");
    header("Content-disposition: attachment; filename= Final_Year_Students.csv");
    $output=fopen("php://output","w");
    fputcsv($output, array('Board Roll No','Email','Mobile','First Name','Last Name','Father Name','Branch','Status','Samester'));

$query3 = "SELECT * FROM final_year_students ORDER BY Board_Roll_No ASC";
$run3=mysqli_query($connection,$query3);
while($row = mysqli_fetch_assoc($run3))
{
        fputcsv($output,$row);
        
}
 fclose($output); 
}
}


?>