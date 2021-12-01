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
                                    <label for="">Registered Machines: <strong><?php echo getNumMachines($_SESSION['session_username']);?></strong></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Daily Income</h4>
                                    <hr>
                                    <label for="">Today's Income: <?php echo getIncomeToday($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                            <div class="cards analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4 id="income_type"></h4>
                                    <hr>
                                    <span id="income_this"></span>
                                    <br>
                                    <span id="income_last"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="context m-3 d-flex justify-content-around">
                        <div class="user_info">
                            <div class="d-flex justify-content-between">
                                <label>Income Chart</label>
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
                                    <canvas id="graph1" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/weekly.js"></script>
                                </div>


                                <div class="monthly graph">
                                    <canvas id="graph2" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/monthly.js"></script>
                                </div>

                                <div class="annually graph">
                                    <canvas id="graph3" style="width:100%;width:500px;height:245px;"></canvas>
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