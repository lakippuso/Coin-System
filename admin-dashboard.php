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
                                    <h4>Users </h4>
                                    <hr>
                                    <label for="">New Users: </label>
                                    <br>
                                    <label for="">Total Users: <?php echo getAllUsers($_SESSION['session_username']);?></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Income</h4>
                                    <hr>
                                    <label for="">Today's Income: </label>
                                    <br>
                                    <label for="">Yesterday's Income: </label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>AKLSDGHAS</h4>
                                    <hr>
                                    <label for="">This Month's Income: </label>
                                    <br>
                                    <label for="">Last Month's Income: </label>
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