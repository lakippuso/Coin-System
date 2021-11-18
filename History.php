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
                                <form method = "POST" action="history.php"  class="dropdown_graph">
                                    <input type="text" name="search" placeholder="Search">
                                    <button type="submit"><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="content">
                    <div class="overflow-scroll" id="history_table" style="height: 77vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">History ID </th>
                                    <th scope="col">Machine ID</th>
                                    <th scope="col">Total Income</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        require 'includes/config.php';
                                        $username = $_SESSION['session_username'];
                                        $sql="SELECT * FROM history where username = '$username'";
                                        if(isset($_POST['search'])){
                                            $search_id = $_POST['search'];
                                            if(!empty($search_id)){
                                                $sql = $sql."AND machine_id = '$search_id'";
                                            }
                                        }
                                        $result = mysqli_query($con,$sql);
                                            while($rows = mysqli_fetch_assoc($result)){
                                    ?>
                                <tr>
                                                <th scope="col"><?php echo $rows['history_id'];?></th>
                                                <th scope="col"><?php echo $rows['machine_id'];?></th>
                                                <th scope="col"><?php echo $rows['total_income'];?></th>
                                                <th scope="col"><?php echo $rows['reset_date'];?></th>
                                </tr>
                                                
                                <?php  }?>
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