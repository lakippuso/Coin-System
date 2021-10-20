<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/Registration.css">
        <!-- <link rel="stylesheet" href="css/bootstrap.css"/> -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script defer src="resources/js/register.js"></script>
        <!-- <meta http-equiv="refresh" content="1"> -->
        <title>Registration</title>
    </head>
    <body>
    <div class="registration-body container-fluid">
        <div class="registration-row container-fluid row m-40">
            <form action="includes/registration-include.php" class="login-card col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <h1>Sign Up!</h1>
                </div>
                <div class="row">
                    <h6>Register to be able to access our website!</h6>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <input type="text" name="firstname" id="firstname" placeholder="Firstname"  class="form-control">
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <input type="text" name="lastname" id="lastname" placeholder="Lastname" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="error">Error!</span>
                    </div>
                </div>
            </form>

            <div class="desc-card col-sm-12 col-md-6 col-lg-6">
                <h1>Title</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A dolorem magni illo rem repellat ut quos nemo eos quam facere, veniam ab! Aut accusantium cupiditate aperiam iste rem, beatae quidem.</p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A dolorem magni illo rem repellat ut quos nemo eos quam facere, veniam ab! Aut accusantium cupiditate aperiam iste rem, beatae quidem.</p>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>