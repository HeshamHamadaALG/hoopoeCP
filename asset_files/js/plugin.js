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
   
   $("#loadValidation").click(function(e){
            
    e.preventDefault()  ; 
    let mobile = $("#mobile").val() ; 
    let age = $("#age").val() ; 
    let gender = $('input[name=sex]:checked').val(); 

    if (mobile && age && gender){
        $( "#rightSide" ).load( "./asset_files/pages/validation.html" );
    }else {
        $(".alert-danger").css({
            display: 'block',
        }) ; 
        $(".alert-danger").html("<p> Sorry but all Field must be filled") ; 
    }
})
})