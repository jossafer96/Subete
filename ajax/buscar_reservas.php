<?php
	
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado



	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
if (true)
{   $sWhere=" where a.id_usuario=1";
  
   $count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM viajes_reservados ");
   $row= mysqli_fetch_array($count_query);
   $numrows = $row['numrows'];

   
   $sql="SELECT a.id_viaje,e.nombre_empresa,c.nombre_destino as origen,d.nombre_destino as destino, CONCAT( b.hora_salida,' - ',b.hora_llegada) as horario,
   b.precio,a.fecha_compra,a.estado FROM viajes_reservados a INNER JOIN rutas b on a.id_ruta=b.id_ruta INNER JOIN destinos c on b.id_origen=c.id_destino 
   INNER JOIN destinos d on b.id_destino=d.id_destino INNER JOIN empresa e on b.id_empresa=e.id_empresa".$sWhere;
  
   $query = mysqli_query($con, $sql);
   //loop through fetched data
  
   if ($numrows>0){
	   
	   
		   
               
  
      ?>
  <?php 
      while ($row=mysqli_fetch_array($query)){
			   
         $id_viaje=$row['id_viaje'];
         $nombre_empresa=$row['nombre_empresa'];
         $origen=$row['origen'];
         $precio=$row['precio'];
         $destino=$row['destino'];
         $horario=$row['horario'];
         $fecha_compra=$row['fecha_compra'];
         $estado=$row['estado'];
         ?> 
		<table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                          <td><?php echo $id_viaje; ?></td>
                                                            <td><?php echo $nombre_empresa; ?></td>
                                                            <td><?php echo $origen; ?></td>
                                                            <td><?php echo $destino; ?></td>
                                                            <td>Lps. <?php echo $precio; ?></td>
                                                            <td><?php echo $horario; ?></td>
                                                            <td><?php echo $fecha_compra; ?></td>
                                                            <td><?php echo $estado; ?></td>
                                                          </tr>
                                                          
                                                          </tr>
                                                        </tbody>
                                                      </table>
      <?php                                             
			   
				   
								   
         }
         ?>

  </table>
  <?php
            
      
				  
				  
}






}
?>