$(function(){
    
    $(".session_exit").on('click',function(event){
       $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "exit",},
              success : function(data){
                console.log(data);
                location.reload(true);
              }
                    
            });
    })
    
    
    
})