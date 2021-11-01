$(document).ready(function(){
    Send_massage();
})


function Send_massage() {
    $('#submit').on('click',function(e){
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        if (name =="" || email =="" || msg =="") {
            $('.alert').addClass('alert-danger'); 
            $('.alert').html("All Fields are Required");
        }else{
            $('.alert').removeClass('alert-danger'); 
            $('.alert').html("");
            $.ajax({
                url:'./mail.php',
                method:'post',
                data:{Name:name, Email:email, Massage:msg},
                beforeSend :function(){
                  
                    $('.alert').addClass('alert-primary');
                    $('.alert').html("Sending.....");
                },
                success:function(data){
                    $('.alert').removeClass('alert-primary');
                    $('.alert').html(data);
                }
                
            })
        }
    })
}