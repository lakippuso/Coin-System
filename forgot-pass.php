<?php
    session_start();
    if(isset($_SESSION['session_id'])){
        if($_SESSION['session_category']=='admin'){
            header("Location: admin-dashboard.php");
            exit();
        }
        else{
            header("Location: dashboard.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="css/bootstrap.css"/> -->
        <!-- JS FILE 
            <script defer src="resources/js/register.js"></script> -->
        <!-- <meta http-equiv="refresh" content="1"> -->
        <title>Coin Counter System</title>
    </head>

    <body>
        <div class="change-body g-0 container-fluid">
            <div class="change-row col-sm-10 col-md-10 col-lg-7 d-flex justify-content-around mx-auto">
                <img src="resources/images/forgot.png" class="image-col d-sm-none d-lg-block col-md-12 col-lg-6"></img>
                
                <form class="change-col col-sm-10 col-md-6 col-lg-4 mx-auto" method="GET" action="forgot-message.php">
                    <div class="d-flex justify-content-center">
                        <img class="logo-ccm mb-4" src="resources/images/LogoCC.png" alt="Coin Counter" width="100" height="100">
                    </div>
                    <div class="title d-flex justify-content-center fs-5">
                        <label>Change Password</label>
                    </div>
                    <div class="inputs form-floating">
                        <input type="password" class="form-control" id="floatingInput" name="new_pass" placeholder="New Password">
                        <label for="floatingInput">New Password</label>
                    </div>
                    <ul>
                        <li>Your password must contain letters and numbers.</li>
                        <li>Your password must at least 8 characters.</li>
                    </ul>
                    <div class="inputs form-floating">
                        <input type="password" class="form-control" id="floatingInput" name="new_retype" placeholder="Retype New Password">
                        <label for="floatingInput">Retype New Password</label>
                    </div>
                    
                    <div class="change-btn d-flex justify-content-center">
                        <button class="btn-submit" type="submit" name="change">Change Password</button>
                    </div>
                </form>
            </div>

        </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>