<?php

session_start();
if (!isset($_SESSION['user_login_status']) and $_SESSION['user_login_status'] != 1) {
    header("location: index.php");
    exit;
}

require_once("config/db.php");
require_once("config/conexion.php");

$active_inicio = "";
$active_comprar = "active";
$active_viajes = "";
$active_contacto = "";



?>
<!DOCTYPE html>

<head>

    <?php include("head.php"); ?>

</head>

<body class="">



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

                        <div class="uc-row first" data-id="21" style="  margin-bottom:0vh;   background-image:url(./SUBETE!_files/1-13.jpg);    background-repeat: no-repeat;
                        background-size: cover;height: 750px;">
                            <div class="row-container  container " style="height: 690px;">
                                <div class="row mainRow" style="">

                                    <div class="column col-sm-12 col-lg-6 wrap " datacolumn-id="37" style="  ">
                                        <div class="column-container vertical-center" style="">

                                            <div class="wrap" data-pos="0" >
                                                <div class="headbar">
                                                    <i class="zmdi zmdi-arrow-left btnBack"></i> <span>BUSCA TU DESTINO</span>
                                                </div>
                                                <div class="header" style="    background-color: yellow;">
                                                   
                                                    <div class="title">
                                                        <div class="fromPlace" style="color: black;">
                                                            <span>BUSCA TU RUTA</span>
                                                        </div>

                                                    </div>
                                                    
                                                </div>

                                                <div class="content" style="height: calc(100% - 100px);">
                                                    <section style="margin:0px">
                                                        <form>
                                                            <div class="control select">
                                                                <div class="control-head">
                                                                    <div class="field name-box">
                                                                        <input list="desde" type="text" id="q" placeholder="Donde estas?" onkeyup='load(1);' />
                                                                        <datalist id="desde" class='outer_div'>
                                                                        </datalist>
                                                                        <label for="q">DESDE</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="control select">
                                                                <div class="control-head">
                                                                    <div class="field name-box">
                                                                        <input list="hacia" type="text" id="q1" placeholder="Donde desear viajar?" onkeyup='load1(1);' />
                                                                        <datalist id="hacia" class='outer_div1'>
                                                                        </datalist>
                                                                        <label for="q1">HASTA</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="control select">
                                                                <div class="control-head">
                                                                    <div class="field name-box">
                                                                        <input type="date" id="fecha_salida" placeholder="Cuando desear viajar?" style="color:white; background: #1c1d21;width: 44%;    font-size: 20px;" />
                                                                        <label for="name" style="padding: 0px;">FECHA SALIDA</label>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="control select">
                                                                <div class="control-head">
                                                                    <div class="field name-box">
                                                                        <input type="time" id="fecha_regreso" placeholder="Cuando desear regresar?" style="color:white; background: #1c1d21;width: 44%;    font-size: 20px;" />
                                                                        <label for="name" style="padding: 0px;">HORA SALIDA</label>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <div class="block center">

                                                                <a class="btn-green-flat-trigger" href="#" onclick="buscar();">BUSCAR</a>
                                                            </div>

                                                        </form>
                                                        <div class="list">
                                                            <div class="nano">
                                                                <div class="nano-content">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ticket">
                                                            <section>

                                                            </section>


                                                    </section>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    <div class="column col-sm-12 col-lg-6 wrap" datacolumn-id="37" style="">
                                        <div class="column-container vertical-center" style="">

                                            <div class="wrap" data-pos="0" >
                                                <div class="headbar">
                                                    <i class="zmdi zmdi-arrow-left btnBack"></i> <span>ELIGE TU RUTA</span>
                                                </div>


                                                <div class="content" style="height: 100%;">

                                                    <?php include("modal_pagar.php"); ?>
                                                    <?php include("modal.php"); ?>

                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="push" style="height: 247.087px;"></div>
                </div>

                <?php include("footer.php"); ?>


                <style>
                    form .control {
                        height: 70px !important;
                        margin-top: 10px;
                    }

                    body {
                        background: #efefef;

                        font-family: 'Rubik', serif;
                        font-weight: 600;
                        color: #b6b6b6;
                    }

                    body section {

                        width: 100% !important;

                    }

                    body section h1 {
                        margin-bottom: 40px;
                        font-size: 4em;
                        text-transform: uppercase;
                        font-family: "Lato", sans-serif;
                        font-weight: 100;
                    }

                    form {}

                    form .field {
                        width: 100%;
                        position: relative;
                        margin-bottom: 15px;
                        margin-left: 0px;
                        color: black;
                        font-weight: 500;
                    }

                    form .field label {
                        text-transform: uppercase;
                        position: absolute;
                        top: 0;
                        left: 0;
                        background: yellow;
                        width: 20%;
                        padding: 15px 0;
                        font-size: 1.45em;
                        letter-spacing: 0.075em;
                        -webkit-transition: all 333ms ease-in-out;
                        -moz-transition: all 333ms ease-in-out;
                        -o-transition: all 333ms ease-in-out;
                        -ms-transition: all 333ms ease-in-out;
                        transition: all 333ms ease-in-out;
                    }

                    form .field label+span {
                        font-family: "SSStandard";
                        opacity: 0;
                        color: white;
                        display: block;
                        position: absolute;
                        top: 12px;
                        left: 7%;
                        font-size: 2.5em;
                        text-shadow: 1px 2px 0 #cd6302;
                        -webkit-transition: all 333ms ease-in-out;
                        -moz-transition: all 333ms ease-in-out;
                        -o-transition: all 333ms ease-in-out;
                        -ms-transition: all 333ms ease-in-out;
                        transition: all 333ms ease-in-out;
                    }

                    form .field input[type="text"],
                    form .field textarea {
                        border: none;
                        background: #1c1d21;
                        width: 80.5%;
                        margin: 0;
                        padding: 18px 0;
                        padding-left: 19.5%;
                        color: white;
                        font-size: 1.4em;
                        letter-spacing: 0.05em;
                        text-transform: uppercase;
                    }

                    form .field input[type="text"]#msg,
                    form .field textarea#msg {
                        height: 18px;
                        resize: none;
                        -webkit-transition: all 333ms ease-in-out;
                        -moz-transition: all 333ms ease-in-out;
                        -o-transition: all 333ms ease-in-out;
                        -ms-transition: all 333ms ease-in-out;
                        transition: all 333ms ease-in-out;
                    }

                    form .field input[type="text"]:focus,
                    form .field textarea:focus,
                    form .field input[type="text"].focused,
                    form .field textarea.focused {
                        outline: none;
                    }

                    form .field input[type="text"]:focus#msg,
                    form .field textarea:focus#msg,
                    form .field input[type="text"].focused#msg,
                    form .field textarea.focused#msg {
                        padding-bottom: 150px;
                    }

                    form .field input[type="text"]:focus+label,
                    form .field textarea:focus+label,
                    form .field input[type="text"].focused+label,
                    form .field textarea.focused+label {
                        width: 18%;
                        background: yellow;
                        color: #313a3d;
                    }

                    form .field input[type="text"].focused+label,
                    form .field textarea.focused+label {
                        color: yellow;
                    }

                    form .field:hover label {
                        width: 18%;
                        background: yellow;
                        color: black;
                    }

                    form input[type="submit"] {
                        background: #fd9638;
                        color: white;
                        -webkit-appearance: none;
                        border: none;
                        text-transform: uppercase;
                        position: relative;
                        padding: 13px 50px;
                        font-size: 1.4em;
                        letter-spacing: 0.1em;
                        font-family: "Lato", sans-serif;
                        font-weight: 300;
                        -webkit-transition: all 333ms ease-in-out;
                        -moz-transition: all 333ms ease-in-out;
                        -o-transition: all 333ms ease-in-out;
                        -ms-transition: all 333ms ease-in-out;
                        transition: all 333ms ease-in-out;
                    }

                    form input[type="submit"]:hover {
                        background: yellow;
                        color: #fd9638;
                    }

                    form input[type="submit"]:focus {
                        outline: none;
                        background: #cd6302;
                    }

                    .control .control-head {

                        margin-top: 0px;

                    }
                </style>
                <script type="text/javascript" src="js/destinos.js"></script>
                <script type="text/javascript" src="js/buscar_rutas.js"></script>




</body>


</html>