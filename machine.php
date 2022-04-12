<!-- Header -->
<?php
    include 'includes/header-include.php';
?>
<title>Machine</title>
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
                    <h4 class="col-auto"><img src="resources/images/machines.png" style="width: 2em"></img>&nbsp;MACHINE</h1>
                    <!-- Date and Time -->
                </div>
                <!-- Content -->
                <div class="content">
                    <div class="machine" id="daily">
                        <div class="search_label d-flex justify-content-between">
                            <label class="machine_label">Machine List</label>
                            <div class="d-flex justfiy-content-between">     

                                <button class="add_machine" id="reset_machine" onclick="dialog()">Reset Machine</button>
                                <button class="add_machine" id="open_add">Add Machine</button>
                                <form method = "POST" action="machine.php" class="dropdown_graph">
                                    <input type="text" name="search" placeholder="Search Name" value="<?php echo (isset($_POST['search']))? $_POST['search']: null;?>">
                                    <button type="submit" style="border: none; background: none; padding: 4px;"><img src="resources/images/search.png" style="width: 30px;"/></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-scroll" id="history_table" style="height: 70vh;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="select_all_items"></th>
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
                                        if(!empty($search_id) && $search_id != "" ){
                                            $query = $query."AND machine_name = '$search_id'";
                                        }
                                    }
                                    $query .= "ORDER BY date_created DESC";
                                    $result= $con->query($query);
                                    while($rows= $result-> fetch_assoc())
                                    {
                                        // $id = array();
                                        // $machine = $rows['machine_id'];
                                        // array_push($id, $machine);

                                    ?>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="cb_item" name="machine_select" value = "<?php echo htmlspecialchars($rows['machine_id']); ?>"></th>
                                    <th scope="col"><?php echo $x ?></th>
                                    <th scope="col"><?php echo htmlspecialchars($rows['machine_name']); ?></th>
                                    <th scope="col"><?php echo htmlspecialchars($rows['machine_type']); ?></th>
                                    <th scope="col"><?php echo htmlspecialchars("₱ ".$rows['income']); ?></th>
                                    <th scope="col"><?php echo htmlspecialchars($rows['date_created']); ?></th>
                                    <th scope="col"style="text-align: center;">
                                        <span class="badge bg-primary rounded-pill"><button onclick="configuration(<?php echo $rows['machine_id'];?>);" style="background: None; border: None; color: white; width:4em;">Details</button></span>
                                    </th>
                                </tr>
                                
                                <?php
                                        $x+=1;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dialog Box Reset -->
        <div class="dialog_bg">
            <div class="dialog_box">
                <div class="dialog">
                    <div class="title">
                        <img src="resources/images/R.png" style="width: 30px;"/>
                        <div style="margin-top: 0.3em; margin-left: 0.3em;">Machine Income Reset</div>
                    </div>
                    <div class="dialog_content"><br>
                        <h2 style="margin-bottom: 0; text-align: center; font-size: 20px;"><img src="resources/images/qm.png" style="width: 50px; margin-left: -10px; margin-right: 20px"></img>Are you sure?</h2><hr>
                        <div style="text-align: center; padding: 1em;">Selecting yes will reset your machine's income and will be saved in history, this action is cannot be change.</div>
                        <div class="dialog_choice">
                            <button class="cancel">Cancel</button>
                            <button class="continue">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Machine Modal -->
        <div class="machine_back">
            <div class="add_machineModal">
                <label class="close_btn">&times;</label><br>
                <div class="title">Add Your Machine</div>
                <div class="add-form container g-0 mt-4" id="add_machine_form">
                    <label class="row g-0">Machine ID Number:</label>
                    <input class="inputs row col-12 g-0" type="text" name="machine_id" id="machine_id_input">
                    <span class="error machine_id g-0">Hello</span>

                    <label class="row g-0">Machine Name:</label>
                    <input class="inputs row col-12 g-0" type="text" name="machine_name" id="machine_name_input">
                    <span class="error machine_name g-0">Hello</span>

                    <label for="machine_types" class="row g-0">Machine Type:</label>
                    <select name="machine_type" class="types form-control row col-12 g-0" onchange="customInput()" id="machine_types">
                        <option>Piso-Wifi</option>
                        <option>Vending Machines</option>
                        <option>Piso-Net</option>
                        <option value="others">Others</option>
                    </select>

                    <label class="machine_custom_label g-0 row">Enter Machine Type:</label>
                    <input class="machine_custom_input row g-0 col-12" type="text" name="custom_machine_type">
                    <span class="error custom_type">Hello</span>
                    <div class="adddiv">
                        <button class="add-button row col-12 g-0 mt-1" id="add_machine_button">Add Machine</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Configuration Modal -->
        <div class="config_bg">
            <div class="config_box">
                <div class="config">
                    <div class="config_title d-flex justify-content-start">
                        <img src="resources/images/setting.png" style="width: 30px;"/>&nbsp;
                        <div style="margin-top: 0.3em; margin-left: 0.3em;">Machine Configuration</div>
                    </div>
                    <div class="config-title d-flex justify-content-between">
                        <label style="font-weight: 600; margin-left: 1em;">Machine Information</label>
                        <button class="delete" id="delete-machine">Delete</button>
                    </div>
                    <hr style="margin-left: 2em; margin-right: 2em;">

                    <div class="config-machine d-flex justify-content-evenly">
                        <div class="machine-section d-flex flex-column">
                            <label>Machine ID</label>
                            <input type="text" id="machine-config-id" disabled>
                            <label>Machine Name</label>
                            <input type="text" id="machine-config-name">
                            <label>Machine Type</label>
                            <input type="text" id="machine-config-type" disabled>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="wifi-section d-flex flex-column">
                            <label style="margin-bottom: 1em; font-weight: 600;">Machine Income Details</label>
                            <label>Total Income Collected</label>
                            <input type="text" id="overall-income" disabled>
                            <label>Daily Income</label>
                            <input type="text" id="detail-daily-income" disabled>
                            <label>Monthly Income</label>
                            <input type="text" id="detail-monthly-income" disabled>
                        </div>
                    </div>
                    <div class="save-btn d-flex justify-content-end">
                        <button class="config-save" id="save-machine">Save Changes</button>
                        <button class="config-cancel">Cancel</button>
                    </div>
                </d>
            </div>
        </div>
<script type="text/javascript" src="resources/js/add_machine.js"></script>
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>