<?php
date_default_timezone_set("Asia/Singapore");
//Date and Time Function
function printDate(){
    return date("Y-m-d");
}
function printMonth(){
    return date("Y-m-d");
}
function printWeek(){
    return date("Y-")."W".date("W");
}
function printTime(){
    return date("h:i a");
}

//Dashboard Getters

//ADMIN FUNCTIONS
//GET number of users
function getAllUsers($owner){
    require 'config.php';
    $sql =  "SELECT * FROM machine_info";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        return mysqli_stmt_num_rows($stmt);
    }
}
//GET number of  NEW USERS

//USERS FUNCTIONS
//GET number of machines
function getNumMachines($owner){
    require 'config.php';
    $sql = "SELECT * FROM machine_info where username = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $owner);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        return mysqli_stmt_num_rows($stmt);
    }
}

//GET TOTAL INCOME
function getTotalIncome($owner){
    require 'config.php';
    $sql =  "SELECT SUM(income) as total FROM machine_info WHERE username = ?";
    $stmt = mysqli_stmt_init($con);

    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $owner);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}
//GET TODAY'S INCOME
function getIncomeToday($owner){
    require 'config.php';
    $sql =  "SELECT SUM(day_income) as total FROM daily_report WHERE username = ? and date = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        $date = date('Y-m-d');
        mysqli_stmt_bind_param($stmt, "ss", $owner, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}
//GET YESTERDAYS INCOME
function getIncomeYesterday($owner){
    require 'config.php';
    
    $sql =  "SELECT SUM(day_income) as total FROM daily_report WHERE username = ? AND date = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        $date = date('Y-m-d',strtotime('yesterday'));
        mysqli_stmt_bind_param($stmt, "ss", $owner, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}
//GET INCOME for CURRENT MONTH
function getIncomeThisMonth($owner){
    require 'config.php';
    
    $sql =  "SELECT SUM(day_income) as total FROM daily_report WHERE username = ? AND MONTH(date) = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        $date = date('m');
        mysqli_stmt_bind_param($stmt, "ss", $owner, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}
//GET INCOME for LAST MONTH
function getIncomeLastMonth($owner){
    require 'config.php';
    
    $sql =  "SELECT SUM(day_income) as total FROM daily_report WHERE username = ? AND MONTH(date) = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        $date = date('m', strtotime('last month'));
        mysqli_stmt_bind_param($stmt, "ss", $owner, $date);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}


//DropDown Function
function getMachineName($owner){
    require 'config.php';
    $sql =  "SELECT machine_id FROM machine_info WHERE username = ?";
    $stmt = mysqli_stmt_init($con);

    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo 'error!';
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $owner);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if($row['total'] == NULL || $row['total'] == '')
            return 0;
            else
            return $row['total'];
        }
    }
}