<!-- Navbar -->
<nav class="top-nav navbar g-0 mx-auto">
    <div class="nav-container container-fluid">
        <a class="logo-link navbar-brand " href="#">
            <img src="resources/images/Logo1.png" alt="LOGO" id="logo">
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