

<!-- Profile Section -->
<div class="profile-side row mt-3">
    <a href="profile.php" id="profile-link">
        <img src="resources/images/profile.png" alt="" width="30" height="32" class="rounded-circle">
        <strong>
            <?php 
                if(isset($_SESSION['session_id']) /*&& $_SESSION['session_category'] === 'user'*/){
                    echo $_SESSION['session_firstname'];
                }
                else{
                    header('Location: index.php?notloggedin');
                }
            ?>
        </strong>
    </a>
</div>
<hr class="m-1">

<!-- Logout Dialog Box -->
<div class="logout_bg">
    <div class="logout_box">
        <div class="logout_btn">
            <div class="lg_title">
                <img src="resources/images/logout.png" style="width: 30px;"/>
                <div style="margin-top: 0.3em; margin-left: 0.3em;">Account Logout</div>
            </div>
            <div class="logout_content">
                <br>
                
                <h2 style="margin-bottom: 0; text-align: center; font-size: 18px"><img src="resources/images/qm.png" style="width: 50px;"></img>&nbsp;&nbsp;&nbsp;&nbsp;Are you sure you want to Logout?</h2>
                <hr>
                <div class="logout_choice">
                    <button class="lg_cancel">Cancel</button>
                    <a href="includes/logout.php" id = "logout_button"><button class="ok">Ok</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation Buttons -->
<ul id="side-menu">
    <li class="nav-item">
        <a class="link nav-link" href="dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="dailyreport.php">Reports</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="machine.php">Machine</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="history.php">History</a>
    </li>
    <li class="nav-item">
        <button class="logout link nav-link" id="log-out">Logout</button>
    </li>
</ul>

