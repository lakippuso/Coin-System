<?php
    session_start();
    include 'config.php';
    date_default_timezone_set("Asia/Singapore");

    $sql = "SELECT * from users";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        $results[] = $row;
    }
    //echo json_encode($results);
    $arr = array("data" => array(2000,1000,3000,3000,3000,3000,3000), 
                "label" => array('2000','1000','3000','3000','3000','3000','3000'));
    echo json_encode($arr);