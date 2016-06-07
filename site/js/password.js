$(function(){
    
    $("#password_btn").on('click',function(event){
        console.log("azaza");
        var password = Math.random().toString(36).slice(-8);
        var email  = $('#pass_email').val();
        console.log(password);
        console.log(email);
        $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "password", password:password, email:email},
              success : function(data){
                console.log(data);
                alert("Новый пароль отправлен Вам на почту.");
              }
                    
            });
    })
    
    
    
})