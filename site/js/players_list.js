

       $('#sort_btn').on('click', function(){

           console.log("test");

          var playerclass =$('input[name="class"]:checked').val();
          var sort_info =$('input[name="sort"]:checked').val();
          console.log(playerclass);
          console.log(sort_info);
          if (playerclass==null){
              playerclass="NULL1"
          }
           if (sort_info==null){
            sort_info="NULL1"
           }
            $.ajax({
              method: "POST",
              url: "players.php",
              data: { sort_by_class:playerclass, sort_by_info: sort_info},
              success : function(data){
                $('.statistic > tbody').html(data);
            }
                    
            });
          });
       
