<?php
    session_start();
    include 'config.php';
    date_default_timezone_set("Asia/Singapore");
    $username = $_SESSION['session_username'];
    $arr = array("data" => array(), 
                "label" => array('January','February','March','April','May','June','July','August','September','October','November','December') );
    
    $y = 1;
    while($y <= 12){
        $sql = "SELECT SUM(day_income) as income from daily_report WHERE username = '$username' AND MONTH(date) = '$y'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            array_push($arr['data'], $row['income']);
        }
        else{
            array_push($arr['data'], 0);
        }
        $y+=1;
    }
    echo json_encode($arr);