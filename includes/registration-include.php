<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];

    if(empty($lastname) || empty($firstname) ||  empty($username) ||  empty($password) ||  empty($cpassword) ||  empty($email)){
        $message = "";
        if(empty($username)){
            $message = $message."username=".$username."&username_error=Field is Required&";
        }
        if(empty($password)){
            $message = $message."password_error=Field is Required";
        }
        header("Location: ../registration.php?".$message);
        exit();
    }