<?php

	include('is_logged.php');
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	
	
	if($action == 'ajax'){
	
		 $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		
		 $aColumns = array('nombre_destino', 'abreviacion');//Columnas de busqueda
		 $sTable = "destinos";
		 $sWhere = "";
		
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		
		$sWhere.=" order by nombre_destino desc";
		
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
	
		
		$sql="SELECT * FROM  $sTable $sWhere";
		
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			
				while ($row=mysqli_fetch_array($query)){
					
						$nombre_destino=$row['nombre_destino'];
						$id_destino=$row['id_destino'];
						?>
						<option value="<?php echo $nombre_destino; ?>">
						<?php                                             
					
						
										
		}
	}
}
?>