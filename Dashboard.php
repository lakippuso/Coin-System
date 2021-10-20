<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<!-- Body -->
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto">Dashboard</h1>
                    <!-- Date and Time -->
                    <div class="col-1">
                        <span class="row">
                            <?php 
                                echo printDate();
                            ?>
                        </span>
                        <span class="row">
                            <?php 
                                echo printTime();
                            ?>
                        </span>
                    </div>
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="dashboard">
                        <div class="dashboard-box row my-4 g-0 d-flex justify-content-around">
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Online Machines: <?php echo getNumMachines($_SESSION['session_username']);?></label>
                                    <br>
                                    <label for="">Offline Machines: 69</label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Daily Income</h4>
                                    <hr>
                                    <label for="">Today's Income: <?php echo getIncomeToday($_SESSION['session_username'])?></label>
                                    <br>
                                    <label for="">Yesterday's Income: <?php echo getIncomeYesterday($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Monthly Income</h4>
                                    <hr>
                                    <label for="">This Month's Income: <?php echo getIncomeThisMonth($_SESSION['session_username'])?></label>
                                    <br>
                                    <label for="">Last Month's Income: <?php echo getIncomeLastMonth($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Users -->
                    <div class="context m-3 d-flex justify-content-around">
                        <div class="user_info">
                            <div class="d-flex justify-content-between">
                                <label>Monthly Income Chart</label>
                                <div>
                                    <input type="text" name="search" placeholder="Search">
                                    <button><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </div>
                            </div>
                            <canvas id="myChart" st yle="width:100%;width:550px"></canvas>
                            <script>
                                var xValues = ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'];
                                var yValues = [15000,13000,20000,35000,23000];

                                new Chart("myChart", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    fill: false,
                                    lineTension: 0,
                                    backgroundColor: "rgba(0,0,255,1.0)",
                                    borderColor: "rgba(0,0,255,0.1)",
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    scales: {
                                    yAxes: [{ticks: {beginAtZero: true, stepSize: 10000, max: 70000}}],
                                    }
                                }
                                });
                            </script>
                        </div>

                        <div class="user_list">
                            <div class="add_user"><center><button>Add Machine</button></center></div>
                            <div class="overflow-scroll" id="user_manipulate">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        jovita025
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        gabatino015
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        moy024
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        ambosxz02
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        joelski06
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white;">Edit</button></span>
                                    </li>
                                </ul>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>