<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Homepage.css">
        <title>Home Page</title>
    </head>
    <body>
        
        <div class="header" id="myHeader">
            <div class="floater"><h3>CCM</h3></div>
            <button type="button" class="btn btn-outline-info" id="open_form">LOGIN</button>
        </div>

        <div class="login_form">
			<label class="close_btn">&times;</label>
            












            <fieldset>
			<legend class="title">Login</legend>
                <form method="POST" action="includes/login-include.php">
                    <div class="inputs">
                        <label>Username</label>
                        <input type="text" name="username">
                        <span id="username_error"><?php if(isset($_GET['username_error'])){ echo $_GET['username_error'];}?></span>
                    </div>
                    <div class="inputs">
                        <label>Password</label>
                        <input type="password" name="password">
                        <span id="password_error"><?php if(isset($_GET['password_error'])){ echo $_GET['password_error'];}?></span>
                    </div>
                    <div class="forgot">
                        <label><a href="#">Forgot Password?</a></label>
                    </div >
                    <div class="submit">
                        <div class="design"></div>
                        <input type="submit" name="submit" value="LOGIN">
                    </div>
                    <div class="register">New User?&nbsp;<a href="pages/registration.php">Register Here!</a></div>
                </form>
            </fieldset>










		</div>

        <div class="container shadow my-3 align-self-center" id="content">
            <div class="row justify-content-center">
                <div class="col-md align-self-center">
                    <div class="card-header"><h1>Lorem ipsum</h1></div>                    
                    <div class="card-body">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
                        <a href="Registration.html" class="btn btn-info" id="register">Register Here!</a>
                    </div>
                    <div class="card-footer">Free Registration. No Credit Card Required</div>

                </div>

                <div class="col-md align-self-center">
                    <img src="https://i.imgflip.com/34ckde.gif" alt="myGIF" width="100%" />
                </div>
            </div>

            <div class="row" id="frst_foot" style="background-color: lightgray">
                <div class="col">
                    <h5 align="center">Coin Counter Machine</h5>
                </div>
            </div>
        </div>


        <div class="container g-2 my-5 px-3" id="add_content">
            <div class="row">
                <div class="col-md align-self-center shadow-lg p-5">
                    <h1>Lorem ipsum</h1>
                    <p class="text" align="justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
                </div>

                <div class="col-md align-self-center">
                    <img src="https://i.imgflip.com/34ckde.gif" alt="myGIF" width="100%" />
                </div>
            </div>

            <div class="row">
                <div class="col-md align-self-center p-5">
                    <img src="https://i.imgflip.com/34ckde.gif" alt="myGIF" width="100%" />
                </div>
                <div class="col-md align-self-center shadow-lg" >
                    <div class="text"><h1>Lorem ipsum</h1>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Maecenas porttitor congue massa.</li>
                            <li>Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="ft">
            <p><a href="mailto:name@yourdomain.com">eugene@mydomain.com</a> & &nbsp;0917 781 2534</p>
        </div>

        <script src ="login.js" ></script>
        <script src ="header.js" ></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>