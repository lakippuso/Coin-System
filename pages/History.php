<!-- Header -->
<?php
    include '../includes/header-inside.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Dashboard</title>
        <link rel="stylesheet" href="../resources/css/history.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Arvo" rel="stylesheet">
    </head>
    <body>
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include '../includes/side-bar.php' ?>
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
<!-- Footer -->
<?php
    include '../includes/footer-inside.php';
?>