<!-- Navbar -->
<nav class="top-nav navbar g-0 mx-auto shadow-lg">
    <div class="nav-container container-fluid">
        <a class="logo-link navbar-brand " href="dashboard.php">
            <img src="resources/images/GeekCoin.png" alt="LOGO" id="logo" style="width: 8em">
        </a>
        <div class="date-time col-1">
            <span class="row g-0">
                <?php 
                    echo printDate();
                ?>
            </span>
            <span class="row g-0">
                <?php 
                    echo printTime();
                ?>
            </span>
        </div>
    </div>
</nav>