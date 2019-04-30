<?php
	
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado

if (isset($_POST['desde'])){$desde=($_POST['desde']);}
if (isset($_POST['hacia'])){$hacia=($_POST['hacia']);}
if (isset($_POST['fecha_salida'])){$fecha_salida=($_POST['fecha_salida']);}
if (isset($_POST['fecha_regreso'])){$fecha_regreso=($_POST['fecha_regreso']);}

	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
if (!empty($desde) and !empty($hacia) and !empty($fecha_salida)and !empty($fecha_regreso))
{   $sWhere="where a.nombre_destino='".$desde."' and b.nombre_destino='".$hacia."'";
  
   $count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM destinos ");
   $row= mysqli_fetch_array($count_query);
   $numrows = $row['numrows'];

   
   $sql="SELECT empresa.nombre_empresa,a.abreviacion as origen,b.abreviacion as destino,rutas.hora_salida,rutas.hora_llegada, rutas.precio,rutas.id_ruta FROM rutas INNER JOIN empresa on rutas.id_empresa=empresa.id_empresa INNER JOIN destinos a on rutas.id_origen=a.id_destino INNER JOIN destinos b on rutas.id_destino=b.id_destino ".$sWhere;
  
   $query = mysqli_query($con, $sql);
   //loop through fetched data
  
   if ($numrows>0){
	   
	   
		   
               
  
      ?>
  <table cellspacing="0" class="tabla_rutas">
  <tr>
        <th style=" text-align: center; font-weight: 600; font-size: 20px;">EMPRESA</th>
         <th style=" text-align: center; font-weight: 600; font-size: 20px;">PRECIO</th>
         <th style="text-align: center; font-weight: 600; font-size: 20px;">RUTA</th>
         <th style=" text-align: center; font-weight: 600; font-size: 20px;">HORARIO</th>
         <th style=" text-align: center; font-weight: 600; font-size: 20px;">NOTA</th>
      </tr><?php 
      while ($row=mysqli_fetch_array($query)){
         $id_ruta=$row['id_ruta'];
         $nombre_empresa=$row['nombre_empresa'];
         $origen=$row['origen'];
         $destino=$row['destino'];
         $precio=$row['precio'];
        
         $hora_salida= $row['hora_salida'];
         $hora_llegada=$row['hora_llegada'];
         ?> 
				   <tr>
              
         <td style="background-color: #1C1D21;color: white;" id="nombre_empresa" value="" ><?php echo $nombre_empresa; ?></td>
         <td style="background-color: #1C1D21;color: white;" id="precio"><?php 	 echo $precio; ?></td>
         <td style="background-color: #1C1D21;color: white; font-size: 15px;" id="ruta"><?php echo $origen; ?> - <?php 	 echo $destino; ?></td>
         <td style="background-color: #1C1D21;color: white; font-size: 17px;" id="hora_salida"><?php echo $hora_salida; ?> -> <?php 	 echo $hora_llegada; ?></td>
         <td style="background-color: #1C1D21;color: white;display: none;" id="id_ruta" value="" ><?php echo $id_ruta; ?></td>
         <td style="background-color: #1C1D21;color: white;"><a class="btn" href="#open-modal" style="    background: yellow;
    color: black;
    font-weight: unset;
    font-size: 17px;
    padding: 0;
    min-width: 85px;
    line-height: 40px;
    height: 45px;" onclick="comprar();">Comprar</a></td>
      </tr> 
      <?php                                             
			   
				   
								   
         }
         ?>

  </table>
  <?php
            
      
				  
				  
}






}
?>