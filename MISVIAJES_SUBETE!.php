<?php

session_start();
if (!isset($_SESSION['user_login_status']) and $_SESSION['user_login_status'] != 1) {
    header("location: index.php");
    exit;
}

require_once("config/db.php");
require_once("config/conexion.php");

$active_inicio = "";
$active_comprar = "";
$active_viajes = "active";
$active_contacto = "";


?>
<!DOCTYPE html>

<head>
    <?php include("head.php"); ?>
</head>

<body class="" onload="cargar_rutas();">


<?php include("modal_pagar.php"); ?>
    <div class="main-container">
        <div class="main-body">
            <div class="main-layout
		                                ">
                <div class="layers-container">
                    <div class="layer">
                    </div>
                </div>
                <div class="header-and-main-rows  " style="background: rgb(240, 240, 240); margin-bottom: -247.087px;">
                    <?php include("navbar.php"); ?>
                    <div class="main-rows">
                        <div class="uc-row first" data-id="21" style="  margin-bottom:0vh;   background-image:url(./SUBETE!_files/226742.jpg);    background-repeat: no-repeatheight: 750px;
                        background-size: cover;">
                            <div class="row-container  container " style="height: 690px;">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12  " datacolumn-id="37" style="  ">
                                        <div class="column-container vertical-center" style="">

                                            <div class="wrap" data-pos="0" style="width: 100%;background: #0000009e">
                                                <div class="headbar">
                                                    <i class="zmdi zmdi-arrow-left btnBack"></i> <span style="font-size: 2.1rem;">MIS VIAJES</span>
                                                </div>

                                                <div class="row" style="margin:0;">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table tbl-content" style="table-layout: auto;">


                                                            </table>
                                                        </div>


                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php include("footer.php"); ?>
                    <script type="text/javascript" src="js/cargar_viajes.js"></script>
                    <style>
                    div .payment-overview{
                        width: 100%;
                        padding-top: 30px;
                    }
                    </style>
</body>

</html>