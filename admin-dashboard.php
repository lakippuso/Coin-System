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
                    <div class="row">
                        <div class="dashboard-box row my-4 g-0 d-flex justify-content-around">
                            <div class="analytic-cards card col-sm-3 col-md-3 col-lg-3 shadow">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Registered Machines: <strong><?php echo getTotalMachines();?></strong></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-sm-3 col-md-3 col-lg-3 shadow">
                                <div class="card-body">
                                    <h4>New Clients</h4>
                                    <hr>
                                    <label for="">Clients: <?php echo getNewUsers()?></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-sm-3 col-md-3 col-lg-3 shadow">
                                <div class="card-body">
                                    <h4>Total Clients</h4>
                                    <hr>
                                    <label for="">Clients: <?php echo getAllUsers()?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-3 mt-4">
                        <h5 class="col-2">Machine List</h5>
                        <input type="text" placeholder="Search ID" class="col-3 offset-5" id="machine_id_search">
                    </div>
                    <div class="content-row mx-3 mt-3 row">
                        <div class="machine-list col overflow-scroll">
                            <table class="machine-table table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Machine ID</th>
                                        <th>Machine Name</th>
                                        <th>Owner</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody id="machine-tbody">
                                    <?php
                                        $query = "SELECT * from machine_info";
                                        $result= $con->query($query);
                                        while($rows= $result-> fetch_assoc())
                                        {
                                            echo "<tr>";
                                    ?>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['machine_id']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['machine_name']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['username']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['date_created']);?></th>
                                    <?php
                                        echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mx-3 mt-4">
                        <h5 class="col-2">Client List</h5>
                        <input type="text" placeholder="Search ID" class="col-3 offset-5" id="client_id_search">
                    </div>
                    <div class="content-row mx-3 mt-3 row">
                        <div class="client-list col overflow-scroll">
                            <table class="client-table table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody id="client-tbody">
                                    <?php
                                        $query = "SELECT * from users WHERE category = 'user'";
                                        $result= $con->query($query);
                                        while($rows= $result-> fetch_assoc())
                                        {
                                            echo "<tr>";
                                    ?>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['date_created']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['username']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['first_name']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['last_name']);?></th>
                                            <th scope="col"><?php  echo htmlspecialchars($rows['email']);?></th>
                                    <?php
                                        echo "</tr>";
                                        }
                                    ?>
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
