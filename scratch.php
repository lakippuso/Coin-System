<?php
    if(isset($_POST['check'])){
        $arr =  $_POST['check'];
        foreach($arr as $x){
            echo $x;
        }
    }

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
    <form action="scratch.php" method="POST">
        <input type="checkbox" name="check[]" value="1">
        <input type="checkbox" name="check[]" value="2">
        <input type="submit" value="submit">
    </form>
</body>
</html>