<?php


	require_once ("config/db.php");
	require_once ("config/conexion.php");
	

?>

<!DOCTYPE html>

<html class="desktop " prefix="og: http://ogp.me/ns#" lang="en-us" dir="ltr" itemscope=""
    itemtype="http://schema.org/WebSite" data-page-type="pageBlank">

<head>
<link rel="icon" type="image/png"href="./SUBETE!_files/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SUBETE!</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
	 <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body class="" style="">
    



      <div class="main-wrapper">
        <div class="text-title">
               
            <div class="login">
                    <img src="./SUBETE!_files/logo.png" style="max-width:80%;width:auto;height:auto;">
                <h1 style="
                margin: 10px;
                font-size: 35px;-webkit-text-stroke: 1px yellow;
            ">TUS DATOS</h1>

<div class="container">
<form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario" >
      <div class="row">
          <h4>Crea tu Cuenta</h4>
          <div class="input-group input-group-icon"><input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre" required />
              
          </div>

           <div class="input-group input-group-icon"><input type="text" id="apellido_usuario" name="apellido_usuario" placeholder="Apellido" required /> 
      		</div>

           <div class="input-group input-group-icon"><input type="text" id="identidad_usuario" name="identidad_usuario" placeholder="Numero de identidad" required /> 
      		</div>

          <div class="input-group input-group-icon"><input type="email" id="correo_usuario" name="correo_usuario" placeholder="Correo" required />
             
          </div>
          <div class="input-group input-group-icon"><input type="password" id="password" name="password" placeholder="Contraseña" required />
             
					</div>
					<div class="input-group input-group-icon"><input type="password" id="password_repeat" name="password_repeat" placeholder="Repita Contraseña" required />
             
          </div>
      </div>
      <div class="row">
          <div class="col-half">
              <h4>Fecha Nacimiento</h4>
              <div class="input-group">
                  <div class="col-third"><input type="date" name="fecha_nacimiento" id="fecha_nacimiento" style="color: yellow;" required /></div>
                 
              </div>
          </div>
          <div class="col-half">
              <h4>Genero</h4>
              <div class="input-group"><input type="radio" name="gender" value="male" id="gender-male" /><label for="gender-male">Masculino</label><input type="radio" name="gender" value="female" id="gender-female" /><label for="gender-female">Femenino</label></div>
          </div>
      </div>
      <div class="row">
      	<div class="input-group input-group-icon"><input type="text" id="telefono_usuario" name="telefono_usuario" placeholder="Telefono" required /> 
      		</div>

         
          
      <div class="row">
          <h4>Terminos y Condiciones</h4>
          <div class="input-group"><input type="checkbox" id="terms" /><label for="terms">Acepto los términos y condiciones para suscribirme a este servicio y, por la presente, confirmo que he leído la política de privacidad.</label></div>
      </div>
			<button type="submit" class="btn btn-primary" id="guardar_datos" style="    background-color: yellow;
    color: black;
    border-color: black;">Guardar datos</button>
  </form>
	<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
</div>
                    
              </div>  
        </div>	
     
    </div>  


<style>

    
body {
    background:url(./SUBETE!_files/background.jpg);
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
	background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
  text-align: center;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
}


