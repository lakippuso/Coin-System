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
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="shortcut icon" href="resources/images/LogoCC.png"/>
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
        <div class="forgot-body g-0 container-fluid">
            <div class="forgot-row col-sm-10 col-md-10 col-lg-7 d-flex justify-content-around mx-auto">
                <img src="resources/images/forgot.png" class="image-col d-sm-none d-lg-block col-md-12 col-lg-6"></img>
                
                <form class="forgot-col col-sm-10 col-md-6 col-lg-4 mx-auto" method="" action="">
                    <div class="d-flex justify-content-center">
                        <img class="logo-ccm mb-4" src="resources/images/GeekCoin.png" alt="Coin Counter" style="width: 18em; margin-top: 1em;">
                    </div>
                    <div class="message d-flex justify-content-center fs-6">
                        <p>We've already send the instructions to your email for setting up your password, if you didn't recieve an email. Please make sure you enter a valid email or check your spam folder if possible.</p>
                    </div>
                </form>
            </div>

        </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>