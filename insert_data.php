<?php
    // REMOTE
    //$host = "remotemysql.com";
    //$db_user = "yZpxzSMHd2";
    //$db_password = "6t2f7VjeNu";
    //$db_name = "yZpxzSMHd2";


    //Remote part2

    // $host = "sql6.freemysqlhosting.net";
    // $db_user = "sql6451475";
    // $db_name = "sql6451475";
    // $db_password = "kBnuw4Re4N";


    // LOCAL
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "coin_machine_database";
    //$db_name = "test";

    //Connection
    $con = mysqli_connect($host, $db_user, $db_password,$db_name);
    if(!$con){
        header("Location: ../index.php?CONNECTION ERROR");
        exit();
    }

    //GET PARAMETERS
    $input = $_GET['input'];
    $machine_id = $_GET['machine_id'];
    $username = $_GET['username'];
    echo "Input: ".$input."<br>";

    //INSERT IN MACHINE_INFO
    $sql =  "SELECT income FROM machine_info WHERE machine_id = ? and username = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Statement Error Machine!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $machine_id, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            //Insert Data
            $sum = $row['income'] + $input;
            $sql =  "UPDATE machine_info SET income = ? WHERE machine_id = ? and username = ?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'Update error Machine!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "sss", $sum, $machine_id, $username);
                mysqli_stmt_execute($stmt);
            }
        }
        else{
            echo "Not Exist Machine";
        }
    }
    //INSERT IN DAILY_REPORT
    $date = date('Y-m-d');
    $sql =  "SELECT day_income FROM daily_report WHERE machine_id = ? and username = ? and date = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Statement Error Report!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "sss", $machine_id, $username, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            //Insert Data
            $sum = $row['day_income'] + $input;
            $sql =  "UPDATE daily_report SET day_income = ? WHERE machine_id = ? and username = ? and date = ?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'Update error Report!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "ssss", $sum, $machine_id, $username, $date);
                mysqli_stmt_execute($stmt);
            }
        }
        else{
            $sql =  "INSERT INTO daily_report (machine_id, username, date, day_income) VALUES (?,?,?,1)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'INSERT error New Report!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "sss",$machine_id, $username, $date);
                mysqli_stmt_execute($stmt);
            }
        }
    }
    //Display inserted in MACHINE_INFO
    // $sql =  "SELECT * FROM machine_info WHERE machine_id = ? and username = ?";
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
    // $sql =  "SELECT * FROM daily_report WHERE machine_id = ? and username = ? and date = ?";
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
?>
