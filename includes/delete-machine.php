<?php
    include 'config.php';
    //DELETE RECORD in HISTORY
    if(isset($_POST['selected'])){
        $arr = $_POST['selected'];
        $delete_id =  implode(" ,", $arr);
        $sql = "DELETE FROM history WHERE history_id IN ($delete_id)";
        mysqli_query($con,$sql);
        header('Location: ../history.php');
        exit();
    }
    else{
        header('Location: ../history.php');
        exit();
    }