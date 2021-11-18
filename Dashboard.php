<!-- Header -->
<?php
    include 'includes/header-inside.php';
?>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".graph").not("." + optionValue).hide();
                $("." + optionValue).show();
            }
            else {
                $(".graph").hide();
            }
        });
    }).change();
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
                    <h4 class="col-auto">Dashboard</h1>
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
                    <div class="dashboard">
                        <div class="dashboard-box row my-4 g-0 d-flex justify-content-around">
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Total Machines </h4>
                                    <hr>
                                    <label for="">Registered Machines: <strong><?php echo getNumMachines($_SESSION['session_username']);?></strong></label>
                                </div>
                            </div>
                            <div class="analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4>Daily Income</h4>
                                    <hr>
                                    <label for="">Today's Income: <?php echo getIncomeToday($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                            <div class="cards analytic-cards card col-lg-3">
                                <div class="card-body">
                                    <h4 id="income_type">Daily Income</h4>
                                    <hr>
                                    <label for="">Total Current Income: <?php echo getIncomeThisMonth($_SESSION['session_username'])?></label>
                                    <br>
                                    <label for="">Total Previous Income: <?php echo getIncomeLastMonth($_SESSION['session_username'])?></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Users -->
                    <div class="context m-3 d-flex justify-content-around">
                        <div class="user_info">
                            <div class="d-flex justify-content-between">
                                <label>Income Chart</label>
                                <div>
                                    <div class="dropdown_graph">
                                        <select id="income_list" onchange="getSelectedValue();">
                                                <option value="daily">Daily</option> 
                                                <option value="biweekly">Biweekly</option> 
                                                <option value="monthly">Monthly</option>
                                                <option value="annually">Annually</option> 
                                        </select>
                                        <input type="text" name="search" placeholder="Search">
                                        <button><img src="resources/images/search.png" style="width: 20px;"/></button>
                                    </div>
                                    <script type="text/javascript" src="resources/js/card.js"></script>
                                </div>
                            </div>
                            <div class="graphs">
                                <div class="daily graph">
                                    <canvas id="graph1" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/daily.js"></script>
                                </div>


                                <div class="monthly graph">
                                    <canvas id="graph2" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/monthly.js"></script>
                                </div>

                                <div class="biweekly graph">
                                    <canvas id="graph3" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/biweekly.js"></script>
                                </div>

                                <div class="annually graph">
                                    <canvas id="graph4" style="width:100%;width:500px;height:245px;"></canvas>
                                    <script src="resources/js/annually.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Footer -->
<?php
    include 'includes/footer-inside.php';
?>