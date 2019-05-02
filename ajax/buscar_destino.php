<?php

	include('is_logged.php');
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	
	
	if($action == 'ajax'){
	
		 $sTable = "destinos";
		$sWhere=" order by nombre_destino desc";
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
	
		
		$sql="SELECT * FROM  $sTable $sWhere";
		
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>                                                     
						 <option value="" disabled selected hidden>Donde Estas?</option>
						<?php
				while ($row=mysqli_fetch_array($query)){
					
						$nombre_destino=$row['nombre_destino'];
						$id_destino=$row['id_destino'];
						?>                                                     
						<option value="<?php echo $nombre_destino; ?>"><?php echo $nombre_destino; ?></option>
						<?php                                             
					
						
										
		}
	}
}
?>
<?php
if($action == 'ajax1'){
	
	$sTable = "destinos";
   $sWhere=" order by nombre_destino desc";
   $count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
   $row= mysqli_fetch_array($count_query);
   $numrows = $row['numrows'];

   
   $sql="SELECT * FROM  $sTable $sWhere";
   
   $query = mysqli_query($con, $sql);
   //loop through fetched data
   if ($numrows>0){
	   
	   ?>                                                     
					<option value="" disabled selected hidden>Elige tu Destino</option>
				   <?php
		   while ($row=mysqli_fetch_array($query)){
			   
				   $nombre_destino=$row['nombre_destino'];
				   $id_destino=$row['id_destino'];
				   ?>                                                     
				   <option value="<?php echo $nombre_destino; ?>"><?php echo $nombre_destino; ?></option>
				   <?php                                             
			   
				   
								   
   }
}
}?>