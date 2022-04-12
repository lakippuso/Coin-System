<?php
    session_start();
    //DELETE MACHINE in MACHINE INFO
    if(!empty($_SESSION['session_id'])){
        include 'config.php';
        $id = $_POST['machine_id'];

        //ARCHIVING Machine FROM MACHINE INFO
        $sql = "SELECT * FROM machine_info WHERE machine_id = $id";
        $result = mysqli_query($con,$sql);
        while($rows = mysqli_fetch_assoc($result)){
            $date = date('Y-m-d');
            $sql = 'INSERT INTO machine_archive (machine_id, username, machine_name, date_created, date_deleted)  VALUE (?, ?, ?, ?, ?)' ;
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "error!";
            }
            else{
                mysqli_stmt_bind_param($stmt, "sssss", $rows['machine_id'], $rows['username'], $rows['machine_name'],$rows['date_created'], $date);
                mysqli_stmt_execute($stmt);
            }
        }

        //DELETE Machine FROM MACHINE INFO
        $sql = "DELETE FROM machine_info WHERE machine_id = '$id'";
        mysqli_query($con,$sql);
    }