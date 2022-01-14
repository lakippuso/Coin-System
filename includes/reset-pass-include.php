<?php
include 'config.php';

if(isset($_POST['reset_submit'])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://geekcoin.online/forgot-pass.php?selector=".$selector."&validator=".bin2hex($token);

    $expires = date("U") + 1800;


    $email = $_POST['reset_email'];

    $sql = "DELETE FROM reset_table WHERE reset_email = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare( $stmt, $sql)){
        header("Location: ../forgot-email.php?SQL ERROR DELETE IN RESET TABLE!");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$email);    
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO reset_table (reset_email,  reset_selector, reset_token, reset_expire) VALUES (?, ?, ?, ?)";    
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare( $stmt, $sql)){
        header("Location: ../forgot-email.php?SQL ERROR INSERT IN RESET TABLE!");
        exit();
    }
    else{
        $hashed_token = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$email, $selector, $hashed_token,$expires);    
        mysqli_stmt_execute($stmt);
    }

    $to = $email;
    $subject = "Password Reset For Your Geekcoin Account";
    $message = '<p>You requested a password reset! Click the link below.</p>';
    $message .= '<p>Link: </p><br>';
    $message .= '<a href="'.$url.'">'.$url.'</a>';

    $header = "From: Geekcoin <support@geekcoin.online>\r\n";
    $header .= "Reply-To: Geekcoin <support@geekcoin.online>\r\n";
    $header .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $header);
    header("Location: ../forgot-message.php");
    exit();
}
else if(isset($_POST['change_password'])){
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['new_pass'];

    $currentDate = date('U');

    $sql = "SELECT * FROM reset_table WHERE reset_selector = ? AND reset_expire >= ?";
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare( $stmt, $sql)){
        header("Location: ../forgot-pass.php?SQL ERROR SELECTION IN RESET TABLE!");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"ss",$selector, $currentDate);    
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            header("Location: ../forgot-pass.php?NEED TO RESUBMIT PASS RESET!");
            exit();
        }
        else{
            $tokenbin = hex2bin($validator);
            $tokencheck = password_verify($tokenbin, $row['reset_token']);
            if($tokencheck === false){
                header("Location: ../forgot-pass.php?ERROR IN TOKEN!");
                exit();
            }
            else if ($tokencheck === true){
                $token_email = $row['reset_email'];

                $sql = "SELECT * FROM users WHERE email = ?";
                
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare( $stmt, $sql)){
                    header("Location: ../forgot-pass.php?SQL ERROR SELECTION IN USER TABLE!");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt,"s",$token_email);    
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                        header("Location: ../forgot-pass.php?email doesn't exist!");
                        exit();
                    }
                    else{
                        $sql = "UPDATE users SET password = ? WHERE email = ?";
                        $stmt = mysqli_stmt_init($con);
                        if(!mysqli_stmt_prepare( $stmt, $sql)){
                            header("Location: ../forgot-pass.php?SQL ERROR UDPATE IN USER TABLE!");
                            exit();
                        }
                        else{
                            $newpasshashed = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"ss",$newpasshashed,$token_email);    
                            mysqli_stmt_execute($stmt);
                            
                            $sql = "DELETE FROM reset_table WHERE reset_email = ?";
                            $stmt = mysqli_stmt_init($con);

                            if(!mysqli_stmt_prepare( $stmt, $sql)){
                                header("Location: ../forgot-email.php?SQL ERROR DELETE IN RESET TABLE!");
                                exit();
                            }
                            else{
                                mysqli_stmt_bind_param($stmt,"s",$token_email);    
                                mysqli_stmt_execute($stmt);
                            }
                        }
                    }
                }
            }
        }
    }
    
}
else{
    header("Location: ../index.php");
    exit();
}