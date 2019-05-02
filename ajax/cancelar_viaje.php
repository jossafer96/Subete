<?php
 
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
			
				$id_viaje= $_POST['id_viaje'];
               
                // check if user or email address already exists
                
					// write new user's data into database
                    $sql = "UPDATE viajes_reservados SET estado=('0') WHERE id_viaje=".$id_viaje;
                   
                    $query_new_user_insert = mysqli_query($con,$sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        echo "Viaje cancelado con éxito.";
                    } else {
                        echo "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                
            
        

?>