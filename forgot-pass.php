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
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <title>Coin Counter System</title>
    </head>

    <body>
        <div class="change-body g-0 container-fluid">
            <div class="change-row col-sm-10 col-md-10 col-lg-7 d-flex justify-content-around mx-auto">
                <img src="resources/images/forgot.png" class="image-col d-sm-none d-lg-block col-md-12 col-lg-6"></img>
                <?php
                    $selector = $_GET['selector'];
                    $validator = $_GET['validator'];

                    if(empty($selector) || empty($validator)){
                        echo "Error Request";
                    }
                    else{
                        //if(ctype_xdigit($selector) !== false && ctype_xdigit($validator)){
                            ?>
                            <form id = "forgot-pass-form" class="change-col col-sm-10 col-md-6 col-lg-4 mx-auto" method="POST" action="includes/reset-pass-include.php">
                                <input type="hidden" name="selector" value="<?php echo $selector;?>">
                                <input type="hidden" name="validator" value="<?php echo $validator;?>">
                                <div class="d-flex justify-content-center">
                                    <img class="logo-ccm mb-4" src="resources/images/GeekCoin.png" alt="Coin Counter" style="width: 18em">
                                </div>
                                <div class="title d-flex justify-content-center fs-5">
                                    <label>Change Password</label>
                                </div>
                                <div class="inputs form-floating">
                                    <input type="password" class="form-control" id="new" name="new_pass" placeholder="New Password" required>
                                    <label for="floatingInput">New Password</label>
                                </div>
                                <ul>
                                    <li class="list-error upper">Your password must contain uppercase letters.</li>
                                    <li class="list-error special">Your password must contain a special character.</li>
                                    <li class="list-error length">Your password must at least 8 characters.</li>
                                </ul>
                                <div class="inputs form-floating">
                                    <input type="password" class="form-control" id="retype" name="new_retype" placeholder="Retype New Password" required>
                                    <label for="floatingInput">Retype New Password</label>
                                <ul>
                                    <li class="list-error match">Password doesn't match!</li>
                                </ul>
                                </div>
                                
                                <div class="change-btn d-flex justify-content-center">
                                    <button class="btn-submit" type="submit" name="change_password">Change Password</button>
                                </div>
                            </form>                            
                            
                            <?php

                        //}
                    }
                ?>
            </div>

        </div>
    <script type="text/javascript" src="resources/js/forgot_pass.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    
</html>