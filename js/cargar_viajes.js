
  function cargar_rutas ()
  {   
      
          
          $.ajax({
              type: "POST",
              url: "./ajax/buscar_reservas.php",
               beforeSend: function(objeto){
                  
                },
              success: function(datos){
                          $(".tbl-content").html(datos).fadeIn('slow');
              }
                  });
          
        
  
  }