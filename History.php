<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
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
                    <div class="dailyReport" id="daily">
                        <div class="search_label d-flex justify-content-between">
                            <label class="machine_label"></label>
                            <div>
                                <div class="dropdown_graph">
                                    <input type="text" name="search" placeholder="Search">
                                    <button><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="content">
                    <div class="overflow-scroll" id="history_table" style="height: 77vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Machine Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Income</th>
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
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>