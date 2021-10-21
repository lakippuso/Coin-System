<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];

    $message = "";

    // IF EMPTY FIELDS
    if(empty($firstname))   $message = $message."firstname_error=Field is Required&";
    else    $message = $message."firstname=".$firstname."&";
    if(empty($lastname))   $message = $message."lastname_error=Field is Required&";
    else    $message = $message."lastname=".$lastname."&";
    if(empty($email))   $message = $message."email_error=Field is Required&";
    else    $message = $message."email=".$email."&";
    if(empty($username))   $message = $message."username_error=Field is Required&";
    else    $message = $message."username=".$username."&";
    if(empty($password))   $message = $message."password_error=Field is Required&";
    if(empty($cpassword))   $message = $message."cpassword_error=Field is Required&";

    // ADVANCE FILTER
    if($password != $cpassword) $message = $message."cpassword_error=Password doesn't match!&";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $message = $message."email=".$email."&email_error=Invalid Email!&";
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) $message = $message."username=".$username."&username_error=Invalid Username!&";
    
    header("Location: ../registration.php?".$message);
    exit();