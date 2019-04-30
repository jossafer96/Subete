
		

	function buscar ()
		{
			var desde=document.getElementById("q").value;
			var hacia=document.getElementById("q1").value;
			var fecha_salida=document.getElementById("fecha_salida").value;
			var fecha_regreso=document.getElementById("fecha_regreso").value;
			//Inicia validacion
			
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "./ajax/buscar_rutas.php",
        data: "desde="+desde+"&hacia="+hacia+"&fecha_salida="+fecha_salida+"&fecha_regreso="+fecha_regreso,
		 beforeSend: function(objeto){
			
		  },
        success: function(datos){
					$(".table-users").html(datos).fadeIn('slow');
		}
			});
		}


		function comprar ()
		{   
			
			$("table tbody tr").click(function() {
				var nombre_empresa = $(this).find("td:eq(0)").text();
				var precio = $(this).find("td:eq(1)").text();
				var ruta = $(this).find("td:eq(2)").text();
				var hora_salida = $(this).find("td:eq(3)").text();
				var id_ruta = $(this).find("td:eq(4)").text();
				$.ajax({
					type: "POST",
					url: "./ajax/comprar.php",
					data: "nombre_empresa="+nombre_empresa+"&precio="+precio+"&ruta="+ruta+"&hora_salida="+hora_salida+"&id_ruta="+id_ruta,
					 beforeSend: function(objeto){
						
					  },
					success: function(datos){
								$(".form-container").html(datos).fadeIn('slow');
					}
						});
				
			  });
		
		}
		function confirmar (id_ruta)
		{   
			
			
				
				$.ajax({
					type: "POST",
					url: "./ajax/confirmar.php",
					data: "id_ruta="+id_ruta+"&estado=1",
					 beforeSend: function(objeto){
						
					  },
					success: function(datos){
						setTimeout (location.href ="./MISVIAJES_SUBETE!.php", 2000);
						
					}
						});
				
			  
		
		}
	
		