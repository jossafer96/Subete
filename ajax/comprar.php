<?php
	
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado

if (isset($_POST['nombre_empresa'])){$nombre_empresa=($_POST['nombre_empresa']);}
if (isset($_POST['precio'])){$precio=($_POST['precio']);}
if (isset($_POST['ruta'])){$ruta=($_POST['ruta']);}
if (isset($_POST['id_ruta'])){$id_ruta=($_POST['id_ruta']);}
if (isset($_POST['hora_salida'])){$hora_salida=($_POST['hora_salida']);}

	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	

        
?>
<div class="">
    <div class=" payment-overview">
    <p class="product-payment" style="font-size: 20px;"><?php echo $nombre_empresa; ?></p>
        <p class="price-payment">L. <?php echo $precio; ?></p>
        <p class="product-payment"><?php echo $ruta; ?></p>
        <p class="product-payment" style="font-size: 16px;"><?php echo $hora_salida; ?></p>
        <p class="product-payment" style="font-size: 16px;">RUTA #<?php echo $id_ruta; ?></p>
        <a href="#" title="Close" class="modal-close" >CANCELAR</a>
    </div>
    <div class=" payment-details">
    <p class="credit-card-title">TARJETA DE CREDITO</p>
    <p><input type="number" class="long-number" required placeholder="NUMERO DE TARJETA" style="margin-bottom: 8px;background-color: yellow;color: black;font-weight: 500;"></p>
        <select class="month-select minimal" style="background-color: yellow;color: black;">
            <option>MES VENCIMIENTO</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
        </select>
        <select class="year-select minimal" style="background-color: yellow;color: black;">
            <option>AÑO VENCIMIENTO</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
        </select>
        <input type="number" class="security-code" placeholder="EJ. 123" style="background-color: yellow;color: black;">
        <p class="security-code-p">3 o 4 dígitos encontrados en la tira de la firma</p>
        
        <div class="bottom-buttons">

            <div class="proceed">
                <button class="proceed-button" onclick="confirmar(<?php echo $id_ruta; ?>);">PAGAR</button>
            </div>

            <div class="or">O</div>

            <div class="paypal">
                <button class="paypal-button">PAGAR CON <i class="fa fa-paypal paypal-icon" aria-hidden="true"></i>PayPal</button>
            </div>
        
        </div>				
            
    </div>
    
    
    
</div>

