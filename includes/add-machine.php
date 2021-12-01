<?php
    require 'config.php';
    session_start();
    if(!isset($_SESSION['session_username'])){
        header('Location: ../index.php?notloggedin!');
        exit();
    }
    $machine_id = $_POST['machine_id'];
    $machine_name = $_POST['machine_name'];
    $machine_type = $_POST['machine_type'];
    $username = $_SESSION['session_username'];

    $date = date("Y-m-d");

    $sql =  "SELECT * FROM machine_info WHERE machine_id = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'Statement Error Machine!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $machine_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            header('Location: ../machine.php?error=Machine is already registered!');
            exit();
        }
        else{
            //INSERT NEW MACHINE
            $sql =  "INSERT INTO machine_info (machine_id, machine_name, machine_type, username, income , date_created) VALUES (?, ?, ?, ?, 0, ?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'Update error Machine!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "sssss", $machine_id, $machine_name, $machine_type, $username, $date);
                mysqli_stmt_execute($stmt);
                header('Location: ../machine.php?machineadded');
                exit();
            }
        }
    }