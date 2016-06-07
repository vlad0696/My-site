$(function(){
    $('#db_btn').on('click', function(event) {
       event.preventDefault();
        var db =$('input[name="db"]:checked').val(); 
        
        $.ajax({
          method: "POST",
              url: "admin.php?db=ID_panteon",
              data: {data_base:db},
              success : function(data){
                console.log(data);
                  $('.admin_table > tbody').html(data);
              }
                    
            });
    });
    });
function onkeynumber(input){ 
   var value = input.value;
    var rep = /[^0-9]/;
    if (rep.test(value))
    {value = value.replace(rep, ''); input.value = value}

};
function onkeyurl(input){ 
   var value = input.value;
    var rep = /[^0-9./a-zA-Z]/;
    if (rep.test(value))
    {value = value.replace(rep, ''); input.value = value}

};   
function onkey(input){ 
   var value = input.value;
    var rep = /[^a-zA-Z0-9_]/;
    if (rep.test(value))
    {value = value.replace(rep, ''); input.value = value}

};   
function onkeytime(input){ 
   var value = input.value;
    var rep = /[^0-9:]/;
    if (rep.test(value))
    {value = value.replace(rep, ''); input.value = value}

}; 
function onkeyemail(input){ 
   var value = input.value;
    var rep = /[^0-9a-zA-Z@.-]/;
    if (rep.test(value))
    {value = value.replace(rep, ''); input.value = value}

}; 
$(function(){    
    $(document).on('click', ".change",function(event) {
    event.preventDefault();
    var object = {}; 
    var tr = $(this).closest('tr'); 
    tr.find('td').each(function() { 
        var input = $(this).find('input'); 
        if (input.attr('class') !== undefined) { 
            object[input.attr('class')] =input.attr('class')+'="'+ input.val()+'"'; 
            if(input.attr('class') !=="time_out")
            if(input.attr('class') !=="id_player")
            if(input.attr('class') !=="id_panteon")
            if(input.attr('class') !=="id_user")
            if(input.attr('class') !=="email")
                object[input.attr('class')]+=",";
        }
    });
         event.preventDefault();
        var db =$('input[name="db"]:checked').val();
        if (db==null)
            db="ID_players"
        alert(db);  
      $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "admin", obj:object, dbase:db},
              success : function(data){
                console.log(data);
              }
                    
            });
    });
});

$(function(){    
    $(document).on('click', ".add",function(event) {
    event.preventDefault();
    var object = {}; 
    var tr = $(this).closest('tr'); 
    tr.find('td').each(function() { 
        var input = $(this).find('input'); 
        if (input.attr('class') !== undefined) { 
            object[input.attr('class')] =input.val(); 
        }
    });
        event.preventDefault();
        var db =$('input[name="db"]:checked').val();
        if (db==null)
            db="ID_players"
        alert(db);  
        $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "admin_add", obj:object, dbase:db},
              success : function(data){
                console.log(data);
              }
                    
            });
    });
});

$(function(){
    $(document).on('click',".delete", function(event) {
    event.preventDefault();
    var object = {}; 
    var tr = $(this).closest('tr'); 
    tr.find('td').each(function() { 
        var input = $(this).find('input'); 
        if (input.attr('class') !== undefined) { 
            object[input.attr('class')] =input.val(); 
            
            
        }
    });
    var db =$('input[name="db"]:checked').val(); 
        if (db==null)
            db="ID_players"
    event.preventDefault();
      $.ajax({
          method: "POST",
              url: "data.php",
              data: {page: "admin_delete", obj:object, dbase:db},
              success : function(data){
                console.log(data);
              }
                    
            });
});
    
});
       