<?php

{
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $pas=$_POST['pass'];

        $querry= "SELECT * FROM `teachers` WHERE EMAIL = '$email' && password = '$pas'";
        $execut=mysqli_query($connection,$querry);

        $total = mysqli_num_row($execut);
        
        echo $execut;
    }
}


if ($sem === "1st" || $sem === "2nd" ) {
            
        
        
    $query1= "INSERT INTO `year1` (`Board_Roll_No`, `email`, `phone`, `first_name`, `last_name`, `father_name`, `branch`, `status`, `sem`) VALUES (`$Board_RollN`, `$email`, `$phone`, `$first_name`, `$last_name`, `$father_name`, `$branch`, `$status`, `$sem`)";
    
    $execut=mysqli_query($connection,$query1); 
    
    if (!$execut) {
        echo '<script type="text/javascript">alert("Student not added pleass check your data")</script>';
        header('refresh: 0.1; URL=add_data.php');
}
    else {
        echo '<script type="text/javascript">alert("Student added sucessfully")</script>';
        header('refresh: 0.1; URL=add_data.php');
    }
}

elseif ($sem === "3rd" || $sem === "4th" ) {
        
    
    
    $query2= "INSERT INTO `year2` (`Board_Roll_No`, `email`, `phone`, `first_name`, `last_name`, `father_name`, `branch`, `status`, `sem`) VALUES (`$Board_RollN`, `$email`, `$phone`, `$first_name`, `$last_name`, `$father_name`, `$branch`, `$status`, `$sem`)";
    
    $execut2=mysqli_query($connection,$query2); 
    
    if (!$execut2) {
        echo '<script type="text/javascript">alert("Student not added pleass check your data")</script>';
        header('refresh: 0.1; URL=add_data.php');
}
    else {
        echo '<script type="text/javascript">alert("Student added sucessfully")</script>';
        header('refresh: 0.1; URL=add_data.php');
    }
}

elseif ($sem === "5th" || $sem === "6th" ) {
        
    
    
    $query3= "INSERT INTO `year3` (`Board_Roll_No`, `email`, `phone`, `first_name`, `last_name`, `father_name`, `branch`, `status`, `sem`) VALUES (`$Board_RollN`, `$email`, `$phone`, `$first_name`, `$last_name`, `$father_name`, `$branch`, `$status`, `$sem`)";
    
    $execut3=mysqli_query($connection,$query3); 
    
    if (!$execut3) {
        echo '<script type="text/javascript">alert("Student not added pleass check your data")</script>';
        header('refresh: 0.1; URL=add_data.php');
}
    else {
        echo '<script type="text/javascript">alert("Student added sucessfully")</script>';
        header('refresh: 0.1; URL=add_data.php');
    }
}


    }
}
 