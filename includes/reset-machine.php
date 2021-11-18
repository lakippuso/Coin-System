<?php
    require 'config.php';
    session_start();
    if(!isset($_SESSION['session_username'])){
        header('Location: ../index.php?notloggedin!');
        exit();
    }

    $machine_id = $_GET['machine_id'];
    $username = $_SESSION['session_username'];
    //GET INCOME
    $sql = 'SELECT income FROM machine_info WHERE machine_id = ? and username = ?';
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Get statement error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $machine_id, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){}
        else{
            echo 'No result for selection';
        }
    }
    //INSERT INTO HISTORY PAGE
    $date = date('Y-m-d');
    $sql = 'INSERT INTO history (machine_id, username, reset_date, total_income)  VALUE (?, ?, ?, ?) ' ;
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Insert statement error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ssss", $machine_id, $username, $date, $row['income']);
        mysqli_stmt_execute($stmt);
    }
    //RESET INCOME TO ZERO
    $sql = 'UPDATE machine_info SET income = 0 WHERE machine_id = ? and username = ?' ;
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Update statement error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $machine_id, $username);
        mysqli_stmt_execute($stmt);
    }

    header('Location: ../machine.php');
    exit();