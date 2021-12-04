<?php
// REMOTE
 //$host = "remotemysql.com";
 //$db_user = "yZpxzSMHd2";
 //$db_password = "6t2f7VjeNu";
 //$db_name = "yZpxzSMHd2";


 //Remote part2

// $host = "sql6.freemysqlhosting.net";
// $db_user = "sql6451475";
// $db_name = "sql6451475";
// $db_password = "kBnuw4Re4N";


// LOCAL
date_default_timezone_set("Asia/Singapore");
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
