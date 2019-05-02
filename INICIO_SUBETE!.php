<?php

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: index.php");
		exit;
        }

     require_once ("config/db.php");
	require_once ("config/conexion.php");
    $active_inicio="active";
	$active_comprar="";
	$active_viajes="";
	$active_contacto="";
	
?>
<!DOCTYPE html>


<head>
<?php include("head.php");?>   
</head>

<body class="">
    <div class="main-container">
        <div class="main-body">
            <div class="main-layout">
                <div class="layers-container">
                    <div class="layer">
                    </div>
                </div>
                <div class="header-and-main-rows  " style="background: rgb(240, 240, 240); margin-bottom: -260.125px;">
                <?php include("navbar.php");?> 
                    <div class="main-rows">
                        <div class="uc-row    first" data-id="21" style="  margin-bottom:0vh;   background:; ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12 " datacolumn-id="37"
                                        style="  padding:26.693766937669377vh 0vh;     ">
                                        <div class="column-container vertical-center" style="">

                                            <div class="module-container  align-right ModuleTitle first  "
                                                style=" padding:0px 20px 0px 20px;   padding-bottom:5.420054200542vh; ">
                                                <div class="  module ModuleTitle " datamodule-id="65"
                                                    style="display:block;max-width:316px;">
                                                    <div class="uc-content">
                                                        <h1 style="color:rgb(246, 255, 18);"><span
                                                                style="font-family:baloo;"><strong>VIAJA
                                                                    DE FORMA RÁPIDA Y SEGURA CON NOSOTROS...</strong></span></h1>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="module-container  align-right ModuleButton
                                          last " style=" padding:0px 20px 0px 20px;  ">
                                                <div class="  module ModuleButton " datamodule-id="63">
                                                    <div class="button">
                                                        <a class="btn btn1" href="./COMPRAR_SUBETE!.php"
                                                            target="_self" rel="">
                                                            <span class="btn-text">COMPRA YA</span>
                                                        </a>
                                                    </div>
                                                    <style>
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row" style="bottom:-0vh;">
                                <div class="margin-controller"></div>
                            </div>
                            <div class="bg-image lazy initial"
                                data-bg="url(&#39;https://static.ucraft.app/fs/userFiles/subete/images/r21-T-WRLSsiZYE.jpg&#39;)"
                                style="opacity: 1; background-position: 39.431% 47.688%; background-image: url(&quot;https://static.ucraft.app/fs/userFiles/subete/images/r21-T-WRLSsiZYE.jpg&quot;);"
                                data-was-processed="true">
                            </div>
                        </div>

                        <div class="uc-row                
                                " data-id="25"
                            style="  margin-bottom:13.550135501355vh;   background:radial-gradient(rgb(246, 255, 16) 0%,rgb(50, 50, 49) 100%); ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-4 " datacolumn-id="76"
                                        style="  padding:29.45736434108527vh 0vh;     ">
                                        <div class="column-container vertical-top"
                                            style=" margin-top:5.7803468208092vh; ">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0px 20px 0px 20px;   padding-bottom:0vh; ">
                                                <div class="  module ModuleImage " datamodule-id="75"
                                                    style="display:block;max-width:259.984px;">
                                                    <a class="image-module-link"
                                                        href="./COMPRAR_SUBETE!.php" target="_self"
                                                        rel="">

                                                        <div class="animated animated-75 " data-loading-animation=""
                                                            data-animated-id="75">
                                                            <div class="">
                                                                <div>
                                                                    <img class="image lazy initial loaded"
                                                                        data-src="https://static.ucraft.app/fs/userFiles/subete/images/75-D2K1UZr4vxk.jpg"
                                                                        src="./SUBETE!_files/75-D2K1UZr4vxk.jpg"
                                                                        data-was-processed="true">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </a>



                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleButton
                                          last ">
                                                <div class="  module ModuleButton " datamodule-id="143">
                                                    <div class="button">
                                                        <a class="btn buttons1530254589521"
                                                            href="./COMPRAR_SUBETE!.php" target="_self"
                                                            rel="">
                                                            <span class="btn-text" style="color: rgb(53, 53, 53)">BUSCA
                                                                TU DESTINO</span>
                                                        </a>
                                                    </div>
                                                    <style>
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column col-sm-4 " datacolumn-id="66"
                                        style="  padding:29.45736434108527vh 0vh;     ">
                                        <div class="column-container vertical-top"
                                            style=" margin-top:4.3352601156069vh; ">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0px 20px 0px 20px;   padding-bottom:0vh; ">
                                                <div class="  module ModuleImage " datamodule-id="78"
                                                    style="display:block;max-width:239.984px;">
                                                    <a class="image-module-link"
                                                        href="./COMPRAR_SUBETE!.php" target="_self"
                                                        rel="">

                                                        <div class="animated animated-78 " data-loading-animation=""
                                                            data-animated-id="78">
                                                            <div class="">
                                                                <div>
                                                                    <img class="image lazy initial loaded"
                                                                        data-src="https://static.ucraft.app/fs/userFiles/subete/images/05201920152078-P22AFmgMuUc.jpg"
                                                                        src="./SUBETE!_files/05201920152078-P22AFmgMuUc.jpg"
                                                                        data-was-processed="true">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </a>



                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleButton
                                          last ">
                                                <div class="  module ModuleButton " datamodule-id="144">
                                                    <div class="button">
                                                        <a class="btn buttons1530254589521"
                                                            href="./COMPRAR_SUBETE!.php" target="_self"
                                                            rel="">
                                                            <span class="btn-text"
                                                                style="color: rgb(53, 53, 53)">COMPRA</span>
                                                        </a>
                                                    </div>
                                                    <style>
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column col-sm-4 " datacolumn-id="56"
                                        style="  padding:29.45736434108527vh 0vh;     ">
                                        <div class="column-container vertical-top"
                                            style=" margin-top:5.7803468208092vh; ">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0px 20px 0px 20px;   padding-bottom:0vh; ">
                                                <div class="  module ModuleImage " datamodule-id="77"
                                                    style="display:block;max-width:280px;">
                                                    <a class="image-module-link"
                                                        href="./COMPRAR_SUBETE!.php" target="_self"
                                                        rel="">

                                                        <div class="animated animated-77 " data-loading-animation=""
                                                            data-animated-id="77">
                                                            <div class="">
                                                                <div>
                                                                    <img class="image lazy initial loaded"
                                                                        data-src="https://static.ucraft.app/fs/userFiles/subete/images/370288117277877-e6ZlCzBnGWI.jpg"
                                                                        src="./SUBETE!_files/370288117277877-e6ZlCzBnGWI.jpg"
                                                                        data-was-processed="true">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </a>



                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleButton
                                          last ">
                                                <div class="  module ModuleButton " datamodule-id="145">
                                                    <div class="button">
                                                        <a class="btn buttons1530254589521"
                                                            href="./COMPRAR_SUBETE!.php" target="_self"
                                                            rel="">
                                                            <span class="btn-text"
                                                                style="color: rgb(53, 53, 53)">VIAJA</span>
                                                        </a>
                                                    </div>
                                                    <style>
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row" style="bottom:-13.550135501355vh;">
                                <div class="margin-controller"></div>
                            </div>
                        </div>

                        <div class="uc-row                
                                " data-id="38" style="  margin-bottom:0vh;   background:; ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12 " datacolumn-id="61" style="  padding:0vh 0vh;     ">
                                        <div class="column-container vertical-center" style="">

                                            <div class="module-container   only-mobile   align-left ModuleTitle
                                         first   last " style=" padding:0px 20px 0px 20px;  ">
                                                <div class="  module ModuleTitle " datamodule-id="82"
                                                    style="display:block;max-width:552px;">
                                                    <div class="uc-content">
                                                        <h1 style="color:rgb(0, 0, 0);">LA MEJOR FORMA DE VIAJAR</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row" style="bottom:-0vh;">
                                <div class="margin-controller"></div>
                            </div>
                        </div>

                        <div class="uc-row                
                                " data-id="45" style="  margin-bottom:14.836795252226vh;  ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12 " datacolumn-id="72"
                                        style="  padding:4.3478260869565215vh 0vh;     ">
                                        <div class="column-container vertical-center" style="">

                                            <div class="module-container  align-center ModuleParagraph
                                         first   last ">
                                                <div class="  module ModuleParagraph " datamodule-id="86">
                                                    <div class="uc-content ">
                                                        <h3 class="AlignLeft">SUBETE! te ofrece los mejores destinos,
                                                            los mas comodos asientos y los mejores precios, desde la
                                                            comodidad de tu casa&nbsp;</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row" style="bottom:-14.836795252226vh;">
                                <div class="margin-controller"></div>
                            </div>
                        </div>

                        <div class="uc-row                
                                " data-id="102" style=" ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12 " datacolumn-id="170" style="      ">
                                        <div class="column-container vertical-top" style="">

                                            <div class="module-container  align-center ModuleTitle
                                         first   last ">
                                                <div class="  module ModuleTitle " datamodule-id="190">
                                                    <div class="uc-content">
                                                        <h3><span style="font-family:baloo;"><strong>NUESTROS
                                                                    SERVICIOS</strong></span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row">
                                <div class="margin-controller"></div>
                            </div>
                        </div>

                        <div class="uc-row last uc-animation staticParallax active" data-id="100"
                            data-effect="staticParallax" style="  margin-bottom:0vh;   background:rgb(239, 239, 239); ">
                            <div class="row-container  container ">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-4 " datacolumn-id="166"
                                        style="  padding:0.14836795252225518vh 0vh;     ">
                                        <div class="column-container vertical-top" style="">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0 40px 0 40px;  ">
                                                <div class="  module ModuleImage " datamodule-id="183"
                                                    style="display:block;max-width:199.984375px;">
                                                    <div class="animated animated-183 " data-loading-animation=""
                                                        data-animated-id="183">
                                                        <div class="">
                                                            <div>
                                                                <img class="image lazy loaded"
                                                                    data-src="https://static.ucraft.app/fs/userFiles/subete/images/183-1190152.png"
                                                                    src="./SUBETE!_files/183-1190152.png"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleTitle
                                          last ">
                                                <div class="  module ModuleTitle " datamodule-id="186">
                                                    <div class="uc-content">
                                                        <h3>COMPRAS ONLINE</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column col-sm-4 " datacolumn-id="167"
                                        style="  padding:0.14836795252225518vh 0vh;     ">
                                        <div class="column-container vertical-top"
                                            style=" margin-top:1.4836795252226vh; ">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0px 20px 0px 20px;  ">
                                                <div class="  module ModuleImage " datamodule-id="184"
                                                    style="display:block;max-width:199.984375px;">
                                                    <div class="animated animated-184 " data-loading-animation=""
                                                        data-animated-id="184">
                                                        <div class="">
                                                            <div>
                                                                <img class="image lazy loaded"
                                                                    data-src="https://static.ucraft.app/fs/userFiles/subete/images/10252256184-delivery-2.png"
                                                                    src="./SUBETE!_files/10252256184-delivery-2.png"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleTitle
                                          last ">
                                                <div class="  module ModuleTitle " datamodule-id="187">
                                                    <div class="uc-content">
                                                        <h3>ENCOMIENDAS Y PAQUETERIA</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column col-sm-4 " datacolumn-id="168"
                                        style="  padding:0.14836795252225518vh 0vh;     ">
                                        <div class="column-container vertical-top" style="">

                                            <div class="module-container  align-center ModuleImage
                                         first  " style=" padding:0px 40px 0px 40px;  ">
                                                <div class="  module ModuleImage " datamodule-id="185"
                                                    style="display:block;max-width:199.984375px;">
                                                    <div class="animated animated-185 " data-loading-animation=""
                                                        data-animated-id="185">
                                                        <div class="">
                                                            <div>
                                                                <img class="image lazy loaded"
                                                                    data-src="https://static.ucraft.app/fs/userFiles/subete/images/185-bus-512.png"
                                                                    src="./SUBETE!_files/185-bus-512.png"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>

                                            <div class="module-container  align-center ModuleTitle
                                          last ">
                                                <div class="  module ModuleTitle " datamodule-id="188">
                                                    <div class="uc-content">
                                                        <h3>RESERVAS DE AUTOBUSES</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="margin-container" data-type="row" style="bottom:-0vh;">
                                <div class="margin-controller"></div>
                            </div>
                        </div>

                    </div>
                    <div class="push" style="height: 260.125px;"></div>
                </div>
                <?php include("footer.php");?> 

</body>

</html>
