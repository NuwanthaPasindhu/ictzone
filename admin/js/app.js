$(window).load(function(){
    $('.loader').delay(1000).fadeOut("slow");
    Send_massage();
})

function redirect_one(){
    setTimeout(function(){
    window.open("./admin.php","_self"); 
    },1000)
}
function redirect_two(){
  
    window.open("./","_self"); 
 
}
function redirect_four(){
  
    alert("Record added successfully");
     window.open("add_recordings.php","_self");
    
  
 }
 function redirect_five(){
   
     alert("All Fields Are required");
      window.open("add_recordings.php","_self");
   
}


   function reload() {
        window.location.reload();
}


