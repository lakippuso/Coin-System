<?php
    date_default_timezone_set("Asia/Singapore");
    $r = date("Y-m-d", strtotime("+2 day"));
    echo $r;