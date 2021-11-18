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
                    <h4 class="col-auto">Machine</h1>
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
                    <div class="machine" id="daily">
                        <div class="search_label d-flex justify-content-between">
                            <label class="machine_label">Machine List</label>
                            <div>
                                <div class="dropdown_graph">
                                    <select>
                                            <optgroup label="Machine List">
                                            <option value="daily">1001</option> 
                                            <option value="biweekly">1002</option> 
                                            <option value="monthly">1003</option>
                                            <option value="annually">1004</option> 
                                    </select>
                                    <input type="text" name="search" placeholder="Search">
                                    <button><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-scroll" id="history_table" style="height: 77vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th class="col-lg-4">Machine Name</th>
                                    <th class="col-lg-3">Machine Type</th>
                                    <th class="col-lg-3">Income</th>
                                    <th class="col-lg-2" style="text-align: center;">Configuration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require 'includes/config.php';
                                    $x = 1;
                                    $query="SELECT machine_id, machine_type, income FROM machine_info";
                                    $result= $con->query($query);
                                    while($rows= $result-> fetch_assoc())
                                    {
                                ?>
                                <tr>
                                            <th scope="col"><?php echo $x ?></th>
                                            <th scope="col"><?php echo $rows['machine_id']; ?></th>
                                            <th scope="col"><?php echo $rows['machine_type']; ?></th>
                                            <th scope="col"><?php echo $rows['income']; ?></th>
                                            <th scope="col"style="text-align: center;">
                                                <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white; width:4em;">Info</button></span>
                                                <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white; width:4em;">Reset</button></span>
                                            </th>
                                </tr>
                                <?php
                                
                                        $x+=1;
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