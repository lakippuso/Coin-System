

<!-- Profile Section -->
<div class="profile-side row mt-3">
    <a href="profile.php" id="profile-link">
        <?php 
            if(isset($_SESSION['session_id'])/* && $_SESSION['session_category'] === 'user'*/){
                include 'config.php';
                $username = $_SESSION['session_username'];
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
            <img src="<?php echo ($row['pic_url']!="")? $row['pic_url']: "resources/images/profile.png";?>" style="width: 3em; border-radius: 25px; border: 1px solid black" class="sidebar-pic"></img>
            &nbsp;&nbsp;<strong><?php echo htmlspecialchars($row['first_name']) ;?></strong>
        <?php
                }
            }
            else{
                header('Location: index.php?notloggedin');
                exit();
            }
        ?>
    </a>
</div>
<hr class="m-1">

<!-- Logout Dialog Box -->
<div class="logout_bg">
    <div class="logout_box">
        <div class="logout_btn">
            <div class="lg_title">
                <img src="resources/images/logout.png" style="width: 30px;"/>
                <div class="title_out" style="margin-top: 0.3em; margin-left: 0.3em;">Account Logout</div>
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

<nav class="side-collapse navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <div class="profile-collapse">
            <a href="profile.php" id="profile-link">
                <?php 
                    if(isset($_SESSION['session_id']) /*&& $_SESSION['session_category'] === 'user'*/){
                        include 'config.php';
                        $username = $_SESSION['session_username'];
                        $sql = "SELECT * FROM users WHERE username = '$username'";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                <img src="<?php echo ($row['pic_url']!="")? $row['pic_url']: "resources/images/profile.png";?>" style="width: 3em; border-radius: 25px; border: 1px solid black;" class="collapse-pic"></img>
                &nbsp;&nbsp;<strong><?php echo htmlspecialchars($row['first_name']) ;?></strong>
                <?php
                        }
                    }
                    else{
                        header('Location: index.php?notloggedin');
                        exit();
                    }
                ?>
            </a>
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="collapse-nav navbar-nav">
        <a class="link-cp link nav-link" href="dashboard.php" style="color: white">Dashboard</a>
        <a class="link-cp link nav-link" href="dailyreport.php" style="color: white">Reports</a>
        <a class="link-cp link nav-link" href="machine.php" style="color: white">Machine</a>
        <a class="link-cp link nav-link" href="history.php" style="color: white">History</a>
        <button class="collapse-lg link nav-link" id="log-out2" style="color: white">Logout</button>
      </div>
    </div>
  </div>
</nav>