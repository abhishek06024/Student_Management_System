<?php

include 'connection.php';

if(isset($_POST['transfer']))
{
    $from=$_POST['year_from'];
    $to=$_POST['year_to'];
    $wchSem=$_POST['sem'];
    if($from === "First Year" & $to === "Second Year"){

        $sql=mysqli_query($connection,"INSERT INTO second_year_students SELECT * FROM first_year_students");
        $check=mysqli_query($connection,"SELECT Board_Roll_No FROM  first_year_students");
        while ($row=mysqli_fetch_assoc($check)) {
               $addsam=mysqli_query($connection,"UPDATE second_year_students SET sem='$wchSem' WHERE Board_Roll_No='$row[Board_Roll_No]'");
        }



    }
    elseif($from === "Second Year" & $to === "Final Year"){

        $sql=mysqli_query($connection,"INSERT INTO final_year_students SELECT * FROM second_year_students");
        $check=mysqli_query($connection,"SELECT Board_Roll_No FROM  second_year_students");
        while ($row=mysqli_fetch_assoc($check)) {
               $addsam=mysqli_query($connection,"UPDATE final_year_students SET sem='$wchSem' WHERE Board_Roll_No='$row[Board_Roll_No]'");
        }
        
    }

    elseif($from === "First Year" & $to === "Final Year")
    {
        echo '<script type="text/javascript">alert("Invalid selection of years")</script>';
            header('refresh: 0.1; URL=test.php');
    }
    elseif($from === "Final Year" & $to === "First Year")
    {
        echo '<script type="text/javascript">alert("Invalid selection of years")</script>';
            header('refresh: 0.1; URL=test.php');
    }
    elseif($from === "Second Year" & $to === "First Year")
    {
        echo '<script type="text/javascript">alert("Invalid selection of years")</script>';
            header('refresh: 0.1; URL=test.php');
    }
    elseif($from === "Final Year" & $to === "Second Year")
    {
        echo '<script type="text/javascript">alert("Invalid selection of years")</script>';
            header('refresh: 0.1; URL=test.php');
    }
    
}

if(isset($_POST['pass']))
{
    $date2 = $_POST['passdt'];
    // $date1=date('Y', strtotime($date1));
    $date2=date("Y", strtotime($date2)); //if you wanr to add full date just change the date farmat of date function
    // $query=mysqli_query($connection,"INSERT INTO passout_students SELECT *  FROM final_year_students");
    $query=mysqli_query($connection,"INSERT INTO passout_students (Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,admission_date) SELECT Board_Roll_No,email,mobile,first_name,last_name,father_name,branch,status,sem,admission_date  FROM final_year_students");
    // // ALTER TABLE `migrated_students` CHANGE `passout_date` `passout_date` YEAR NOT NULL;
    $q  = mysqli_query($connection,"SELECT  Board_Roll_No FROM final_year_students");
    while ($row=mysqli_fetch_assoc($q))
    {
    
       $pq = mysqli_query($connection, "UPDATE passout_students SET passout_date='$date2' WHERE Board_Roll_No='$row[Board_Roll_No]'");
       
    }
}
?>