$(document).ready(function(){
    console.log("Worked") ; 

    function test(name){
        name.preventDefault() ; 
        alert(name)
    }
   $("#load-signup").click(function(){
    // alert("Work") ; 
    $( "#rightSide" ).load( "./asset_files/pages/signup.html" );
   });
   
  
})