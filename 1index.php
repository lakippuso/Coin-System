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
        <link rel="shortcut icon" href="resources/images/LogoCC.png"/>
        <link rel="stylesheet" href="resources/css/1index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Arvo" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body>
         <div class="header navbar navbar-expand-lg justify-content-between" id="myHeader">
            <div class="d-flex justify-content-around">
                <img src="resources/images/GeekCoin.png" style="position: relative; width: 12em;"></img>
            </div>
            <div class="d-flex justify-content-around">
                <a href="index.php"><button type="button" class="loginkulay" id="open_form">LOGIN</button></a>
                <a href="registration.php" class="reg-link"><button type="button" class="registerkulay">SIGN UP</button></a>
            </div>
        </div>

        <section class="section1" id="gallery"> 
        <div class="container pt-md-5">
        <h2 class="title-content text-center">About Us</h2>
        <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card cardcon mt-3 mb-3">
                        <h3>About Website</h3>
                        <img src="resources/images/website.gif" class="card-img-top" alt="">
                        <h4>Coin Counter Machine</h4>            
                        <div class="card-body">
                        <p class="card-text mt-3">
                        Coin Counter Machine website was created to help small business who owned coin-related business to monitor their daily income, since businesses like these are needed multiple hands to be able to count their income. Website has the ability also to give details and compare the incomes for the owner to identify different problems their business encountered.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card cardcon mt-5 mb-5">
                        <h3><strong>GeekCoin</strong></h3>
                        <img src="resources/images/pic2.gif" class="card-img-top" alt="">
                        <div class="card-body">
                        <p class="card-text mt-3">
                            GeekCoin is a embedded coin sorting machine that sort and counts coins. This machine has a web interface which display the income that machine process. This invention was meant for small business which uses coin operated system such as vending machine, piso-net, Wi-Fi etc.
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
                        <h3>About Machine</h3>
                        <img src="resources/images/machine.gif" class="card-img-top" alt="">
                        <h4>Coin Counter Machine</h4>            
                        <div class="card-body">
                        <p class="card-text mt-3">
                            Coin Counter Machine made an machine which can be embedded in other type of coin-based machines of different coin-related businesses such as Vending Machines, Piso-net and Piso-wifi. This machine has the ability to send accepted data (Coin) into the website which the website will display or compute. In order for the website to recieve real-time information, machine should be connected through internet to be able to use its function.
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
                    <h5 class="content-name-2 p-2 p-md-0 pt-md-2">GeekCoin (Web)</h5>
                    <p class="Con-p p-2 p-md-0 pt-md-2" style="text-align:justify;">
                        GeekCoin offers the user enables to monitor its total income and generate a report for specific span of time, which is very helpful for the user to differentiate the differences of income of every machines. The user will able to add machine and manipulate its settings.
                    </p>
                </div>

                <div class="row content-name text-center text-md-start">
                    <div class="col-md-2">
                        <img src="resources/images/con2.gif" class="img-fluid">
                    </div>
                    <div class="col content-detail">
                        <h5 class="content-name-2 p-2 p-md-0 pt-md-2">GeekCoin (Machine)</h5>
                        <p class="Con-p p-2 p-md-0 pt-md-2" style="text-align:justify;">
                            GeekCoin machine offers the users to count the coins that the machine collected and send the data to the machine to be able to see. This process can help business to lessen to the time and managing their machines and helps to lessen the common errors. Machine has the ability to sort since some of the business owners wanted to be organize in their income, so having this kind of process will help a lot.
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
                        <img src="resources/images/John.png" class="card-img-top" alt="John">
                        <h4><strong>Leo</strong></h4>
                        <div class="card-body">
                            <p class="card-text">I'm the <strong>Project Manager</strong> of the team, I am the responsible in planning and organizing the system and documentation. I am also responsible for making the team straight in order to achieve our goals.</p>
                        </div>
                        <a class="fb-links" href="https://www.facebook.com/jovita.leyyo25/" target="_blank"><img src="resources/images/fb.png" class="card-img-bottom"></img></a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/Matt.png" class="card-img-top" alt="Matt">
                        <h4><strong>Matt</strong></h4>
                        <div class="card-body">
                            <p class="card-text">I'm the <strong>Lead Programmer</strong> of the team. I'm responsible for programming the website and machine. I'm also resposible for the maintenance and configuration of the machine.</p>
                        </div>
                        <a class="fb-links" href="https://www.facebook.com/lakippuso" target="_blank"><img src="resources/images/fb.png" class="card-img-bottom"></img></a>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly m-3"> 
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/Ambos.png" class="card-img-top" alt="Angel">
                        <h4><strong>John</strong></h4>
                        <div class="card-body">
                            <p class="card-text">I'm the <strong>UI/UX Designer</strong> of the team, I am the responsible in creating the user-friendly interface that enables the users to understand how to use complex technicality of the website.</p>
                        </div>
                        <a class="fb-links" href="https://www.facebook.com/JohnAngelzsx" target="_blank"><img src="resources/images/fb.png" class="card-img-bottom"></img></a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/Julius.png" class="card-img-top" alt="Julius">
                        <h4><strong>Julius</strong></h4>
                        <div class="card-body">
                            <p class="card-text">I'm the <strong>Quality Assurance Engineer</strong> of the team. I'm responsible for the Functionality of the system and also responsible for checking bugs and responsiveness of the system.</p>
                        </div>
                        <a class="fb-links" href="https://www.facebook.com/HiimJuLz" target="_blank"><img src="resources/images/fb.png" class="card-img-bottom"></img></a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="resources/images/Joel.png" class="card-img-top" alt="Joel">
                        <h4><strong>Joel</strong></h4>
                        <div class="card-body">
                            <p class="card-text">I'm the <strong>System Engineer</strong> of the team, I am responsible for system structural designing, upgrading system and brainstorming for possible improvement for the system.</p>
                        </div>
                        <a class="fb-links" href="https://www.facebook.com/shiin.033016" target="_blank"><img src="resources/images/fb.png" class="card-img-bottom"></img></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>