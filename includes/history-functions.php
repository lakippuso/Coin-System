<?php
    include 'config.php';
    //Delete History Function
    if(isset($_POST['delete'])){
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
    }
    //Search History Function
    if(isset($_POST['search'])){
        $id = $_POST['search_id'];
        header("Location: ../history.php?search_id=$id");
        exit();
    }