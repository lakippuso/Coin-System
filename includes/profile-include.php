<?php
    include 'config.php';
    session_start();
    if(isset($_POST['save-profile'])){
        $firstname = $_POST['first_name'];
        $middlename = $_POST['middle_name'];
        $lastname = $_POST['last_name'];
        $suffix = $_POST['name_suffix'];
    
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $business_name = $_POST['business_name'];
        $business_add = $_POST['business_add'];
        $username = $_SESSION['session_username'];
        
        $conditions = "first_name = '".$firstname."'";
        $conditions .= ", middle_name = '".$middlename."'";
        $conditions .= ", last_name = '".$lastname."'";
        $conditions .= ", suffix = '".$suffix."'";
        $conditions .= ", email = '".$email."'";
        $conditions .= ", contact_no = '".$phone."'";
        $conditions .= ", business_name = '".$business_name."'";
        $conditions .= ", business_add = '".$business_add."'";
        echo $conditions;
        $sql = "UPDATE users SET $conditions WHERE username = '$username'";
        mysqli_query($con,$sql);
        header('Location: ../profile.php');
        exit();
    }