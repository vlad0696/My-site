
 console.log("test");

        $('#butnFindPlayer').on('click', function(){
          var press  = $('#prestige').val();
          var panteon_name  = $('#clanename').val();
          var panteon_url  = $('#claneurl').val();
          var select1 = $('#select1').val();
          var select2 = $('#select2').val();
          var playerclass =$('input[name="class"]:checked').val();  
          var id = Math.floor((Math.random() * 1000) + 1);
          console.log(press);
          console.log(select1);
          console.log(select2);
          console.log(playerclass);
          console.log(id);
          $('#prestige').val('');
          $('#clanename').val('');
          $('#claneurl').val('');
            $.ajax({
              method: "POST",
              url: "data.php",
              data: {page: "find_player", presstige: press, Select_in: select1, Select_out: select2, Playerclass : playerclass, IDpanteon:id,
                    panteonname:panteon_name, panteonurl:panteon_url},
              success : function(data){
                 alert("Данные успешно добавлены");
              }
                    
            });

        });

