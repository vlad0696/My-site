
 console.log("test");

        $('#btn_find').on('click', function(){
          var nickname  = $('#nickname').val();
          var userurl  = $('#userurl').val();
          var userpres  = $('#userpres').val();
          var select1 = $('#select1').val();
          var select2 = $('#select2').val();
          var playerclass =$('input[name="class"]:checked').val();  
          var id = Math.floor((Math.random() * 1000) + 1);
          console.log(select1);
          console.log(select2);
          console.log(playerclass);
          console.log(id);
          $('#nickname').val('');
          $('#userurl').val('');
          $('#userpres').val('');
            $.ajax({
              method: "POST",
              url: "data.php",
              data: {page: "find_panteon", nick: nickname, Select_in: select1, Select_out: select2, Playerclass : playerclass, IDplayer:id,
                    Userpres:userpres, userurl:userurl},
              success : function(data){
               alert("Данные успешно добавлены");
              }
                    
            });

        });

