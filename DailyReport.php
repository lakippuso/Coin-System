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
                            <div class="calendar d-flex justify-content-around">
                                
                                <div class="dropdown">
                                    <select id="list">
                                        <optgroup label="Machine List">
                                            <option value="daily">1001</option> 
                                            <option value="biweekly">1002</option> 
                                            <option value="monthly">1003</option>
                                            <option value="annually">1004</option> 
                                        </optgroup> 
                                    </select>
                                </div>
                                <div><input type="datetime-local" name="start_date" style="border-radius: 5px; padding: 3px;"></div>
                                <div><input type="datetime-local"  name="start_date" style="border-radius: 5px; padding: 3px;"></div>
                                <div><button id="start" style="margin-top: 3px; padding: 4px; width: 40px; border: none; background: none; border-radius: 4px; font-size: 18px;"><img src="resources/images/search.png" style="width: 30px;"/></i></button></div>
                            </div>
                            <input type="button" name="generate" value="Generate Report" style="color: #FEFFFF; width: 200px; background: #2B7A78; border: none; border-radius: 5px;">
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
                                    $query="SELECT * FROM daily_report";
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
