<?php
if(isset($_GET['pass']) && $_GET['pass']=='geekcoin'){
    include 'includes/config.php';
    date_default_timezone_set("Asia/Singapore");

    //GET PARAMETERS
    $input = $_GET['input'];
    $machine_id = $_GET['machine_id'];
    $username = '';
    echo "Input: ".$input."<br>";

    //INSERT IN MACHINE_INFO
    $sql =  "SELECT income, username FROM machine_info WHERE machine_id = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Statement Error Machine!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $machine_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            //Insert Data
            $sum = $row['income'] + $input;
            $username = $row['username'];
            $sql =  "UPDATE machine_info SET income = ? WHERE machine_id = ?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'Update error Machine!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $sum, $machine_id);
                mysqli_stmt_execute($stmt);
            }
        }
        else{
            echo "Not Exist Machine";
        }
    }
    //INSERT IN DAILY_REPORT
    $date = date('Y-m-d');
    $sql =  "SELECT day_income FROM daily_report WHERE machine_id = ? and date = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Statement Error Report!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $machine_id, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            //Insert Data
            $sum = $row['day_income'] + $input;
            $sql =  "UPDATE daily_report SET day_income = ? WHERE machine_id = ? and date = ?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'Update error Report!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "sss", $sum, $machine_id, $date);
                mysqli_stmt_execute($stmt);
            }
        }
        else{
            $sql =  "INSERT INTO daily_report (machine_id, username, date, day_income) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'INSERT error New Report!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "ssss",$machine_id, $username, $date, $input);
                mysqli_stmt_execute($stmt);
            }
        }
    }
    //Display inserted in MACHINE_INFO
    // $sql =  "SELECT * FROM machine_info WHERE machine_id = ?";
    // $stmt = mysqli_stmt_init($con);
    // if(!mysqli_stmt_prepare($stmt, $sql)){
    //     echo 'Select Error!';
    // }
    // else{
    //     mysqli_stmt_bind_param($stmt, "ss", $machine_id, $username);
    //     mysqli_stmt_execute($stmt);
    //     $result = mysqli_stmt_get_result($stmt);
    //     echo "<br><br>Machine INFO: ";
    //     if($row = mysqli_fetch_assoc($result)){
    //         foreach($row as $x){
    //             echo "<br>".$x;
    //         }
    //     }
    // }

    //Display inserted in MACHINE_INFO
    // $sql =  "SELECT * FROM daily_report WHERE machine_id = ? and date = ?";
    // $stmt = mysqli_stmt_init($con);
    // if(!mysqli_stmt_prepare($stmt, $sql)){
    //     echo 'Select Error!';
    // }
    // else{
    //     mysqli_stmt_bind_param($stmt, "sss", $machine_id, $username, $date);
    //     mysqli_stmt_execute($stmt);
    //     $result = mysqli_stmt_get_result($stmt);
    //     echo "<br><br>Report: ";
    //     if($row = mysqli_fetch_assoc($result)){
    //         foreach($row as $x){
    //             echo "<br>".$x;
    //         }
    //     }
    // }
}
else{
    echo 'Wrong pass';
}
?>
