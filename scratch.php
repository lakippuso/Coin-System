<?php
if(isset($_POST['submit'])){
    $data = [];
    $error = 0;
    $target_dir = "resources/images/profile/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check === false) {
        $data['message'] = "File is not an image.";
        $error += 1;
    }
    else if (file_exists($target_file)) {
        $data['message'] = "Sorry, file already exists.";
        $error += 1;
    }
    else if ($_FILES["upload"]["size"] > 800000) {
        $data['message'] = "Sorry, your file is too large.";
        $error += 1;
    }
    
    else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $data['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error += 1;
    }

    if($error != 0){
        $data['message'] = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        } else {
            $data['message'] = "Sorry, there was an error uploading your file.";
        }
    }
    if($error != 0){
        $data['success'] = false;
    }else{
        $data['success'] = true;
    }
    echo $error."<br>";
    echo $target_file."<br>";
    echo json_encode($data);
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