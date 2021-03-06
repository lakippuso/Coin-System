<?php
    session_start();
    include 'config.php';
    date_default_timezone_set("Asia/Singapore");
    $username = $_SESSION['session_username'];
    $arr = array("data" => array(), 
                "sum" => 0, 
                "label" => array('January','February','March','April','May','June','July','August','September','October','November','December') );
    
    $y = 1;
    $year = date('Y');
    while($y <= 12){
        $sql = "SELECT SUM(day_income) as income from daily_report WHERE username = '$username' AND MONTH(date) = '$y' AND YEAR(date) = '$year'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            array_push($arr['data'], $row['income']);
        }
        else{
            array_push($arr['data'], 0);
        }
        if($y==date('m')){
            $arr['sum'] = $row['income'];
        }
        $y+=1;
    }
    echo json_encode($arr);