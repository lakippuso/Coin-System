<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<!-- Body -->
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/admin-side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto">Transactions</h1>
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
                        <div class="m-4 d-flex justify-content-evenly">
                            <div class="calendar d-flex justify-content-evenly" style="width: 600px;">
                                <div><input type="datetime-local" name="start_date" style="border-radius: 5px; padding: 3px;"></div>
                                <div><input type="datetime-local"  name="start_date" style="border-radius: 5px; padding: 3px;"></div>
                            </div>
                            <input type="button" name="generate" value="Search" style="color: #FEFFFF; width: 200px; background: #2B7A78; border: none; border-radius: 5px;">
                        </div>
                    </div>

                    <div class="daily-table overflow-scroll">
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