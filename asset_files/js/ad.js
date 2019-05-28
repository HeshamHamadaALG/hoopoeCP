let img=document.getElementById("ad");
// var urlParams = new URLSearchParams(window.location.search);
// var mac=urlParams.get('mac');
var mac=localStorage.getItem('mac');
console.log(mac);
let loc=[{lat:1,lng:1},{lat:2,lng:2},{lat:3,lng:3},{lat:4,lng:4},{lat:5,lng:5}];
let randIndex=Math.floor(Math.random()*(5)) ;

let ad =function (){
fetch("https://hoopoeapi.herokuapp.com/ads" ,{
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({"mac":mac,
            "lat":loc[randIndex].lat,
            "lng":loc[randIndex].lng
        })
    })
    .then((response) => {
        return response.json()        
    }).then((response)=>{
        if (response.status==="success"){
            img.src=response.message;
        }
    })
    .catch(function(error) {
        log('Ad rendering failed.. Please try again', error)
    });

};

ad();