<?php
    session_start();
    if(isset($_SESSION['session_id'])){
        header('Location: pages/dashboard.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Arvo" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body>
         <div class="header navbar navbar-expand-lg justify-content-between" id="myHeader">
            <div class="floater"><h3>CCM</h3></div>
            <button type="button" class="loginkulay" id="open_form">LOGIN</button>
        </div>
        
        <div class="login_form">
			<label class="close_btn">&times;</label>
			<div class="title">Login</div>
			<form method="POST" action="includes/login-include.php">
				<div class="inputs">
					<label>Username</label>
					<input type="text" name="username">
                    <span id="username_error" class="my-3"><?php if(isset($_GET['username_error'])){ echo $_GET['username_error'];}?></span>
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
				<div class="register" style="text-align: center;">New User?&nbsp;<a href="pages/registration.php">Register Here!</a></div>
			</form>
		</div>


        <section class="section1" id="gallery"> 
        <div class="container pt-md-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card cardcon mt-3 mb-3">
                        <h3>LOREM IPSUM</h3>
                        <img src="resources/images/pic3.gif" class="card-img-top" alt="">
                        <h4>Coin Counter Machine</h4>            
                        <div class="card-body">
                        <p class="card-text mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Reiciendis eveniet minus sapiente expedita iusto voluptas dolorum corrupti deserunt aperiam 
                            assumenda laboriosam commodi adipisci reprehenderit quo ratione fugit ullam minima ipsam aliquid 
                            necessitatibus, rerum maiores nam! Beatae necessitatibus corporis praesentium labore dolorum quod ut 
                            esse velit ipsam, alias, tempora iusto blanditiis.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card cardcon mt-5 mb-5">
                        <h3>LOREM IPSUM</h3>
                        <img src="resources/images/pic2.gif" class="card-img-top" alt="">
                        <h4>Coin Counter Machine</h4>            
                        <div class="card-body">
                        <p class="card-text mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Reiciendis eveniet minus sapiente expedita iusto voluptas dolorum corrupti deserunt aperiam 
                            assumenda laboriosam commodi adipisci reprehenderit quo ratione fugit ullam minima ipsam aliquid 
                            necessitatibus, rerum maiores nam! Beatae necessitatibus corporis praesentium labore dolorum quod ut 
                            esse velit ipsam, alias, tempora iusto blanditiis.
                        </p>
                        <a href="#" class="btn-card">Login</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card cardcon mt-3 mb-3">
                        <h3>LOREM IPSUM</h3>
                        <img src="resources/images/pic4.gif" class="card-img-top" alt="">
                        <h4>Coin Counter Machine</h4>            
                        <div class="card-body">
                        <p class="card-text mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Reiciendis eveniet minus sapiente expedita iusto voluptas dolorum corrupti deserunt aperiam 
                            assumenda laboriosam commodi adipisci reprehenderit quo ratione fugit ullam minima ipsam aliquid 
                            necessitatibus, rerum maiores nam! Beatae necessitatibus corporis praesentium labore dolorum quod ut 
                            esse velit ipsam, alias, tempora iusto blanditiis.
                        </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <h2 class="title-content text-center">Lorem Ipsum</h2>
            <hr/>
            <div class="row content-name text-center text-md-start">
                <div class="col-md-2">
                    <img src="resources/images/con1.gif" class="img-fluid">
                </div>
                <div class="col content-detail">
                    <h5 class="content-name-2 p-2 p-md-0 pt-md-2">INFO</h5>
                    <p class="Con-p p-2 p-md-0 pt-md-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
                        nobis molestiae tenetur maxime inventore neque eos totam qui est temporibus 
                        dolor quidem animi, eum officia praesentium odit odio consectetur reprehenderit.
                        Ab eligendi similique dolore doloribus cumque sit, culpa voluptatem illum iste
                        tempora asperiores placeat amet ratione fugiat sunt quia aliquid!
                    </p>
                </div>

                <div class="row content-name text-center text-md-start">
                    <div class="col-md-2">
                        <img src="resources/images/con2.gif" class="img-fluid">
                    </div>
                    <div class="col content-detail">
                        <h5 class="content-name-2 p-2 p-md-0 pt-md-2">INFO</h5>
                        <p class="Con-p p-2 p-md-0 pt-md-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
                            nobis molestiae tenetur maxime inventore neque eos totam qui est temporibus 
                            dolor quidem animi, eum officia praesentium odit odio consectetur reprehenderit.
                            Ab eligendi similique dolore doloribus cumque sit, culpa voluptatem illum iste
                            tempora asperiores placeat amet ratione fugiat sunt quia aliquid!
                        </p>
                    </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php 
        include 'includes/footer-index.php';
    ?>

    <script src="resources/js/login.js"></script>

    </body>
</html>