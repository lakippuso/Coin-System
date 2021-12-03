<?php
    include 'config.php';
    //Delete History Function
    if(isset($_POST['delete'])){
        if(isset($_POST['selected'])){
            $arr = $_POST['selected'];
            $delete_id =  implode(" ,", $arr);
            $sql = "DELETE FROM history WHERE history_id IN (?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?SQL_ERROR");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $delete_id);
                mysqli_stmt_execute($stmt);
            }
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
        $location = "Location: ../history.php?search_id=".$id;
        header($location);
        exit();
    }