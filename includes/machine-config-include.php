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
        echo json_encode($machine);
    }