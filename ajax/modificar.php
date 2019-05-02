<?php
	
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado

if (isset($_POST['nombre_empresa'])){$nombre_empresa=($_POST['nombre_empresa']);}
if (isset($_POST['precio'])){$precio=($_POST['precio']);}
if (isset($_POST['ruta'])){$ruta=($_POST['ruta']);}
if (isset($_POST['id_ruta'])){$id_ruta=($_POST['id_ruta']);}
if (isset($_POST['horario'])){$horario=($_POST['horario']);}
if (isset($_POST['fecha_compra'])){$fecha_compra=($_POST['fecha_compra']);}

	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	

        
?>
<div class="">
    <div class=" payment-overview ">
    <p class="product-payment" style="font-size: 20px;"><?php echo $nombre_empresa; ?></p>
        <p class="price-payment"><?php echo $precio; ?></p>
        <p class="product-payment"><?php echo $ruta; ?></p>
        <p class="product-payment">Comprado el <?php echo $fecha_compra; ?></p>
        <p class="product-payment" style="font-size: 16px;"><?php echo $horario; ?></p>
        <p class="product-payment" style="font-size: 16px;">BOLETO #  <?php echo $id_ruta; ?></p>
        <a href="#" title="" class="modal-close" style="margin-right: 158px;    font-size: 16px;float:left;" >CERRAR</a>
        <a href="#" title="" class="" style="    color: yellow;
    line-height: 150px;
    font-size: 100%;
    font-size: 26px;
    right: 0;
    text-align: center;
    top: 0;
    width: 230px;
    float:right;
    " onclick="cancelar(<?php echo $id_ruta; ?>);" >CANCELAR VIAJE</a>
    </div>
    
    
    
    
</div>

