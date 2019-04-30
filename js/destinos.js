		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			
			$.ajax({
				url:'./ajax/buscar_destino.php?action=ajax&page='+page+'&q='+q,
				
				 beforeSend: function(objeto){
				
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					
					
				}
			})
		}
		function load1(page){
			var q= $("#q1").val();
			
			$.ajax({
				url:'./ajax/buscar_destino.php?action=ajax&page='+page+'&q='+q,
				
				 beforeSend: function(objeto){
				
			  },
				success:function(data){
					$(".outer_div1").html(data).fadeIn('slow');
					
					
				}
			})
		}

	
		
	
		
		
		
		

