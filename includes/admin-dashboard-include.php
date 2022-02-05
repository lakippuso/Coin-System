<?php
    include 'config.php';
    if(isset($_POST['machine_list'])){
        $machine_id = $_POST['machine_id'];
        $query = "SELECT * from machine_info WHERE machine_id LIKE '%$machine_id%'";
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())
        {
            echo '<tr>';
            echo '    <th scope="col">'.htmlspecialchars($rows['machine_id']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['machine_name']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['username']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['date_created']).'</th>';
            echo '</tr>';
        }
    }
    if(isset($_POST['client_list'])){
        $username = $_POST['username'];
        $query = "SELECT * from users WHERE username LIKE '%$username%' AND category = 'user'";
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())
        {
            echo '<tr>';
            echo '    <th scope="col">'.htmlspecialchars($rows['date_created']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['username']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['first_name']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['last_name']).'</th>';
            echo '    <th scope="col">'.htmlspecialchars($rows['email']).'</th>';
            echo '</tr>';
        }
    }