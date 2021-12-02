<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
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
                    <h4 class="col-auto"><img src="resources/images/machines.png" style="width: 2em"></img>&nbsp;MACHINE</h1>
                    <!-- Date and Time -->
                </div>
                <!-- Content -->
                <div class="machine_back">
                    <div class="add_machineModal">
                        <label class="close_btn">&times;</label><br>
                        <div class="title">Add Your Machine</div>
                        <form id="add_machine_form" method="POST" action="includes/add-machine.php">
                            <div class="inputs">
                                <label>Machine ID Number</label>
                                <input class="" type="text" name="machine_id" id="machine_id_input">
                            </div>
                            <div class="inputs">
                                <label>Machine Name</label>
                                <input type="text" name="machine_name" id="machine_name_input">
                            </div>
                            <div class="inputs">
                                <label>Machine Type</label>
                                <br>
                                <select name="machine_type"class="types">
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
                <div class="content">
                    <div class="machine" id="daily">
                        <div class="search_label d-flex justify-content-between">
                            <label class="machine_label">Machine List</label>
                            <div class="d-flex justfiy-content-between">
                                <button class="add_machine" id="open_add">Add Machine</button>
                                <form method = "POST" action="machine.php" class="dropdown_graph">
                                    
                                    <input type="text" name="search" placeholder="Search">
                                    <button type="submit" style="border: none; background: none; padding: 4px;"><img src="resources/images/search.png" style="width: 30px;"/></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-scroll" id="history_table" style="height: 70vh;">
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
                                        // $id = array();
                                        // $machine = $rows['machine_id'];
                                        // array_push($id, $machine);

                                    ?>
                                <tr>
                                    <th scope="col"><?php echo $x ?></th>
                                    <th scope="col"><?php echo $rows['machine_name']; ?></th>
                                    <th scope="col"><?php echo $rows['machine_type']; ?></th>
                                    <th scope="col"><?php echo $rows['income']; ?></th>
                                    <th scope="col"><?php echo $rows['date_created']; ?></th>
                                    <th scope="col"style="text-align: center;">
                                        <span class="badge bg-primary rounded-pill"><button style="background: None; border: None; color: white; width:4em;">Config</button></span>
                                        <span class="badge bg-primary rounded-pill"><button onclick="dialog(<?php echo $rows['machine_id'];?>)" style="background: None; border: None; color: white; width:4em;">Reset</button></span>            
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
        <div class="dialog_bg <?php echo $rows['machine_id'];?>">
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
                            <a href="includes/reset-machine.php?machine_id=" id = "reset_button"><button class="continue">Continue</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" src="resources/js/add_machine.js"></script>
<script type="text/javascript">
    function dialog(button) {
        var reset_bg = document.querySelector('.dialog_bg');
        var reset_close = document.querySelector('.cancel');
        var reset_button = document.getElementById('reset_button');

        console.log();
        reset_bg.classList.add('db-active');

        reset_close.addEventListener('click', function () {
            reset_bg.classList.remove('db-active');
        });

        
        $.ajax({
            url: "includes/get-id.php",
            method: "POST",
            data: {"machine_id": button},
            success: function(response){
                console.log(response);
                var href1 = document.getElementById("reset_button").getAttribute("href")+response;
                console.log(href1);
                reset_button.setAttribute("href", href1);
            }
        });
    }
</script>
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>