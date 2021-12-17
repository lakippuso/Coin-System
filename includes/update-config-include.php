<?php
    session_start();
    if(!empty($_SESSION['session_id'])){
        include 'config.php';
        $id = $_POST['machine_id'];
        $name = $_POST['machine_name'];
        $sql = "UPDATE machine_info SET machine_name = '$name' WHERE machine_id = '$id'";
        mysqli_query($con,$sql);
    }