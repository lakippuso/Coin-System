<?php
    require 'config.php';
    session_start();
    if(!isset($_SESSION['session_id'])){
        header('Location: ../index.php');
        exit();
    }

    $error =[];
    $data = [];
    $username = $_SESSION['session_username'];
    $machine_id = $_POST['machine_id'];
    $machine_name = $_POST['machine_name'];
    $machine_type = $_POST['machine_type'];
    $custom_machine_type = $_POST['custom_machine_type'];
    if($custom_machine_type!=""){
        $machine_type = $custom_machine_type;
    }

    $date = date("Y-m-d");
    $sql =  "SELECT * FROM machine_info WHERE machine_id = ? AND username = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        $error['select'] = 'Statement Error Machine!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $machine_id, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $error['machine'] = 'You already registered this machine!';
        }
        else{
            $sql =  "SELECT * FROM machine_info WHERE machine_id = ?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                $error['select'] = 'Statement Error Machine!';
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $machine_id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $error['machine'] = 'Machine is already registered by another user!';
                }
                else{
                    //INSERT NEW MACHINE
                    $sql =  "INSERT INTO machine_info (machine_id, machine_name, machine_type, username, income , date_created) VALUES (?, ?, ?, ?, 0, ?)";
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        $error['insert'] = 'insert error Machine!';
                    }
                    else{
                        mysqli_stmt_bind_param($stmt, "sssss", $machine_id, $machine_name, $machine_type, $username, $date);
                        mysqli_stmt_execute($stmt);
                    }
                }
            }
        }
    }
    if(empty($error)){
        $data['success'] = true;
        $data['messages'] = 'Success';
    }
    else{
        $data['success'] = false;
        $data['messages'] = $error;
    }
    echo json_encode($data);