// fetch("https://hoopoeapi.herokuapp.com/phone-macs/"+<?php echo $mac ?>)


mac='mac55';
localStorage.setItem('mac',mac);

fetch("https://hoopoeapi.herokuapp.com/phone-macs/"+mac)
.then(function(response) {
    return response.json();
})
.then(function(response) {
    if (response.verified)
        {
            // redirect to ads page 
            // window.location.href = "asset_files/pages/ad.html?mac="+mac
            window.location.href = "asset_files/pages/ad.html";
        }
    else {
        if(response.message==="User Not existed")
        {
            // redirect to sign up button page 
            // window.location.href = "welcome.html?mac="+mac
            window.location.href = "welcome.html"
        }
        else if (response.message==='User existed but not verified'){
            // redirect to validation page 
            // window.location.href = "asset_files/pages/validation.html?mac="+mac
            window.location.href = "asset_files/pages/welcome.html"
        }
        
    }
})
