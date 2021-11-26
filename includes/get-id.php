<?php
    include 'config.php';
    $machine_id = $_POST['machine_id'];
    $sql = "SELECT * FROM machine_info WHERE machine_id = $machine_id";
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_assoc($result);
    echo $rows['machine_id'];