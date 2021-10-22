<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/Registration.css">
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
    <nav class="navbar container-fluid sticky-top">
        <a href="#" class="navbar-brand ml-2">CCM</a>
        <button type="button" class="btn btn-info" id="open_form">LOGIN</button>
    </nav>
    <div class="registration-body container-fluid">
        <div class="registration-row mx-center row">
            <form method="POST" action="includes/registration-include.php" class="login-card col-sm-12 col-md-12 col-lg-4 offset-lg-1" id="form">
                <div class="row">
                    <h1>Sign Up!</h1>
                </div>
                <div class="row">
                    <h6>Register to be able to access our website!</h6>
                </div>
                <div class="row ">
                    <div class="col-sm-6 col-lg-6">
                        <input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php if(isset($_GET['firstname'])) echo $_GET['firstname'];?>">
                        <span class="error col" id="firstname_error"><?php if(isset($_GET['firstname_error'])) echo $_GET['firstname_error'];?></span>
                    </div>
                    <div class="col-sm-6 col-lg-6">
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

            <div class="desc-card col-sm-12 col-md-12 col-lg-6 offset-lg-1 my-auto">
                <h1>Coin Counter Machine</h1>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A dolorem magni illo rem repellat ut quos nemo eos quam facere, veniam ab! Aut accusantium cupiditate aperiam iste rem, beatae quidem.</p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A dolorem magni illo rem repellat ut quos nemo eos quam facere, veniam ab! Aut accusantium cupiditate aperiam iste rem, beatae quidem. What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>
        </div>
</div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>