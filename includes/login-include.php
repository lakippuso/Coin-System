<?php
if(isset($_POST['submit'])){

    require 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)){
        $message = "";
        if(empty($username)){
            $message = $message."username=".$username."&username_error=Field is Required&";
        }
        if(empty($password)){
            $message = $message."password_error=Field is Required";
        }
        header("Location: ../homepage.php?".$message);
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../homepage.php?SQL_ERROR");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $check_pass = password_verify($password, $row['password']);
                if($check_pass == false){
                    header("Location: ../homepage.php?password_error=Wrong Password!1");
                    exit();
                }
                else if($check_pass == true){
                    session_start();
                    $_SESSION['session_id'] = $row['user_id'];
                    $_SESSION['session_username'] = $row['username'];
                    $_SESSION['session_firstname'] = $row['first_name'];

                    header("Location: ../dashboard.php");
                    exit();
                }
                else{
                    header("Location: ../homepage.php?password_error=Wrong Password!2");
                    exit();
                }
            }
            else{
                header("Location: ../homepage.php?username_error=User does not exist!");
                exit();
            }
        }
    }
}
