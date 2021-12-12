<?php
    date_default_timezone_set("Asia/Singapore");
    echo date("Y-")."W".date("W");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="scratch.php" method="GET">
        <input type="radio" name="radio" value="1">
        <input type="radio" name="radio" value="2">
        <input type="radio" name="radio" value="3">
        <input type="radio" name="radio" value="4">
        <input type="submit" value="Submit">
    </form>
</body>
</html>