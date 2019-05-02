<?php
include('is_logged.php');
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
			
				$id_usuario=$_SESSION['id_usuario'];
              
                $nombre= $_POST['nombre'];
                $correo= $_POST['correo'];
                $mensaje= $_POST['mensaje'];
               
                    $sql = "INSERT INTO contacto(id_contacto, id_usuario, nombre, mensaje, correo_usuario) 
                    VALUES (null,'".$id_usuario."','".$nombre."','".$mensaje."','".$correo."')";
                   
                    $query_new_user_insert = mysqli_query($con,$sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        echo "GRACIAS POR CONTACTARNOS";
                    } else {
                        echo "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                
            
       
		
	
?>