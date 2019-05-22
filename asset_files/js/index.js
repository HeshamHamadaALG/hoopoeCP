// fetch("https://hoopoeapi.herokuapp.com/phone-macs/"+<?php echo $mac ?>)


mac='mac1';
fetch("http://localhost:3000/phone-macs/"+mac)
.then(function(response) {
    return response.json();
})
.then(function(response) {
    if (response.verified)
        {
            // redirect to ads page 
            window.location.href = "asset_files/pages/ad.html?mac="+mac
        }
    else {
        if(response.message==="User Not existed")
        {
            // redirect to sign up button page 
            window.location.href = "welcome.html?mac="+mac
        }
        else if (response.message==='User existed but not verified'){
            // redirect to validation page 
            window.location.href = "asset_files/pages/validation.html?mac="+mac
        }
        
    }
})