<?php

if(isset($_POST['reset_submit'])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "geekcoin.online/forgot-email.php?selector=".$selector."&validator=".bin2hex($token);

    $expires = date("u") + 1800;

    require_once 'includes/config.php';

    $email = $_POST['reset_email'];

    $sql = "DELETE FROM reset_table WHERE reset_email = ?";
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($sql)){
        echo "SQL ERROR DELETE";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$email);    
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO reset_table (reset_email,  reset_selector, reset_token, reset_expire) VALUES (?, ?, ?, ?)";    
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($sql)){
        echo "SQL ERROR INSERT";
        exit();
    }
    else{
        $hashed_token = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$email, $selector, $hashed_token,$expires);    
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $email;
    $subject = "Password Reset For Your Geekcoin Account";
    $message = '<p>You requested a password reset! CLick the link below.</p>';
    $message .= '<p>Link: </p><br>';
    $message .= '<a href="'.$url.'">'.$url.'</a>';

    $header = "From: Geekcoin <geekcoin@yopmail.com>\r\n";
    $header .= "Reply-To: Geekcoin <geekcoin@yopmail.com>\r\n";
    $header = "Content-type: text/html\r\n";

    mail($to, $subject, $message, $header);
    header("Location: ../forgot-message.php");
    exit();
}else{
    header("Location: ../index.php");
    exit();
}
else if(isset($_POST['change_password'])){
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['new_pass'];

    $currentDate = date('U');

    
}