<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Dashboard</title>
        <link rel="stylesheet" href="resources/css/Dashboard.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Arvo" rel="stylesheet">
    </head>

    <body>
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <a class="logo-link row g-0 nav-link " href="#">
                    <img src="LogoCC.png" alt="LOGO" id="logo">
                </a>
                <hr class="m-1">
                <!-- Navigation Buttons -->
                <ul id="side-menu">
                    <li class="nav-item">
                        <a class="link nav-link active" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="DailyReport.php">Daily Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="History.php">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="Homepage.php">Logout</a>
                    </li>
                </ul>
                <!-- Profile Section -->
                <div class="profile row align-items-end">
                    <a href="#" id="profile-link">
                        <img src="resources/images/profile.png" alt="" width="30" height="32" class="rounded-circle">
                        <strong>Matthew Daniel Gabatino</strong>
                    </a>
                </div>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto">History</h1>
                    <!-- Date and Time -->
                    <div class="col-1">
                        <span class="row">
                            <?php 
                                date_default_timezone_set("Asia/Singapore");
                                echo date("Y/m/d");
                            ?>
                        </span>
                        <span class="row">
                            <?php 
                                echo date("h:i a");
                            ?></span>
                    </div>
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="dashboard">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Machine ID</th>
                                        <th scope="col">Daily Income</th>
                                        <th scope="col">Monthly Income</th>
                                        <th scope="col">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Machine_001</th>
                                        <th scope="col">90,000</th>
                                        <th scope="col">90,000</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <script src="../resources/js/dropdown.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>