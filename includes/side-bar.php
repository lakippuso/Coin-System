<a class="logo-link row g-0 nav-link " href="#">
    <img src="resources/images/Logo1.png" alt="LOGO" id="logo">
</a>
<hr class="m-1">
<!-- Navigation Buttons -->
<ul id="side-menu">
    <li class="nav-item">
        <a class="link nav-link" href="dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="dailyreport.php">Daily Reports</a>
    </li>
    <li class="nav-item">
        <a class="link nav-link" href="history.php">History</a>
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
                if(isset($_SESSION['session_id']) && $_SESSION['session_category'] === 'user'){
                    echo $_SESSION['session_firstname'];
                }
                else{
                    header('Location: index.php?notloggedin');
                }
            ?>
        </strong>
    </a>
</div>