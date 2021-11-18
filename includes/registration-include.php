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
        if(empty($firstname)||$firstname===''||$firstname===NULL){
            $message = $message."firstname_error=Field is Required&";
            $valid++;
        }   
        else    $message = $message."firstname=".$firstname."&";
        // lastname
        if(empty($lastname)||$lastname===''||$lastname===NULL){   
            $message = $message."lastname_error=Field is Required&";
            $valid++;
        }
        else    $message = $message."lastname=".$lastname."&";
        // email
        if(empty($email)||$email===''||$email===NULL){   
            $message = $message."email_error=Field is Required&";
            $valid++;
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            $message = $message."email=".$email."&email_error=Invalid Email!&";
            $valid++;
        }
        else $message = $message."email=".$email."&";
        // username
        if(empty($username)||$username===''||$username===NULL){
            $message = $message."&username_error=Field is Required&";
            $valid++;
        }
        else if (!preg_match("/^[ \w]+$/", $username)){ 
            $message = $message."username=".$username."&username_error=Invalid Username!&";
            $valid++;
        }
        else    $message = $message."username=".$username."&";

        // password
        if(empty($password)||$password===''||$password===NULL){   
            $message = $message."password_error=Field is Required&";
            $valid++;
        }
        if(empty($cpassword)||$cpassword===''||$cpassword===NULL){   
            $message = $message."cpassword_error=Field is Required&";
            $valid++;
        }
        else if($password != $cpassword){ 
            $message = $message."cpassword_error=Password doesn't match!&";
            $valid++;
        }

        // ADVANCE FILTER
        $sql =  "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            $message = $message."SQLERROR1&";
            $valid++;
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0){
                $message = $message."email_error=Email is already taken!";
                $valid++;
            }
        }

        $sql =  "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            $message = $message."SQLERROR1&";
            $valid++;
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0){
                $message = $message."username_error=Username is already taken!";
                $valid++;
            }
            else{
                $sql =  "INSERT INTO users (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt, $sql)){ 
                    $message = $message."SQLERROR3&";
                    $valid++;
                }
                else{
                    if($valid != 0){
                        header("Location: ../registration.php?".$message);
                        exit();
                    }else{
                        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $username, $hashed_pass);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../index.php?signup=success");
                        exit();
                    }
                }
            }
        }
        if($valid != 0){
            header("Location: ../registration.php?".$message);
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
    else{
        
        header("Location: ../registration.php?notclicked");
        exit();
    }