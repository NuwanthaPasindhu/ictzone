$(window).load(function(){
    $('.loader').delay(1000).fadeOut("slow");
  
})


function redirect_one(){
    setTimeout(function(){
        window.open("./account.php","_self");    
    },1000)
}


function redirect_two(){
  
    window.open("./","_self"); 
 
}



function redirect_three(){
  alert("Account Created Successfully.Redirecting to login page");
   setTimeout(function(){
    window.open("../","_self");
   },100) 
 
}


