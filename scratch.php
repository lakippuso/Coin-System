<?php
    
    date_default_timezone_set("Asia/Singapore");
    $arr = array("data" => array(), 
                "label" => array() );
    
    $now = date("M", strtotime("today"));
    echo $now."<br>";

    $y = 0;
    while($y < 7){
        $r =  date('Y', strtotime("-$y year"));
        $y += 1;
        echo $r."<br>";
        
        array_push($arr['label'], $r);
    }

    $arr['label'] = array_reverse($arr['label']);
    echo "<br>".json_encode($arr);