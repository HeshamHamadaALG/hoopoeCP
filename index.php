<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOOPOE WiFi</title>
    <link rel="stylesheet" href="landingPage.css">
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
