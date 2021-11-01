function login(){
 $('#submit').on('click',function(e){
e.preventDefault();

var email = $('#email').val() ;
var password = $('#password').val() ;

if (email == "" || password == "") {
    $('.alert').addClass('alert-danger');
    $('.alert').html("All Fields Required");
    
}else{
    
   $.ajax({
        url:'login.php',
        method:'post',
        data:{Email:email,Password:password},
        beforesend:function(){
            $('.alert').removeClass('alert-danger');
            $('.alert').addClass('alert-primary');
            $('.alert').html("Sending......");
        },
        success:function(data){
            $('.alert').removeClass('alert-primary');
            $('.alert').removeClass('alert-danger');
            $('.alert').addClass('alert-success');
            $('.alert').html(data);
           }
    })
}




 })
    
}

function signup(){
    $('#form').on("submit",function(e){
   e.preventDefault();
   var firstname = $('#firstname').val();
   var lastname = $('#lastname').val();
   var school = $('#school').val();
   var email = $('#email').val();
   var address = $('#address').val();
   var mob = $('#mob').val();
   var password = $('#password').val();
   var repassword =$('#repassword').val();
   var grade = $('#grade').val();
   
   if (firstname == "" || lastname == "" || school == "" || email == ""|| address == "" || mob == ""|| password == "" || repassword== "") {
       $('.alert').addClass('alert-danger');
       $('.alert').html("All Fields Required");
       
   }else{
    if (password == repassword) {

     $.ajax({
        url:'./sprocess.php',
        method:'post',
        data:{firstname:firstname,lastname:lastname,school:school,
         email:email,
         grade:grade,
         address:address,
         mob:mob,
         password:password} ,
        beforesend:function(){
         $('.alert').removeClass('alert-danger');
         $('.alert').addClass('alert-primary');
         $('.alert').html("Sending......");
        },
        success:function(data){
         $('.alert').removeClass('alert-primary');
         $('.alert').addClass('alert-success');
         $('.alert').html(data);
        }
    })
    } else {
        $('.alert').addClass('alert-danger');
        $('.alert').html("Password Not Match");
       
    }

   }
   
  
   
   
    })
       
   
   }


   function user_update(){
    $('#form').on('submit',(e)=>{
        e.preventDefault();
        var id = $('#id').val();
        var firstname = $('#fn').val();
        var lastname = $('#ln').val();
        var school = $('#sc').val();
        var email = $('#e').val();
        var address = $('#add').val();
        var mob = $('#mbn').val();
        var password = $('#pas').val();
        var grade = $('#g').val();
        if (firstname == "" || lastname == "" || school == "" || email == ""|| address == ""|| mob == ""|| password == "") {
            $('.alert').addClass('alert-danger');
            $('.alert').html("All Fields Required");
            
        }else{
            $.ajax({
                url:'./update.php',
                method:'post',
                data:{id:id,
                firstname:firstname,
                lastname:lastname,
                school:school,
                 email:email,
                 grade:grade,
                 address:address,
                 mob:mob,
                 password:password} ,
                beforesend:function(){
                 $('.alert').removeClass('alert-danger');
                 $('.alert').addClass('alert-primary');
                 $('.alert').html("Updating......");
                },
                success:function(data){
                 $('.alert').removeClass('alert-primary');
                 $('.alert').addClass('alert-success');
                 $('.alert').html(data);
                }
            }) 


        }
      

    })
   }
  
   function show_password() {
    $('#pbtn').click(()=>{
    $('#pbtn').toggleClass('fa-eye-slash');
    var x = $('#password').attr("type");
       
        if (x == "password") {
            var x = $('#password').attr("type", "text");
        }

        if (x == "text") {
            var x = $('#password').attr("type", "password");
        }
    });

} 

function reshow_password() {
    $('#repbtn').click(()=>{
    $('#repbtn').toggleClass('fa-eye-slash');
    var x = $('#repassword').attr("type");
       
        if (x == "password") {
            var x = $('#repassword').attr("type", "text");
        }

        if (x == "text") {
            var x = $('#repassword').attr("type", "password");
        }
    });

}


function payment() {

    $('.alert').css("display","none");

    $("#form").ajaxForm({

            beforeSend:function(){
            
              $('.alert').html("Sending");
              $('.alert').addClass("alert-primary");
             
            
            },
            success:function(data){
              $('.alert').css("display","");
              $('.alert').removeClass("alert-primary");
              $('.alert').removeClass("alert-danger");
              $('.alert').removeClass("alert-success");
              $('.alert').html(data);

            }
    
        })




}










