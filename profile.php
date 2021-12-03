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
                    <h4 class="col-auto">Profile</h1>
                </div>
                <!-- Content -->
                <div class="nav-bars">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Manage Password</button>
                        </li>
                    </ul>
                </div>
                
                <div class="tab-content" id="myTabContent">
                    <?php
                        include 'includes/config.php';
                        $username = $_SESSION['session_username'];
                        $sql = "SELECT * from users WHERE username = '$username'";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <!--Profile-->
                    <div class="profile tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="my-profile" action="#" method="POST">
                            <div class="avatar">
                                <label>Avatar</label>
                                <img src="resources/images/profile.png" style="width: 10em;" class="profile-pic"></img>
                                <input class="choose_file" type="file">
                            </div>
                            <div class="name">
                                <label>Name</label>
                                <input type="text" name="first_name" id="first" placeholder="First Name" value="<?php echo $row['first_name'];?>">
                                <input type="text" name="middle_name" id="middle" placeholder="Middle Name" value="<?php ?>">
                                <input type="text" name="last_name" id="last" placeholder="Last Name" value="<?php echo $row['last_name'];?>">
                                <input type="text" name="name_suffix" id="suffix" placeholder="Suffix" value="<?php  ?>">
                            </div>
                            <div class="email">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $row['email'];?>">
                            </div>
                            <div class="phone">
                                <label>Phone</label>
                                <input id="phone" name="phone" class="no-arrow" type="number" value="<?php ?>">
                            </div>
                            <hr>
                            <label style="margin-top: 0.5em;">Business Information</label>
                            <div class="b-name">
                                <label>Name</label>
                                <input name="phone" type="text">
                            </div>
                            <div class="b-add">
                                <label>Address</label>
                                <input name="phone" type="text">
                            </div>
                            <div class="save_change d-flex justify-content-end">
                                <input type="submit" name="save" value="Save Changes">
                            </div>
                        </form>
                    </div>
                    <?php 
                        }
                    ?>
                    
                    <!--Password-->
                    <div class="manage-password tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <form class="m-pass" action="" method="">
                            <div class="current">
                                <label>Current</label>
                                <input name="phone" type="password">
                            </div>
                            <div class="new">
                                <label>New Password</label>
                                <input name="phone" type="password">
                            </div>
                            <div class="retype">
                                <label>Retype Password</label>
                                <input name="phone" type="password">
                            </div>
                            <div class="save_change d-flex justify-content-end">
                                <input type="submit" name="save" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
                

            </div>
        </div>
        </div>
        
<!-- Footer -->

<?php
    include 'includes/footer-inside.php';
?>