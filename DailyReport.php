<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<script type="text/javascript">
    $(document).ready(function(){
        var radioValue = $("input[name=$_POST['period']]:checked").val();
        if(radioValue == "Daily") {
            document.getElementById('end').style.display="none";
        }
    });
</script>
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
                    <h4 class="col-auto">Reports</h1>
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
                    <div class="d-flex justify-content-evenly" id="incomePeriod" style="margin-top: 1em;">
                    </div>
                    <div class="dailyReport" id="daily">
                        <div class="m-4 d-flex justify-content-around">
                            <form method="POST" action="dailyreport.php" class="calendar d-flex justify-content-between">
                                
                                <div>
                                    <input type="radio" id="daily_report" name="period" value="Daily" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Daily')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'" checked>
                                    <label for="Daily">Daily</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="biweekly_report" name="period" value="Biweekly" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Biweekly')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                    <label for="Biweekly">Biweekly</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="monthly_report" name="period" value="Monthly" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Monthly')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                    <label for="Monthly">Monthly</label>
                                </div>
                                <div>
                                    <input type="radio" id="annually" name="period" value="Annually" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Annually')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='none'">
                                    <label for="Annually">Annually</label>
                                </div>
                                <div>
                                    <input type="radio" id="custom" name="period" value="Custom" <?php echo (isset($_POST['period'])) ? ($_POST['period']=='Custom')? 'checked':'':'';?> onclick="document.getElementById('end').style.display='block'">
                                    <label for="Custom">Custom</label>
                                </div> 
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
                                <div><button type="submit" id="start" style="margin-top: 3px; padding: 4px; width: 40px; border: none; background: none; border-radius: 4px; font-size: 18px;"><img src="resources/images/search.png" style="width: 30px;"/></button></div>
                            </form>
                            <input class="generate" type="button" name="generate" value="Generate Report">
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
                                    $query="SELECT * FROM daily_report where username = '$username'";
                                    if(isset($_POST['search_id'])){
                                        $search_id = $_POST['search_id'];
                                        $search_id_query = implode(",",$search_id);
                                        echo $search_id_query;
                                        if(!empty($search_id)){
                                            if($search_id != "All Machines"){
                                                $query = $query."AND machine_id IN ($search_id_query)";
                                            }
                                        }
                                    }
                                    if(isset($_POST['start_date']) && isset($_POST['end_date'])){
                                        $start_date = $_POST['start_date'];
                                        $end_date = $_POST['end_date'];
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
