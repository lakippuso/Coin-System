<!-- Header -->
<?php
    include 'includes/header-include.php';
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Profile</title>
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
                        <form class="my-profile" action="includes/profile-include.php" method="POST" enctype="multipart/form-data">
                            <div class="avatar">
                                <label>Avatar</label>
                                <img src="<?php echo ($row['pic_url']!="")? $row['pic_url']: "resources/images/profile.png";?>" style="width: 10em;" class="profile-pic" id="avatar">
                                <input class="choose_file" type="file" name = "profile_upload" accept ="image/*" id="profile_upload">
                                <span class="profile-error">Error :D</span>
                            </div>
                            <div class="name">
                                <label>Name</label>
                                <input type="text" name="first_name" id="first" placeholder="First Name" value="<?php echo htmlspecialchars($row['first_name']) ;?>" required>
                                <input type="text" name="middle_name" id="middle" placeholder="Middle Name" value="<?php echo htmlspecialchars($row['middle_name']) ?>">
                                <input type="text" name="last_name" id="last" placeholder="Last Name" value="<?php echo htmlspecialchars($row['last_name']) ;?>" required>
                                <input type="text" name="name_suffix" id="suffix" placeholder="Suffix" value="<?php echo htmlspecialchars($row['suffix']) ?>">
                                <span class = "profile-error">Error :D</span>
                            </div>
                            <div class="email">
                                <label>Email</label>
                                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($row['email']) ;?>" required>
                                <span class = "profile-error">Error :D</span>
                            </div>
                            <div class="phone">
                                <label>Phone</label>
                                <input id="phone" name="phone" class="no-arrow" type="number" value="<?php echo htmlspecialchars($row['contact_no']) ?>">
                                <span class = "profile-error">Error :D</span>
                            </div>
                            <hr>
                            <label style="margin-top: 0.5em;">Business Information</label>
                            <div class="b-name">
                                <label>Name</label>
                                <input name="business_name" type="text" value="<?php  echo htmlspecialchars($row['business_name']) ?>">
                                <span class = "profile-error">Error :D</span>
                            </div>
                            <div class="b-add">
                                <label>Address</label>
                                <input name="business_add" type="text" value="<?php  echo htmlspecialchars($row['business_add']) ?>">
                                <span class = "profile-error">Error :D</span>
                            </div>
                            <!-- <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                <button class="btn btn-primary" type="button" disabled>Disabled button</button>
                            </span> -->
                            <div class="save_change d-flex justify-content-end">
                                <input type="submit" name="save-profile" value="Save Changes">
                            </div>
                        </form>
                    </div>
                    <?php 
                        }
                    ?>
                    
                    <script type="text/javascript" src="resources/js/profile.js"></script>
                    <!--Password-->
                    <div class="manage-password tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <div class="m-pass">
                            <div class="current">
                                <label>Current</label>
                                <input type="password" class="show-pass1" id="current_pass">
                                <i class="material-icons" id="pass-visible1">visibility_off</i>
                                <span class="error-pass">E</span>
                            </div>
                            <div class="new">
                                <label>New Password</label>
                                <input type="password" class="show-pass2" id="new_pass">
                                <i class="material-icons" id="pass-visible2">visibility_off</i>
                                <span class="error-pass">E</span>
                            </div>
                            <div class="retype">
                                <label>Retype Password</label>
                                <input type="password" class="show-pass3" id="retype_pass">
                                <i class="material-icons" id="pass-visible3">visibility_off</i>
                                <span class="error-pass">E</span>
                            </div>
                            <div class="save_change d-flex justify-content-end">
                                <input type="button" name="change_pass" id="change_pass" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
        
<!-- Footer -->

<script type="text/javascript" src="resources/js/profile-pass.js"></script>
<?php
    include 'includes/footer-inside.php';
?>