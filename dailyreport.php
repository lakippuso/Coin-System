<!-- Header -->
<?php
    include 'includes/header-include.php';
?>

<title>Report</title>
<!-- Body -->
        <!-- Navigation Bar -->
        <?php include 'includes/nav-bar.php'?>
        <div class="main mx-auto row g-0">
            <!-- Side Bar -->
            <div class="side-bar col-lg-2 g-0 d-flex flex-column">
                <?php include 'includes/side-bar.php' ?>
            </div>
            <!-- Content -->
            <div class="dashboard col-lg-10">
                <!-- Header -->
                <div class="header d-flex justify-content-between">
                    <h4 class="col-auto"><img src="resources/images/reports.png" style="width: 2em"></img>&nbsp;REPORTS</h1>
                    <!-- Date and Time -->
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="dailyReport" id="daily">
                        <div class="m-4 d-flex justify-content-around">
                            <div class="d-flex justify-content-between">
                                <div class="calendar d-flex flex-column">
                                    <div class="radio__bg d-flex justify-content-evenly" id="incomePeriod" style="margin-bottom: 1em; margin-right: auto; margin-left: auto;">
                                        <div>
                                            <input class="radio__button" type="radio" id="daily_report" name="period" value="Daily" onchange="radioChange();" checked>
                                            <label class="radio__label" for="daily_report">Daily</label><br>
                                        </div>
                                        <div>
                                            <input class="radio__button" type="radio" id="weekly_report" name="period" value="Weekly" onchange="radioChange();">
                                            <label class="radio__label" for="weekly_report">Weekly</label><br>
                                        </div>
                                        <div>
                                            <input class="radio__button" type="radio" id="monthly_report" name="period" value="Monthly" onchange="radioChange();">
                                            <label class="radio__label" for="monthly_report">Monthly</label>
                                        </div>
                                        <div>
                                            <input class="radio__button" type="radio" id="annually" name="period" value="Annually" onchange="radioChange();">
                                            <label class="radio__label" for="annually">Annually</label>
                                        </div>
                                        <div>
                                            <input class="radio__button" type="radio" id="custom" name="period" value="Custom" onchange="radioChange();">
                                            <label class="radio__label" for="custom">Custom</label>
                                        </div>
                                    </div>
                                    <script src="resources/js/yearly.js"></script>

                                    <div class="d-flex justify-content-evenly" style="margin-top: auto; margin-right: auto; margin-left: 8px;">
                                        <div class="dropdown">
                                            <select name="search_id[]" id="list" multiple="multiple" class="machine active">
                                                <?php
                                                    require 'includes/config.php';
                                                    $username = $_SESSION['session_username'];
                                                    $query="SELECT machine_name FROM machine_info WHERE username = '$username'";
                                                    $result= $con->query($query);
                                                    while($rows= $result-> fetch_assoc())
                                                    {
                                                ?>
                                                    <option value="<?php echo htmlspecialchars($rows['machine_name']);  ?>"><?php echo htmlspecialchars($rows['machine_name']); ?></option>   
                                                <?php
                                                    }
                                                    $con-> close();
                                                ?>
                                            </select>
                                        </div>
                                        <div><input type="date" name="start_date" id="start" max="<?php echo printDate();?>" style="border-radius: 5px; padding: 3px;" placeholder="Start Date"></div>
                                        <div ><input type="text" name="start_year" id="year_start" style="border-radius: 5px; padding: 3px; display: none;" placeholder="yyyy" ></div>
                                        <div><input type="date" name="end_date" id="end" max="<?php echo printDate();?>" style="border-radius: 5px; padding: 3px;" placeholder="End Date"></div>
                                        <div><button id="search_report" style="margin-top: 3px; padding: 4px; width: 40px; border: none; background: none;"><img src="resources/images/search.png" style="width: 30px;"/></button></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end" style="width: 20em;">
                                    <input class="generate" type="button" id="generate" value="Generate Report">
                                </div>
                            </div>
                        </div>

                    

                    <div class="overflow-scroll" id="scroll" style="height: 65vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="col">No.</th>
                                    <th class="col-lg-2">Machine ID</th>
                                    <th class="col-lg-2">Machine Name</th>
                                    <th class="col-lg-4">Date</th>
                                    <th class="col-lg-4">Total Income</th>
                                </tr>
                            </thead>
                            <tbody id="report_table">
                                <?php
                                    require 'includes/config.php';
                                    $i = 1;
                                    $username = $_SESSION['session_username'];
                                    $date_now = date('Y-m-d');
                                    $query="SELECT * FROM daily_report LEFT JOIN machine_info ON daily_report.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";
                                    // if(isset($_GET['search_id'])){
                                    //     $search_id = $_GET['search_id'];
                                    //     if(!empty($search_id)){
                                    //         if($search_id != "All Machines"){
                                    //             $query = $query."AND machine_id IN ($search_id)";
                                    //         }
                                    //     }
                                    // }
                                    // if(isset($_GET['start_date'])){
                                    //     $start_date = $_GET['start_date'];
                                    //     if(isset($_GET['end_date'])){
                                    //         $end_date = $_GET['end_date'];
                                    //     }
                                    //     if(!empty($start_date) && !empty($end_date)){
                                    //         // echo "Start Date: ".$start_date."<br>";
                                    //         // echo "End Date: ".$end_date."<br>";
                                    //         $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
                                    //     }
                                    //     else if(!empty($start_date)){
                                    //         if(strlen($start_date) == 7){
                                    //             $str = substr($start_date, 5);
                                    //             $query = $query."AND MONTH(date) = '$str'";
                                    //         }
                                    //         else if(strlen($start_date) == 8){
                                    //             $str = substr($start_date, 6);
                                    //             $query = $query."AND WEEK(date) = '$str'";
                                    //         }
                                    //         else{
                                    //             $query = $query."AND date = '$start_date'";
                                    //         }
                                    //     }
                                    // }
                                    // else if(isset($_GET['year'])){
                                    //     $year = $_GET['year'];
                                    //     $query = $query."AND YEAR(date) = '$year'";
                                    // }
                                    $query = $query."ORDER BY date DESC";
                                    $result= $con->query($query);
                                    while($rows= $result-> fetch_assoc())
                                    {
                                ?>
                                        <tr>
                                            <th scope="col"><?php echo $i ?></th>
                                            <th scope="col"><?php echo htmlspecialchars($rows['machine_id']); ?></th>
                                            <th scope="col"><?php echo htmlspecialchars($rows['machine_name']); ?></th>
                                            <th scope="col"><?php echo htmlspecialchars($rows['date']); ?></th>
                                            <th scope="col"><?php echo htmlspecialchars($rows['day_income']); ?></th>
                                        </tr>
                                <?php
                                
                                        $i+=1;
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
