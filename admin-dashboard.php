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
                <?php include 'includes/admin-side-bar.php' ?>
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
                            <div class="analytic-cards card col-sm-5 col-md-5 col-lg-5 shadow">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Registered Machines: <strong><?php echo getNumMachines($_SESSION['session_username']);?></strong></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-sm-5 col-md-5 col-lg-5 shadow">
                                <div class="card-body">
                                    <h4>Total Clients</h4>
                                    <hr>
                                    <label for="">Clients: <?php echo getIncomeToday($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="machine-list col">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Machine ID</th>
                                        <th>Owner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>12312312</th>
                                        <th>Me</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="client-list col">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Machine ID</th>
                                        <th>Owner</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>12312312</th>
                                        <th>Me</th>
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
