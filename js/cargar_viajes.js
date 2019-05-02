
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
  function modificar ()
		{   
			
			$("table tbody tr").click(function() {
				var id_ruta = $(this).find("td:eq(0)").text();
				var nombre_empresa = $(this).find("td:eq(1)").text();
        var origen = $(this).find("td:eq(2)").text();
        var destino= $(this).find("td:eq(3)").text();
        var ruta= origen.concat(' - ');
        var ruta1= ruta.concat(destino);
				var precio= $(this).find("td:eq(4)").text();
        var horario = $(this).find("td:eq(5)").text();
        var fecha_compra= $(this).find("td:eq(6)").text();
				$.ajax({
					type: "POST",
					url: "./ajax/modificar.php",
					data: "nombre_empresa="+nombre_empresa+"&precio="+precio+"&ruta="+ruta1+"&horario="+horario+"&id_ruta="+id_ruta+"&fecha_compra="+fecha_compra,
					 beforeSend: function(objeto){
						
					  },
					success: function(datos){
								$(".form-container").html(datos).fadeIn('slow');
					}
						});
				
			  });
		
    }
    
    function cancelar (id_viaje)
		{   
			
			
				$.ajax({
					type: "POST",
					url: "./ajax/cancelar_viaje.php",
					data: "id_viaje="+id_viaje,
					 beforeSend: function(objeto){
						
					  },
					success: function(datos){
            cargar_rutas ();
					}
						});
				
			  
		
		}