<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/registration.css">
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
        <title>Registration</title>
    </head>
    <body>
    <!-- Header -->
    <!-- <div class="header navbar navbar-expand-lg justify-content-between" id="myHeader">
            <div class="floater"><a href="index.php"><h3>CCM</h3></a></div>
    </div> -->
    <!-- Content -->
        <div class="registration-body g-0 container-fluid">
            <div class="registration-row col-sm-10 col-md-10 col-lg-7 d-flex justify-content-around mx-auto row">
                <form method="POST" action="includes/registration-include.php" class="login-card col-sm-12 col-md-12 col-lg-6 order-sm-last order-lg-first" id="form">
                    <div class="row d-sm-none d-lg-block">
                        <h1>Sign Up!</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php if(isset($_GET['firstname'])) echo $_GET['firstname'];?>">
                            <span class="error col" id="firstname_error"><?php if(isset($_GET['firstname_error'])) echo $_GET['firstname_error'];?></span>
                        </div>
                        <div class="col-sm-12 mt-sm-3 col-lg-6 mt-lg-0">
                            <input type="text" name="lastname" id="lastname" placeholder="Lastname" value="<?php if(isset($_GET['lastname'])) echo $_GET['lastname'];?>">
                            <span class="error col" id="lastname_error" name="lastname_error"><?php if(isset($_GET['lastname_error'])) echo $_GET['lastname_error'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="email" id="email" placeholder="Email" value="<?php if(isset($_GET['email'])) echo $_GET['email'];?>">
                        </div>
                        <span class="error" id="email_error" name="email_error"><?php if(isset($_GET['email_error'])) echo $_GET['email_error'];?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($_GET['username'])) echo $_GET['username'];?>">
                        </div>
                        <span class="error" id="username_error"  name="username_error"><?php if(isset($_GET['username_error'])) echo $_GET['username_error'];?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <span class="error" id="password_error"  name="password_error"><?php if(isset($_GET['password_error'])) echo $_GET['password_error'];?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"> 
                        </div>
                        <span class="error" id="cpassword_error" name="cpassword_error" ><?php if(isset($_GET['cpassword_error'])) echo $_GET['cpassword_error'];?></span>
                    </div>
                    <div class="row">
                        <div class="button-submit col">
                            <input type="submit" value="Register" name="submit-button">
                        </div>
                    </div>
                </form>

                <div class="desc-card col-sm-12 col-md-12 col-lg-4 my-auto order-sm-first order-lg-last">
                    <img src="resources/images/Logo1.png" alt="logo" style="width: 12vw; margin-left: auto; margin-right: auto;">
                    <hr>
                    <h3>Sign Up!</h3>
                    <div class="register_tagline" style="font-size: 16px">It's always free. Register to be able to access our website!</div>

                </div>
            </div>
        </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
