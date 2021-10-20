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
                    <div class="history_table">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Date Generated</th>
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
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>