<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<!-- Body -->
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto">Daily Report</h1>
                    <!-- Date and Time -->
                    <div class="col-1">
                        <span class="row">
                            <?php 
                                echo printDate()
                            ?>
                        </span>
                        <span class="row">
                            <?php 
                                echo printTime()
                            ?>
                        </span>
                    </div>
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="dailyReport" id="daily">
                        <div class="m-4 d-flex justify-content-around">
                            <form method="POST" action="dailyreport.php" class="calendar d-flex justify-content-between">
                                <div class="dropdown">
                                    <select name="search_id" id="list">
                                        <option>All Machines</option>
                                        <optgroup label="Machine List">
                                        <?php
                                            require 'includes/config.php';
                                            $query="SELECT machine_id FROM machine_info ";
                                            $result= $con->query($query);
                                            while($rows= $result-> fetch_assoc())
                                            {
                                        ?>
                                            <option><?php echo $rows['machine_id']; ?></option>   
                                        <?php
                                            }
                                            $con-> close();
                                        ?>
                                        </optgroup>
                                    </select>
                                    
                                </div>
                                <div><input type="date" name="start_date" value="<?php if(isset($_POST['start_date'])) echo $_POST['start_date']?>"style="border-radius: 5px; padding: 3px;"></div>
                                <div><input type="date" name="end_date" value="<?php if(isset($_POST['end_date'])) echo $_POST['end_date']?>"style="border-radius: 5px; padding: 3px;"></div>
                                <div><button type="submit" id="start" style="margin-top: 3px; padding: 4px; width: 40px; border: none; background: none; border-radius: 4px; font-size: 18px;"><img src="resources/images/search.png" style="width: 30px;"/></button></div>
                            </form>
                            <input class="generate" type="button" name="generate" value="Generate Report">
                        </div>
                    </div>

                    <div class="overflow-scroll" id="scroll">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="col">No.</th>
                                    <th class="col-lg-4">Machine Name</th>
                                    <th class="col-lg-4">Date</th>
                                    <th class="col-lg-4">Monthly Income</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require 'includes/config.php';
                                    $i = 1;
                                    $username = $_SESSION['session_username'];
                                    $queryDisplay="SELECT * FROM daily_report where username = '$username' ORDER By date DESC";
                                    $querySearch="SELECT * FROM daily_report where username = '$username'";
                                    $query= "";
                                    $query = $queryDisplay;
                                    if(isset($_POST['search_id'])){
                                        $search_id = $_POST['search_id'];
                                        if(!empty($search_id)){
                                            $querySearch = $querySearch."AND machine_id = '$search_id' ORDER By date DESC";
                                            $query = $querySearch;
                                        }
                                    }
                                    if(isset($_POST['start_date']) && isset($_POST['end_date'])){
                                        $start_date = $_POST['start_date'];
                                        $end_date = $_POST['end_date'];
                                        if(!empty($start_date) && !empty($end_date)){
                                            // echo "Start Date: ".$start_date."<br>";
                                            // echo "End Date: ".$end_date."<br>";
                                            $querySearch = $querySearch."AND date BETWEEN '$start_date' AND '$end_date' ORDER By date DESC";
                                            $query = $querySearch;
                                        }

                                    }
                                    $result= $con->query($query);
                                    while($rows= $result-> fetch_assoc())
                                    {
                                ?>
                                        <tr>
                                            <th scope="col"><?php echo $i ?></th>
                                            <th scope="col"><?php echo $rows['machine_id']; ?></th>
                                            <th scope="col"><?php echo $rows['date']; ?></th>
                                            <th scope="col"><?php echo $rows['day_income']; ?></th>
                                        </tr>
                                <?php
                                
                                        $i+=1;
                                    }
                                    $con-> close();
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
