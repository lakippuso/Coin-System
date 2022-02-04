<?php
    session_start();
    include 'config.php';
    date_default_timezone_set("Asia/Singapore");
    $username = $_SESSION['session_username'];
    $arr = array("data" => array(), 
                "sum" => array(), 
                "label" => array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') );
    
    $now = date("D", strtotime("today"));
    $i = 0;
    $start_date = "Sun";
    if($now != $start_date){
        $r = date("D", strtotime("-$i day"));
        while($r != $start_date){
            $r = date("D", strtotime("-$i day"));
            $sun = date("Y-m-d", strtotime("-$i day"));
            $i += 1;
        }
    }
    else{
        $sun = date("Y-m-d");
    }
    $y = 0;
    while($y < 7){
        $r =  date('Y-m-d', strtotime("$sun +$y day"));
        $y += 1;

        $sql = "SELECT day_income from daily_report WHERE username = '$username' AND date = '$r'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            array_push($arr['data'], $row['day_income']);
        }
        else{
            array_push($arr['data'], 0);
        }
    }
    $arr['sum'] = array_sum($arr['data']);
    echo json_encode($arr);