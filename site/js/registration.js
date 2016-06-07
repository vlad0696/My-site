
 console.log("test");

        $('#registration_btn').on('click', function(){
          var nickname  = $('#nickname').val();
          var login  = $('#login').val();
          var password  = $('#password').val();
          var email  = $('#email').val();
          console.log(login);
          $('#nickname').val('');
          $('#userurl').val('');
          $('#userpres').val('');
            $.ajax({
              method: "POST",
              url: "data.php",
              data: {page: "registration", nick: nickname, login:login, password:password, email:email},
              success : function(data){
               alert("Данные успешно добавлены\nПисьмо отправлено на Вашу почту");
               
              }
                    
            });

        });

