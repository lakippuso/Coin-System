<!-- Header -->

<?php
    include 'includes/header-include.php';
?>
<title>History</title>
        <!-- Navigation Bar -->
        <?php include 'includes/nav-bar.php'?>
        <div class="main row g-0 mx-auto ">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto"><img src="resources/images/history.png" style="width: 2em"></img>&nbsp;HISTORY</h1>
                    <!-- Date and Time -->
                </div>
                <!-- Content -->
                <form action="includes/history-include.php" method="POST">
                    <div class="content">
                        <div class="dailyReport" id="daily">
                            <div class="search_label d-flex justify-content-between">
                                <div>
                                    <input type="text" name="search_id" id="search_history" placeholder="Search Machine ID" value="<?php echo (isset($_GET['search_id']))? $_GET['search_id']: null;?>">
                                    <button type="submit" name="search" style="border: none; background: none; padding: 4px;"><img src="resources/images/search.png" style="width: 30px;"/></button>
                                </div>
                                <div>
                                    <input class="his-delete" type="submit" name="delete" value="Delete">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="overflow-scroll" id="history_table" style="height: 70vh;">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="select_all_items"></th>
                                        <th class="col-lg-2">Machine Name</th>
                                        <th class="col-lg-4">Machine ID</th>
                                        <th class="col-lg-3">Total Income</th>
                                        <th class="col-lg-4">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 
                                            require 'includes/config.php';
                                            $username = $_SESSION['session_username'];
                                            $sql="SELECT * FROM  history LEFT JOIN machine_info ON history.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";
                                            if(isset($_GET['search_id'])){
                                                $search_id = $_GET['search_id'];
                                                if(!empty($search_id)){
                                                    $sql = $sql."AND history.machine_id = '$search_id'";
                                                }
                                            }
                                            $result = mysqli_query($con,$sql);
                                            while($rows = mysqli_fetch_assoc($result)){
                                        ?>
                                    <tr>
                                                <th><input type="checkbox" class="cb_item" name="selected[]" value="<?php echo $rows['history_id'];?>"></th>
                                                <th scope="col"><?php echo htmlspecialchars($rows['machine_name']);?></th>
                                                <th scope="col"><?php echo htmlspecialchars($rows['machine_id']);?></th>
                                                <th scope="col"><?php echo htmlspecialchars("??? ".$rows['total_income']);?></th>
                                                <th scope="col"><?php echo htmlspecialchars($rows['reset_date']);?></th>
                                    </tr>
                                                    
                                    <?php  }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        
<!-- Footer -->

<?php
    include 'includes/footer-inside.php';
?>
