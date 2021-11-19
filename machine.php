<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
        <div class="main mx-auto row g-0">
            <div class="machine_back">
                <div class="add_machineModal">
                    <label class="close_btn">&times;</label>
                    <div class="title">Add Your Machine</div>
                    <form method="POST">
                        <div class="inputs">
                            <label>Machine Name</label>
                            <input type="text" name="name_machine">
                        </div>
                        <div class="inputs">
                            <label>Machine Type</label>
                            <br>
                            <select class="types">
                                <option>Piso-Wifi</option>
                                <option>Vending Machines</option>
                                <option>Piso-Net</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="submit">
                            <div class="design"></div>
                            <input type="submit" name="submit" value="Add Machine">
                        </div>
                    </form>
                </div>
            </div>
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
                            <div class="d-flex justfiy-content-between">
                                <button class="add_machine" id="open_add">Add Machine</button>
                                <script type="text/javascript" src="resources/js/add_machine.js"></script>
                                <form method = "POST" action="machine.php" class="dropdown_graph">
                                    
                                    <input type="text" name="search" placeholder="Search">
                                    <button type="submit"><img src="resources/images/search.png" style="width: 20px;"/></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-scroll" id="history_table" style="height: 77vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th class="col-lg-3">Machine Name</th>
                                    <th class="col-lg-2">Machine Type</th>
                                    <th class="col-lg-2">Total Income</th>
                                    <th class="col-lg-3">Date Created</th>
                                    <th class="col-lg-2" style="text-align: center;">Configuration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require 'includes/config.php';
                                    $x = 1;
                                    $username = $_SESSION['session_username'];
                                    $query="SELECT * FROM machine_info where username = '$username'";
                                    if(isset($_POST['search'])){
                                        $search_id = $_POST['search'];
                                        if(!empty($search_id)){
                                            $query = $query."AND machine_name = '$search_id'";
                                        }
                                    }
                                    $result= $con->query($query);
                                    while($rows= $result-> fetch_assoc())
                                    {
                                ?>
                                <tr>
                                            <th scope="col"><?php echo $x ?></th>
                                            <th scope="col"><?php echo $rows['machine_name']; ?></th>
                                            <th scope="col"><?php echo $rows['machine_type']; ?></th>
                                            <th scope="col"><?php echo $rows['income']; ?></th>
                                            <th scope="col"><?php echo $rows['date_created']; ?></th>
                                            <th scope="col"style="text-align: center;">
                                                <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white; width:4em;">Info</button></span>
                                                <a class="badge bg-primary rounded-pill" href="includes/reset-machine.php?machine_id=<?php echo $rows['machine_id']; ?>"><button style="background: None; border: None; color: white; width:4em;">Reset</button></a>
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