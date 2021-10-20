<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resources/css/Dashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Dashboard</title>
    </head>

    <body>
        <div class="main mx-auto row g-0">
            <div class="side-bar col-lg-2 d-flex flex-column">
                <a class="nav-link mx-auto" href="#">
                    <img src="resources/images/Logo1.png" alt="LOGO" width="140">
                </a>
                <hr class="m-1">
                <ul id="side-menu">
                    <li class="nav-item bg-info">
                        <a class="nav-link" href="# D">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# R">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# S">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# D">Dashboard</a>
                    </li>
                </ul>
                <div class="profile row align-items-end">
                    <div class="col-2">
                        PIC
                    </div>
                    <div class="col-10">
                        <span class="row">Matthew Daniel Gabatino</span>
                        <span class="row">Admin</span>
                    </div>
                </div>
            </div>
            <div class="dashboard col-lg-10">
                <div class="header row m-0 p-2 d-flex justify-content-between">
                    <h4 class="col-auto">Dashboard</h1>
                    <div class="col-1">
                        <span class="row">01/01/2000</span>
                        <span class="row">00:00</span>
                    </div>
                </div>
                <div class="content">
                    <div class="dashboard">
                        <div class="dashboard-box row my-4 g-0 d-flex justify-content-around">
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Online Machines: 69</label>
                                    <br>
                                    <label for="">Offline Machines: 69</label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Daily Income</h4>
                                    <hr>
                                    <label for="">Today's Income: 69</label>
                                    <br>
                                    <label for="">Yesterday's Income: 69</label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Monthly Income</h4>
                                    <hr>
                                    <label for="">This Month's Income: 69</label>
                                    <br>
                                    <label for="">Last Month's Income: 69</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="dashboard"> -->
            <!--Sidebar-->
            <!-- <div class="sidebar">
                <div class="profile">
                    <img src="profile.png">
                    <div class="name">John Leo Jovita</div>
                </div>
                <div class="side_profile">
                    <a href="#"><button>Profile</button></a>
                </div>
                <div class="side_dashboard">
                    <a href="Dashboard.html"><button>Dashboard</button></a>
                </div>
                <div class="dropdown">
                    <div class="side_report">
                        <button class="dropdown_report">Reports <i class="fas fa-caret-down"></i></button>
                    </div>
                    <div class="dropdown_choices">
                        <a href="DailyReport.html"><button>Daily Report</button></a>
                        <a href="History.html"><button>History</button></a>
                    </div>
                </div>
                <div class="side_logout">
                    <a href="Homepage.html"><button class="logout">Logout</button></a>
                </div>
            </div> -->
            
            <!--Heading-->
            <!-- <div class="header">
                <div class="hd_dashboard">
                    <div class="page_name">DASHBOARD</div>
                </div>
                <div class="cards">
                    <div class="card" id="card_machines">
                        <label>Machines</label>
                        <div class="text">69</div>
                    </div>
                    <div class="card" id="card_today">
                        <label>Today's Income</label>
                        <div class="text">69,000</div>
                    </div>
                    <div class="card" id="card_monthly">
                        <label>Monthly Income</label>
                        <div class="text">690,000</div>
                    </div>
                </div>
            </div>       
            <div class="search">
                <form action="#">
                    <input type="text" name="search_box" placeholder="Search">
                    <button class="fas fa-search"></button>
                </form>
            </div>
            <div class="table-responsive-md">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Machine ID</th>
                            <th scope="col">Daily Income</th>
                            <th scope="col">Monthly Income</th>
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
            </div> -->
        </div>
    <script src="../resources/js/dropdown.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>