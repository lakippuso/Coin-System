<?php
    session_start();
    include 'config.php';
    date_default_timezone_set("Asia/Singapore");
    $username = $_SESSION['session_username'];
    $arr = array("data" => array(), 
                "label" => array());
    
    $y = 0;
    while($y < 7){
        $r =  date('Y', strtotime("-$y year"));
        $sql = "SELECT SUM(day_income) as income from daily_report WHERE username = '$username' AND YEAR(date) = '$r'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            array_push($arr['data'], $row['income']);
            array_push($arr['label'], $r);
        }
        else{
            array_push($arr['data'], 0);
            array_push($arr['label'], $r);
        }
        $y+=1;
    }
    $arr['data'] = array_reverse($arr['data']);
    $arr['label'] = array_reverse($arr['label']);
    echo json_encode($arr);