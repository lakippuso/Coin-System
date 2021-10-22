<?php
    if(isset($_POST['submit-button'])){
        require 'config.php';
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $message = "";
        $valid = 0;
        // firstname
        if(empty($firstname)){
            $message = $message."firstname_error=Field is Required&";
            $valid++;
        }   
        else    $message = $message."firstname=".$firstname."&";
        // lastname
        if(empty($lastname)){   
            $message = $message."lastname_error=Field is Required&";
            $valid++;
        }
        else    $message = $message."lastname=".$lastname."&";
        // email
        if(empty($email)){   
            $message = $message."email_error=Field is Required&";
            $valid++;
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            $message = $message."email=".$email."&email_error=Invalid Email!&";
            $valid++;
        }
        else $message = $message."email=".$email."&";
        // username
        if(empty($username)){
            $message = $message."&username_error=Field is Required&";
            $valid++;
        }
        else if (!preg_match("/^[ \w]+$/", $username)){ 
            $message = $message."username=".$username."&username_error=Invalid Username!&";
            $valid++;
        }
        else    $message = $message."username=".$username."&";

        // password
        if(empty($password)){   
            $message = $message."password_error=Field is Required&";
            $valid++;
        }
        if(empty($cpassword)){   
            $message = $message."cpassword_error=Field is Required&";
            $valid++;
        }
        else if($password != $cpassword){ 
            $message = $message."cpassword_error=Password doesn't match!&";
            $valid++;
        }

        // ADVANCE FILTER
        if($valid != 0){
            header("Location: ../registration.php?".$message);
            exit();
        }
        else{
            $sql =  "SELECT username FROM users WHERE username=?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../registration.php?SQLERROR1");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result = mysqli_stmt_num_rows($stmt);
                if($result > 0){
                    header("Location: ../registration.php?SQLERROR2");
                    exit();
                }
                else{
                    $sql =  "INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../registration.php?SQLERROR3");
                        exit();
                    }
                    else{
                        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $username, $hashed_pass);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../registration.php?signup=success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
    else{
        
        header("Location: ../registration.php?notclicked");
        exit();
    }