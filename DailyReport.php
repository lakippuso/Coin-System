<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>
<!-- Body -->
        <div class="main mx-auto row g-0">
            <!-- Navigation Bar -->
            <?php include 'includes/nav-bar.php'?>
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
                            <form method="POST" action="includes/generate-report.php" class="calendar d-flex flex-column">

                                <div class="radio__bg d-flex justify-content-evenly" id="incomePeriod" style="margin-bottom: 1em; margin-right: auto; margin-left: auto;">
                                    <div>
                                        <input class="radio__button" type="radio" id="daily_report" name="period" value="Daily" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Daily')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'" checked>
                                        <label class="radio__label" for="daily_report">Daily</label><br>
                                    </div>
                                    <div>
                                        <input class="radio__button" type="radio" id="weekly_report" name="period" value="Weekly" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Weekly')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                        <label class="radio__label" for="weekly_report">Weekly</label><br>
                                    </div>
                                    <div>
                                        <input class="radio__button" type="radio" id="monthly_report" name="period" value="Monthly" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Monthly')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                        <label class="radio__label" for="monthly_report">Monthly</label>
                                    </div>
                                    <div>
                                        <input class="radio__button" type="radio" id="annually" name="period" value="Annually" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Annually')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                        <label class="radio__label" for="annually">Annually</label>
                                    </div>
                                    <div>
                                        <input class="radio__button" type="radio" id="custom" name="period" value="Custom" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Custom')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='block'">
                                        <label class="radio__label" for="custom">Custom</label>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-evenly" style="margin-top: auto; margin-right: auto; margin-left: 8px;">
                                    <div class="dropdown">
                                        <select name="search_id[]" id="list" multiple="multiple" class="machine active">
                                            <?php
                                                require 'includes/config.php';
                                                $query="SELECT machine_id FROM machine_info ";
                                                $result= $con->query($query);
                                                while($rows= $result-> fetch_assoc())
                                                {
                                            ?>
                                                <option value="<?php echo $rows['machine_id']; ?>"><?php echo $rows['machine_id']; ?></option>   
                                            <?php
                                                }
                                                $con-> close();
                                            ?>
                                        </select>
                                    </div>
                                    <div><input type="text" name="start_date" id="start" value="<?php if(isset($_POST['start_date'])) echo $_POST['start_date']?>"style="border-radius: 5px; padding: 3px;" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Start Date"></div>
                                    <div><input type="text" name="end_date" id="end" value="<?php if(isset($_POST['end_date'])) echo $_POST['end_date']?>"style="border-radius: 5px; padding: 3px;" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="End Date"></div>
                                    <div><button type="submit" name="filter" id="start" style="margin-top: 3px; padding: 4px; width: 40px; border: none; background: none;"><img src="resources/images/search.png" style="width: 30px;"/></button></div>
                                </div> 
                                <input class="generate" type="submit" name="generate" value="Generate Report">
                            </form>
                        </div>

                    

                    <div class="overflow-scroll" id="scroll" style="height: 65vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="col">No.</th>
                                    <th class="col-lg-4">Machine Name</th>
                                    <th class="col-lg-4">Date</th>
                                    <th class="col-lg-4">Total Income</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require 'includes/config.php';
                                    $i = 1;
                                    $username = $_SESSION['session_username'];
                                    $query="SELECT * FROM daily_report where username = '$username'";
                                    if(isset($_GET['search_id'])){
                                        $search_id = $_GET['search_id'];
                                        if(!empty($search_id)){
                                            if($search_id != "All Machines"){
                                                $query = $query."AND machine_id IN ($search_id)";
                                            }
                                        }
                                    }
                                    if(isset($_GET['start_date']) && isset($_GET['end_date'])){
                                        $start_date = $_GET['start_date'];
                                        $end_date = $_GET['end_date'];
                                        if(!empty($start_date) && !empty($end_date)){
                                            // echo "Start Date: ".$start_date."<br>";
                                            // echo "End Date: ".$end_date."<br>";
                                            $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
                                        }
                                        else if(!empty($start_date)){
                                            $query = $query."AND date = '$start_date'";
                                        }
                                    }
                                    $query = $query."ORDER BY date DESC";
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
