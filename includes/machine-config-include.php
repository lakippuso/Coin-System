<?php
    session_start();
    if(!empty($_SESSION['session_id'])){
        include 'config.php';
        
        $id = $_POST['machine_id'];
        $username = $_SESSION['session_username'];
        $machine = [];
    
        $sql = "SELECT * FROM machine_info WHERE username = '$username' AND machine_id = '$id'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result) ){
            $machine['id'] = $id;
            $machine['name'] = $row['machine_name'];
            $machine['type'] = $row['machine_type'];
        }
        //Get monthly income of machine
        $month_now = date('m');
        $year_now = date('Y');
        $sql = "SELECT SUM(day_income) as income FROM `daily_report` WHERE machine_id = $id AND MONTH(date) = $month_now AND YEAR(date) = $year_now";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result) ){
            if($row['income'] == NULL){
                $machine['monthly'] = 0;

            }else{
                $machine['monthly'] = $row['income'];
            }
        }
        //Get Daily Income of Machine
        $date = date('Y-m-d');
        $sql = "SELECT SUM(day_income) as income FROM `daily_report` WHERE machine_id = $id AND date = '$date'";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result) ){
            if($row['income'] == NULL){
                $machine['daily'] = 0;

            }else{
                $machine['daily'] = $row['income'];

            }
        }
        //Get Total Income of Machine
        $sql = "SELECT SUM(day_income) as income FROM `daily_report` WHERE machine_id = $id";
        $result = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($result) ){
            if($row['income'] == NULL){
                $machine['total'] = 0;

            }else{
                $machine['total'] = $row['income'];

            }
        }
        echo json_encode($machine);
    }