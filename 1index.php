<?php
    session_start();
    if(isset($_SESSION['session_id'])){
        // if($_SESSION['session_category']=='admin'){
        //     header("Location: admin-dashboard.php");
        //     exit();
        // }
        // else{
        // }
        header("Location: dashboard.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/1index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Arvo" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body>
         <div class="header navbar navbar-expand-lg justify-content-between" id="myHeader">
            <div class="d-flex justify-content-around">
                <img src="resources/images/LogoCC.png" style="position: relative; width: 50px;"></img>
                <div class="floater"><h3>CCM</h3></div>
            </div>
            <div class="d-flex justify-content-around">
                <a href="index.php"><button type="button" class="loginkulay" id="open_form">LOGIN</button></a>
                <a href="registration.php"><button type="button" class="registerkulay">SIGN UP</button></a>
            </div>
        </div>

        <section class="section1" id="gallery"> 
        <div class="container pt-md-5">
        <h1>About Us</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card cardcon mt-3 mb-3">
                        <h3>Website Features</h3>
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
                        <h3>Coin Counter Website</h3>
                        <img src="resources/images/pic2.gif" class="card-img-top" alt="">
                        <div class="card-body">
                        <p class="card-text mt-3">
                            Coin Counter Website (CCW) enables a user to monitor its total income and generate a report for specific span of time, this enable the user to differentiate the differences of income of user's machine.
                        </p>
                        <p class="card-text mt-3" style="margin-bottom: 3em; align-text: center;">
                            User's required to sign-up to use our website and GREAT NEWS! Signing is free. Register to be able to experiences our innovation's capabilities.
                        </p>
                        <a href="#" class="btn-card">Create your own Account</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card cardcon mt-3 mb-3">
                        <h3>Machine Features</h3>
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

    <section class="section2" id="services-section">
        <div class="container">
            <h2 class="title-content text-center">Services</h2>
            <hr/>
            <div class="row content-name text-center text-md-start">
                <div class="col-md-2">
                    <img src="resources/images/con1.gif" class="img-fluid">
                </div>
                <div class="col content-detail">
                    <h5 class="content-name-2 p-2 p-md-0 pt-md-2">INFO</h5>
                    <p class="Con-p p-2 p-md-0 pt-md-2">
                        Coin Counter machine(CCM) is a embedded coin sorting machine that sort and counts coins. This machine has a web interface which display income that machine process throughtout its process. This invention was meant for small business which uses coin operated system such as vending machine, piso-net, Wi-Fi etc.
                    </p>
                </div>

                <div class="row content-name text-center text-md-start">
                    <div class="col-md-2">
                        <img src="resources/images/con2.gif" class="img-fluid">
                    </div>
                    <div class="col content-detail">
                        <h5 class="content-name-2 p-2 p-md-0 pt-md-2">INFO</h5>
                        <p class="Con-p p-2 p-md-0 pt-md-2">
                            Coin Counter Machine(CCM) aims to provide a better solution in manual counting of income for these types of businesses since having a coin operated business takes a lot of effort to be able to count or sort coins. Having this type of innovation will make users work to be lessen.
                        </p>
                    </div>
            </div>
        </div>
    </section>
    <section class="section2" id="developer-section">
        <div class="container">
            <h2 class="title-content text-center">Meet the Team</h2>
            <hr/>
            <div class="row content-name text-center text-md-start">
                <div class="d-flex justify-content-evenly m-3"> 
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/profile.png" class="card-img-top" alt="John">
                        <h4>John</h4>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <img src="resources/images/fb.png" class="card-img-bottom" style="width: 2em; margin-left: auto; margin-right: auto; margin-bottom: 1em;"></img>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/profile.png" class="card-img-top" alt="Matt">
                        <h4>Matt</h4>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <img src="resources/images/fb.png" class="card-img-bottom" style="width: 2em; margin-left: auto; margin-right: auto; margin-bottom: 1em;"></img>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly m-3"> 
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/profile.png" class="card-img-top" alt="Angel">
                        <h4>Angel</h4>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <img src="resources/images/fb.png" class="card-img-bottom" style="width: 2em; margin-left: auto; margin-right: auto; margin-bottom: 1em;"></img>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/profile.png" class="card-img-top" alt="Julius">
                        <h4>Julius</h4>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <img src="resources/images/fb.png" class="card-img-bottom" style="width: 2em; margin-left: auto; margin-right: auto; margin-bottom: 1em;"></img>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/profile.png" class="card-img-top" alt="Joel">
                        <h4>Joel</h4>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <img src="resources/images/fb.png" class="card-img-bottom" style="width: 2em; margin-left: auto; margin-right: auto; margin-bottom: 1em;"></img>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>