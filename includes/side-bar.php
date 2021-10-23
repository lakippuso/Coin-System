<a class="logo-link row g-0 nav-link " href="#">
    <img src="resources/images/Logo1.png" alt="LOGO" id="logo">
</a>
<hr class="m-1">
<!-- Navigation Buttons -->
<ul id="side-menu">
    <li class="nav-item">
        <a class="link nav-link active" href="Dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="DailyReport.php">Daily Reports</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="History.php">History</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="includes/logout.php">Logout</a>
    </li>
</ul>
<!-- Profile Section -->
<div class="profile row align-items-end">
    <a href="#" id="profile-link">
        <img src="resources/images/profile.png" alt="" width="30" height="32" class="rounded-circle">
        <strong>
            <?php
                session_start();
                if(isset($_SESSION['session_id'])){
                    echo $_SESSION['session_firstname'];
                }
                else{
                    echo 'NOT LOGGED IN';
                }
            ?>
        </strong>
    </a>
</div>