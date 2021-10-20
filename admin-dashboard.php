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
                                    <h4>New Users</h4>
                                    <hr>
                                    <label for="">New Users: </label>
                                    <br>
                                    <label for="">Total Users: <?php echo getAllUsers($_SESSION['session_username']);?></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-4">
                                <div class="card-body">
                                    <h4>Total Machine Registered</h4>
                                    <hr>
                                    <label for="">Today's Income: </label>
                                    <br>
                                    <label for="">Yesterday's Income: </label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Total Users</h4>
                                    <hr>
                                    <label for="">This Month's Income: </label>
                                    <br>
                                    <label for="">Last Month's Income: </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Add Users -->
                    <div class="context m-3 d-flex justify-content-around">
                        <div class="user_info">
                            <div class="d-flex justify-content-between">
                                <label>User List Registered</label>
                                <div>
                                    <input type="text" name="search" placeholder="Search">
                                    <button><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </div>
                            </div>
                            <div class="overflow-scroll" id="fix_table">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">User's Full Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Date Registered</th>
                                            <th scope="col">Total Machine Registered</th>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="user_list">
                            <div class="add_user"><center><button>Add User</button></center></div>
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