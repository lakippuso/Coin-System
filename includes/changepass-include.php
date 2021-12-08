<?php
    include 'config.php';
    session_start();
    
    $error =[];
    $data = [];
    $oldpass = $_POST['old_pass'];
    $newpass = $_POST['new_pass'];
    $username = $_SESSION['session_username'];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        $error['sql'] = "SQL ERROR";
    }
    else{

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){            
            $check_pass = password_verify($oldpass, $row['password']);
            if($check_pass == false){
                $error['result'] = "Wrong Password!";
                
            }
            else if($check_pass == true){
                $sql =  "UPDATE users SET password = ? WHERE username = ?";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt, $sql)){ 
                    $error['result'] = "SQLERROR update pass";
                }
                else{
                    $hashed_pass = password_hash($newpass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $hashed_pass ,$username);
                    mysqli_stmt_execute($stmt);
                }
            }
            else{
                $error['result'] = "Something's Wrong in the Password!";
            }
        }
        else{
            $error['result'] = "No user Found!";
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
    