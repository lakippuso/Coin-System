<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="rasp.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Raspberry Portal</title>
    
</head>
<body>
    <div class="config-body g-0 container-fluid">
        <div class="config-row col-sm-12 col-md-10 col-lg-7 d-flex justify-content-around mx-auto">
            <div class="image-col col-sm-0 col-lg-6 d-none d-lg-block">
                <img src="wifiBG.png" class="img-fluid row d-sm-none d-lg-block" id="wifiBG">
            </div>
            <fieldset class="form-col col-sm-12 col-md-10 col-lg-4 mx-auto">
                <img class="config-ccm row mb-4" src="GeekCoin.png" alt="Coin Counter">
                <h4>Current Wi-Fi SETTINGS: </h4>
                <?php
                    exec("ping google.com -c 3", $string);
                    $t = strpos($string[6], "received") - 2;
                    if($string[6][$t]==3){
                        echo "<strong>Internet Status</strong>: Connected"."<br>";
                    }
                    else{
                        echo "Wifi Status: No internet!";
                    }
                    $myfile = fopen("wpa_supplicant.conf", "r") or die("Unable to open file!"); ?>
                    <h5 style="text-align: center;"></h5>
                    <?php
                    fclose($myfile);

                    if(isset($_POST['submit'])){
                        $wifi_name = $_POST['name'];
                        $wifi_pass = $_POST['pass'];

                        
                        $myfile = fopen("wpa_supplicant.conf", "w") or die("Unable to open file!");
                        $content.= 'ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1
country=PH

network={
ssid="'.$wifi_name.'"
psk="'.$wifi_pass.'"
key_mgmt=WPA-PSK
}';
                        
                        fwrite($myfile, $content);
                        fclose($myfile);
                    }
                ?>
                <h5 style="text-align: center;">Change Wi-Fi Setting</h5>
                <form class="config-wifi" method="POST">
                    <input class="wifi-name" type="text" name="name" placeholder="Wi-Fi Name" required><br>
                    <input class="wifi-pass" type="password" name="pass" placeholder="Wi-Fi Password" required><br>
                    <input class="wifi-submit" type="submit" name="submit" value="Configure">
                </form>
            </fieldset>
        </div>
    </div> 
</body>
</html>