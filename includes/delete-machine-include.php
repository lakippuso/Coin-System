<?php
    session_start();
    if(!empty($_SESSION['session_id'])){
        include 'config.php';
        $id = $_POST['machine_id'];
        $sql = "DELETE FROM machine_info WHERE machine_id = '$id'";
        mysqli_query($con,$sql);
    }