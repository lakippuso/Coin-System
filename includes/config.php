<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "matt";


$con = mysqli_connect($host, $db_user, $db_password,$db_name);
if(!$con){
    header("Location: ../homepage.php?CONNECTION ERROR");
    exit();
}
?>