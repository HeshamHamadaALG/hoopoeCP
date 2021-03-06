<?php
    $mac= isset($_POST['mac']) ? $_POST['mac'] : 'mac_not_found';
    $age = isset($_POST['age']) ? $_POST['age'] : "h_age_not_found";
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOOPOE WiFi</title>
    <link rel="stylesheet" href="landingPage.css">
    <script>
        
        let mac = "<?php echo $mac; ?>";
        let chapid = "<?php echo $chapid?>";
        let chapchallenge = "<?php echo $chapchallenge?>";
        let linkloginonly = "<?php echo $linkloginonly?>";

        localStorage.setItem('mac', mac);
        localStorage.setItem('chapid', chapid);
        localStorage.setItem('chapchallenge', chapchallenge);
        localStorage.setItem('linkloginonly', linkloginonly);
        
    </script>
</head>

<body>
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>   
</body>

<script src="asset_files/js/index.js"></script>
<script>
    // fetch("https://hoopoeapi.herokuapp.com/phone-macs/"+<?php echo $mac ?>)
    fetch("https://hoopoeapi.herokuapp.com/phone-macs/"+mac)
    .then(function(response) {
        return response.json();
    })
    .then(function(response) {
        if (response.verified)
            {
                // redirect to ads page 
                window.location.href = "asset_files/pages/ad.html"
                console.log('verified');
            }
        else {
            if(response.message==="User Not existed")
            {
                // redirect to sign up button page 
                window.location.href = "welcome.html"
            }
            else if (response.message==='User existed but not verified'){
                // redirect to validation page 
                window.location.href = "welcome.html"
            }
            
        }
    })


</script>
