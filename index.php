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
        <div class="login-body g-0 container-fluid">
            <div class="login-row col-sm-10 col-md-10 col-lg-7 d-flex justify-content-around mx-auto">
                <img src="resources/images/index.png" class="image-col d-sm-none d-lg-block col-md-12 col-lg-6"></img>
                
                <form class="form-col col-sm-10 col-md-6 col-lg-4 mx-auto" method="POST" action="includes/login-include.php">
                    <img class="logo-ccm mb-4" src="resources/images/Logo1.png" alt="Coin Counter" width="150" height="63">

                    <div class="inputs form-floating">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                        <span id="username_error" class="my-3"><?php if(isset($_GET['username_error'])){ echo $_GET['username_error'];}?></span>
                    </div>
                    <div class="inputs form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <span id="password_error"><?php if(isset($_GET['password_error'])){ echo $_GET['password_error'];}?></span>
                    </div>

                    <div class="checkbox1 mb-3 d-flex justify-content-between">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                            <a href="?"><label>Forgot Password?</label></a>
                    </div>
                    
                    <div class="form-btn d-flex justify-content-start">
                        <button class="btn-signin" type="submit" name="submit">Sign in</button>
                        <a href="registration.php"><button type="button" class="btn-create">Create Account</button></a>
                    </div>
                </form>
            </div>

        </div>            
        <?php
                include 'includes/footer-index.php';
        ?>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>