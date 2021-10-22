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
        $sql = "SELECT * FROM users WHERE username=".$username.";";
        $result = mysqli_query($con, $sql);
        echo " ".mysqli_num_row($result);
    }
}
