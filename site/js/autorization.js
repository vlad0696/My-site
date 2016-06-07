$(function(){
    
    $("#my_bttn_author").on('click',function(event){
      //  event.preventDefault();
        console.log("azaza");
        var password  = $('#a_password').val();
        var email  = $('#a_email').val();
        console.log(password);
        console.log(email);
        $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "authorization", password:password, email:email},
              success : function(data){
                console.log(data);
              location.reload(true);
          }
                    
            });
    })
    
    
    
})