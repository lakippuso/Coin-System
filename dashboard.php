<!-- Header -->
<?php
    include 'includes/header-include.php';
?>
<title>Dashboard</title>
<!-- Body -->
        <!-- Navigation Bar -->
        <?php include 'includes/nav-bar.php'?>
        <div class="main row g-0 mx-auto">

            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto"><img src="resources/images/history.png" style="width: 2em"></img>&nbsp;Dashboard</h1>
                    <!-- Date and Time -->
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="content1">
                        <div class="dashboard-box row my-4 g-0 d-flex justify-content-around">
                            <div class="analytic-cards card col-sm-3 col-md-3 col-lg-3">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Registered Machines: <strong><?php echo getNumMachines($_SESSION['session_username']);?></strong></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-sm-3 col-md-3 col-lg-3">
                                <div class="card-body">
                                    <h4>Daily Income</h4>
                                    <hr>
                                    <label for="">Today's Income: <?php echo getIncomeToday($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                            <div class="cards analytic-cards card col-sm-3 col-md-3 col-lg-3">
                                <div class="card-body">
                                    <h4 id="income_type"></h4>
                                    <hr>
                                    <span id="income_this"></span>
                                    <span id="income_data"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="context m-3 d-flex justify-content-around">
                        <div class="user_info">
                            <div class="d-flex justify-content-between">
                                <label id="chart-label"><span>Income Chart<span></label>
                                <div>
                                    <div class="dropdown_graph">
                                        <select id="income_list" onchange="getSelectedValue()">
                                                <option value="weekly">Weekly</option> 
                                                <option value="monthly">Monthly</option>
                                                <option value="annually">Annually</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="graphs">
                                <div class="weekly graph">
                                    <canvas id="graph1" style="width:100%;width:500px;height:245px; display: block;"></canvas>
                                    <script src="resources/js/weekly.js"></script>
                                </div>


                                <div class="monthly graph">
                                    <canvas id="graph2" style="width:100%;width:500px;height:245px; display: block;"></canvas>
                                    <script src="resources/js/monthly.js"></script>
                                </div>

                                <div class="annually graph">
                                    <canvas id="graph3" style="width:100%;width:500px;height:245px; display: block;"></canvas>
                                    <script src="resources/js/annually.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>
