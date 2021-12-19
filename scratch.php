<?php
if(isset($_POST['submit'])){
    $target_dir = "resources/images/profile/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    if(isset($_FILES["upload"])){
        
        if($_FILES["upload"]["name"] != ''){
            $target_dir = "resources/images/profile/";
            $target_file = $target_dir . basename($_FILES["upload"]["name"]);
            move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
            // $conditions = "pic_url = '".$target_file."'";
        }
    }
    echo $target_file;
    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
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
    <form action="scratch.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>