<?php
include('is_logged.php');
	
		require_once ("../config/db.php");
		require_once ("../config/conexion.php");

		$id_usuario= $_SESSION['id_usuario'];
		$id_ruta=$_POST["id_ruta"];
		$estado=intval($_POST['estado']);
		
		$sql="INSERT INTO viajes_reservados (id_viaje, id_usuario, id_ruta, estado,fecha_compra) VALUES (null,'$id_usuario','$id_ruta','$estado',SYSDATE())";
		
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert) {
                        $messages[] = "Viaje añadido con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                
            
    
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

		
?>		
		