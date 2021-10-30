<?php
// REMOTE
// $host = "remotemysql.com";
// $db_user = "yZpxzSMHd2";
// $db_password = "6t2f7VjeNu";
// $db_name = "yZpxzSMHd2";

// LOCAL
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "coin_machine_database";


$con = mysqli_connect($host, $db_user, $db_password,$db_name);
if(!$con){
    header("Location: ../index.php?CONNECTION ERROR");
    exit();
}
?>