<?php

session_start();
if (!isset($_SESSION['user_login_status']) and $_SESSION['user_login_status'] != 1) {
  header("location: index.php");
  exit;
}

require_once("config/db.php");
require_once("config/conexion.php");

$active_inicio="";
$active_comprar="";
$active_viajes="";
$active_contacto="active";


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
            <div class="uc-row first" data-id="21" style="  margin-bottom:0vh;   background-image:url(./SUBETE!_files/school_bus.jpg);    background-repeat: no-repeat;
                                background-size: cover;height: 750px;">
              <div class="row-container  container ">
                <div class="row mainRow" style="">
                  <section id="hire">
                    <h1 style="color: white;">Contactame</h1>

                    <form>
                      <div class="field name-box">
                        <input type="text" id="name" placeholder="Quien eres?" />
                        <label for="name">Nombre</label>
                       
                      </div>

                      <div class="field email-box">
                        <input type="text" id="email" placeholder="nombre@email.com" />
                        <label for="email">Correo</label>
                        
                      </div>

                      <div class="field msg-box">
                        <textarea id="msg" rows="4" placeholder="Escribe tu mensaje aqui......" /></textarea>
                        <label for="msg">Msg</label>
                       
                      </div>

                      <input class="button" type="submit" value="Enviar" onclick="contacto();"/>
                    </form>
                  </section>

                </div>
              </div>
            </div>
          </div>
          <?php include("footer.php"); ?>




          <style>
            body {
              background: #efefef;
              font-size: 62.5%;
              font-family: "Lato", sans-serif;
              font-weight: 300;
              color: #b6b6b6;
            }

            body section {
              background: #0000009e;
              margin: 60px auto 120px;
              border-top: 15px solid yellow;
              text-align: center;
              padding: 50px 0 110px;
              width: 80%;
              max-width: 1100px;
            }

            body section h1 {
              margin-bottom: 40px;
              font-size: 4em;
              text-transform: uppercase;
              font-family: "Lato", sans-serif;
              font-weight: 100;
            }

            form {
              width: 58.33333%;
              margin: 0 auto;
            }

            form .field {
              width: 100%;
              position: relative;
              margin-bottom: 15px;
            }

            form .field label {
              font-weight: 600;
              color: black;
              text-transform: uppercase;
              position: absolute;
              top: 0;
              left: 0;
              background: yellow;
              width: 100%;
              padding: 18px 0;
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
              background: #74666600;
    width: 80.5%;
    margin: 0;
    padding: 18px 0;
    padding-left: 19.5%;
    color: #ffffff;
    font-size: 1.4em;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-weight: 600;
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
              background: #fd9638;
              color: #313a3d;
            }

            form .field input[type="text"].focused+label,
            form .field textarea.focused+label {
              color: #fd9638;
            }

            form .field:hover label {
              width: 18%;
              background: #313a3d;
              color: white;
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
              background: #313a3d;
              color: #fd9638;
            }

            form input[type="submit"]:focus {
              outline: none;
              background: #cd6302;
            }
          </style>
 <script type="text/javascript" src="js/contacto.js"></script>
</body>

</html>