*, *:before, *:after {
	 box-sizing: border-box;
}
 body {
	 padding: 1em;
	 font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	 font-size: 15px;
	 color: yellow;
	 background-color: #e3e3e3;
}
 h4 {
	 color: yellow;
   
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color:yellow;
  opacity: 5;/* Firefox */
}
 input, input[type="radio"] + label, input[type="checkbox"] + label:before, select option, select {
	 width: 100%;
	 padding: 1em;
	 line-height: 1.4;
	 background-color: #000000;
	 border: 1px solid yellow;
	 border-radius: 3px;
	 -webkit-transition: 0.35s ease-in-out;
	 -moz-transition: 0.35s ease-in-out;
	 -o-transition: 0.35s ease-in-out;
	 transition: 0.35s ease-in-out;
	 transition: all 0.35s ease-in-out;
   color: white;
}
 input:focus {
	 outline: 0;
	 border-color: yellow;
}
 input:focus + .input-icon i {
	 color: #7ed321;
}
 input:focus + .input-icon:after {
	 border-right-color: #7ed321;
}
 input[type="radio"] {
	 display: none;
}
 input[type="radio"] + label, select {
	 display: inline-block;
	 width: 50%;
	 text-align: center;
	 float: left;
	 border-radius: 0;
}
 input[type="radio"] + label:first-of-type {
	 border-top-left-radius: 3px;
	 border-bottom-left-radius: 3px;
   color: yellow;
}
 input[type="radio"] + label:last-of-type {
	 border-top-right-radius: 3px;
	 border-bottom-right-radius: 3px;
   color: yellow;
}
 input[type="radio"] + label i {
	 padding-right: 0.4em;
}
 input[type="radio"]:checked + label, input:checked + label:before, select:focus, select:active {
	 background-color: yellow;
	 color: rgb(0, 0, 0);
	 border-color: #64ac15;
}
 input[type="checkbox"] {
	 display: none;
}
 input[type="checkbox"] + label {
	 position: relative;
	 display: block;
	 padding-left: 1.6em;
}
 input[type="checkbox"] + label:before {
	 position: absolute;
	 top: 0.2em;
	 left: 0;
	 display: block;
	 width: 1em;
	 height: 1em;
	 padding: 0;
	 content: "";
}
 input[type="checkbox"] + label:after {
	 position: absolute;
	 top: 0.45em;
	 left: 0.2em;
	 font-size: 0.8em;
	 color: white;
	 opacity: 0;
	 font-family: FontAwesome;
	 content: "\f00c";
}
 input:checked + label:after {
	 opacity: 1;
}
 select {
	 height: 3.4em;
	 line-height: 2;
}
 select:first-of-type {
	 border-top-left-radius: 3px;
	 border-bottom-left-radius: 3px;
   color: yellow;
}
 select:last-of-type {
	 border-top-right-radius: 3px;
	 border-bottom-right-radius: 3px;
   color: yellow;
}
 select:focus, select:active {
	 outline: 0;
}
 select option {
	 background-color: yellow;
	 color: #fff;
}
 .input-group {
	 margin-bottom: 1em;
	 zoom: 1;
}
 .input-group:before, .input-group:after {
	 content: "";
	 display: table;
}
 .input-group:after {
	 clear: both;
}
 .input-group-icon {
	 position: relative;
}
 
 .input-group-icon .input-icon {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 3.4em;
	 height: 3.4em;
	 line-height: 3.4em;
	 text-align: center;
	 pointer-events: none;
}
 .input-group-icon .input-icon:after {
	 position: absolute;
	 top: 0.6em;
	 bottom: 0.6em;
	 left: 3.4em;
	 display: block;
	 border-right: 1px solid #e5e5e5;
	 content: "";
	 -webkit-transition: 0.35s ease-in-out;
	 -moz-transition: 0.35s ease-in-out;
	 -o-transition: 0.35s ease-in-out;
	 transition: 0.35s ease-in-out;
	 transition: all 0.35s ease-in-out;
}
 .input-group-icon .input-icon i {
	 -webkit-transition: 0.35s ease-in-out;
	 -moz-transition: 0.35s ease-in-out;
	 -o-transition: 0.35s ease-in-out;
	 transition: 0.35s ease-in-out;
	 transition: all 0.35s ease-in-out;
}
 .container {
	 max-width: 38em;
	 padding: 1em 3em 2em 3em;
	 margin: 0em auto;
	 background-color: #000000a8;
	 border-radius: 4.2px;
	 box-shadow: 0px 3px 10px -2px rgba(0,0,0,0.2);
}
 .row {
	 zoom: 1;
}
 .row:before, .row:after {
	 content: "";
	 display: table;
}
 .row:after {
	 clear: both;
}
 .col-half {
	 padding-right: 10px;
	 float: left;
	 width: 50%;
}
 .col-half:last-of-type {
	 padding-right: 0;
}
 .col-third {
	 padding-right: 10px;
	 float: left;
	 width: 100%;
}
 .col-third:last-of-type {
	 padding-right: 0;
}
 @media only screen and (max-width: 540px) {
	 .col-half {
		 width: 100%;
		 padding-right: 0;
	}
}
 


</style>



</body>

</html>

<script>
	
$( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
 
 var parametros = $(this).serialize();

	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_usuario.php",
			data: parametros,
			 beforeSend: function(objeto){
				
			  },
			success: function(datos){

				alert(datos);
				location.href="index.php";
		
		  }
	});
  event.preventDefault();
})

			
		
</script>

