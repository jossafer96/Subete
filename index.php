<?php
require_once("config/db.php");
require_once("classes/Login.php");

$login = new Login();

if ($login->isUserLoggedIn() == true) {
   header("location: INICIO_SUBETE!.php");

} else {
    
    ?>
<!DOCTYPE html>

<html class="desktop " prefix="og: http://ogp.me/ns#" lang="en-us" dir="ltr" itemscope=""
    itemtype="http://schema.org/WebSite" data-page-type="pageBlank">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SUBETE!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    @media screen and (max-width: 1024px) {
div .bus-wrapper {
display: none;
}
div .shadow {
display: none;
}
div .road {
display: none;
}
div .login {
  margin: 201px;
    max-width: 650px;
}
form .field label{
  display: none;
}
body {
  font-size: 110% !important;
background: yellow !important;
}
}
    </style>
    <script type="text/javascript">
       $('.error-page').hide(0);

$('.login-button , .no-access').click(function(){
  $('.login').slideUp(500);
  $('.error-page').slideDown(1000);
});

$('.try-again').click(function(){
  $('.error-page').hide(0);
  $('.login').slideDown(1000);
});
    </script>
   <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
   <link rel="icon" type="image/png"href="./SUBETE!_files/favicon.png">
</head>

<body id="principal">
    



      <div class="main-wrapper">
        <div class="text-title">
               
            <div class="login">
                    <img src="./SUBETE!_files/logo.png" style="max-width:80%;width:auto;height:auto;">
                <h1 style="
                margin: 10px;
                font-size: 35px;-webkit-text-stroke: 1px yellow;
            ">INGRESA</h1>
                    <form method="post" accept-charset="utf-8" action="index.php" name="loginform" autocomplete="off" role="form" class="form-signin">
                    <?php
				// show potential errors / feedback (from login object)
				if (isset($login)) {
					if ($login->errors) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert" style="font-size: 30px;">
						    <strong>Error!</strong> 
						
						<?php 
						foreach ($login->errors as $error) {
							echo $error;
						}
						?>
						</div>
						<?php
					}
					if ($login->messages) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert" style="font-size: 30px;">
						    <strong>Aviso!</strong>
						<?php
						foreach ($login->messages as $message) {
							echo $message;
						}
						?>
						</div> 
						<?php 
					}
				}
				?>
                            <div class="field name-box">
                                  <input type="text" id="nombre_usuario" placeholder="Nombre usuario" name="nombre_usuario" type="text" value="" autofocus="" required/ >
                                  <label for="name">Usuario</label>
                                  
                            </div>
                  
                            <div class="field email-box">
                                  <input type="password" id="password" placeholder="********" name="password" type="password" value="" autocomplete="off" required/>
                                  <label for="email">Contraseña</label>
                                  
                            </div>
                  
                           
                  
                            <input class="button" type="submit" value="Acceder" name="login" id="submit" />
                            <input class="button" value="Crear Cuenta" type="button" onclick="window.location='login_form.php';"/>
                    </form>
              </div>  
        </div>	
      <div class="bus-wrapper">
        <div class="window-section">
          <div class="window-glass">
            <div class="glass-inner">
              <div class="seats"></div>
            </div>
          </div>
          <div class="window-glass">
            <div class="glass-inner">
               <div class="seats first"></div>
               <div class="seats second"></div>
            </div>
          </div>
          <div class="window-glass">
            <div class="glass-inner">
              <div class="seats first"></div>
              <div class="seats second"></div>
            </div>
          </div>
          <div class="window-glass">
            <div class="glass-inner">
              <div class="seats first"></div>
              <div class="seats second"></div>
            </div>
          </div>
          <div class="window-glass">
            <div class="glass-inner">
              <div class="seats first"></div>
              <div class="seats second"></div>
            </div>
          </div>
          <div class="window-glass">
            <div class="glass-inner">
              <div class="seats first"></div>
              <div class="seats second"></div>
            </div>
          </div>  
        </div> 
        <div class="driver-section">
          <div class="window-glass">
            <div class="glass-inner">
              <div class="handle"></div>
            </div>
          </div>
        </div>  
        <div class="headlight-wrap">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="door-lower">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>  
        <div class="lower-shape"></div>
        <div class="sticker-wrap">
          <img src="./SUBETE!_files/logo.png" style="width: 152px;margin-right: 12rem;" >
        </div> 
        <div class="border-wrap">
          <span></span>
          <span></span>
          <span></span>
        </div>  
        <div class="tyres-wrapper">
          <div class="tyres-content">
            <div class="tyres">
            <div class="rim-section">
              <div class="stripe"></div>
            </div>          
          </div>
          </div>
          <div class="tyres-content">        
            <div class="tyres">
              <div class="rim-section">
                <div class="stripe"></div>
              </div>          
            </div> 
          </div>
        </div>
        <div class="lights-wrap">
          <div class="lights-1"></div> 
          <div class="lights lights-2"></div>
          <div class="lights lights-3"></div>
          <div class="lights lights-4"></div>
          <div class="lights lights-5"></div>
        </div> 
        <div class="square-1"></div>
        <div class="square-2">
          <div></div>
        </div>
        <div class="square-3">
          <div></div>
        </div>
      </div> 
      <div class="shadow"></div>
      <div class="road">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
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
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#fff;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
	width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color:#f2f2f2;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:#E86850;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:#f2f2f2;
  text-decoration:underline;
  cursor:pointer;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
*, *:after, *:before {
  box-sizing: border-box;
}
body {
  overflow-x: hidden;
}
.text-title {
  text-align: center;
  font-family: 'Open Sans Condensed', sans-serif;
  margin-top: 25px;
}
.bus-wrapper {
  background: yellow;
  max-width: 700px;
  height: 205px;
  border-radius: 4px;
  margin: 10px auto 0;
  position: relative;
  animation: bus-bounce 0.75s linear infinite;
}
.bus-wrapper:before {
  content: "";
  position: absolute;
  left: -12px;
  width: 0;
  height: 0;
  border-top: 103px solid transparent;
  border-bottom: 103px solid transparent;
  border-right: 12px solid yellow;
}
.bus-wrapper:after {
  content: "";
  position: absolute;
  right: -18px;
  top: 0;
  width: 0;
  height: 0;
  border-top: 163px solid transparent;
  border-bottom: 40px solid transparent;
  border-left: 18px solid yellow;
}
.lower-shape {
  position: absolute;
  width: 0;
  left: -22px;
  height: 0;
  bottom: 0;
  border-left: 20px solid transparent;
  border-right: 90px solid transparent;
  border-bottom: 15px solid rgb(0, 0, 0);
}
.window-section {
  width: 607px;
  height: 80px;
  display: inline-block;
  border-radius: 6px;
  background: #2e4148;
  margin-top: 15px;
  margin-left: 24px;
  padding-left: 21px;
}
.window-glass {
  width: 95px;
  height: 58px;
  background: #30b0c9;
  margin-right: 10px;
  border-radius: 4px;
  margin: 11px 10px 11px 0;
  float: left;
  overflow: hidden;
}
.window-glass:nth-child(1) {
  width: 50px;
}
.window-glass:nth-child(2) .glass-inner .seats.second, .window-glass:nth-child(3) .glass-inner .seats.second, .window-glass:nth-child(4) .glass-inner .seats.second {
  left: 45px;
}
.window-glass:nth-child(4) .glass-inner {
  margin-left: 0;
}
.window-glass:nth-child(5) .glass-inner {
  margin-left: -8px;
}
.window-glass:nth-child(5) .glass-inner .seats.first {
  left: 15px;
}
.window-glass:nth-child(5) .glass-inner .seats.second {
  left: 50px;
}
.window-glass:nth-child(6) .glass-inner {
  margin-left: -15px;
}
.window-glass:nth-child(6) .glass-inner .seats.first {
  left: 25px;
}
.window-glass:nth-child(6) .glass-inner .seats.second {
  display: none;
}
.glass-inner {
  width: 95px;
  height: 58px;
  background: #59bfd3;
  margin-top: 11px;
  margin-left: 15px;
  border-radius: 4px;
  position: relative;
}
.seats {
  width: 9px;
  height: 13px;
  background: rgba(255, 255, 255, 0.3);
  transform: skewX(9deg);
  border-radius: 2px;
  position: absolute;
  bottom: 10px;
  left: 6px;
}
.tyres-wrapper {
  position: relative;
  top: 40%;
}
.tyres-wrapper .tyres-content:nth-child(1) {
  position: absolute;
  left: 28%;
  position: absolute;
  bottom: -65px;
  left: 27%;
  border-radius: 90px 90px 0 0;
  -moz-border-radius: 90px 90px 0 0;
  -webkit-border-radius: 90px 90px 0 0;
  background: rgb(0, 0, 0);
  padding: 10px;
}
.tyres-wrapper .tyres-content:nth-child(2) {
  position: absolute;
  bottom: -65px;
  right: 9%;
  border-radius: 90px 90px 0 0;
  -moz-border-radius: 90px 90px 0 0;
  -webkit-border-radius: 90px 90px 0 0;
  background: rgb(0, 0, 0);
  padding: 10px;
}
.tyres {
  position: relative;
  z-index: 1;
  width: 73px;
  height: 73px;
  background: #4e5066;
  border-radius: 50%;
  border: 8px solid #3a3e4b;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  animation: stripe 1s linear infinite;
}
.rim-section {
  position: relative;
  width: 35px;
  height: 35px;
  background: #505350;
  border-radius: 50%;
  border: 11px solid black;
}
.stripe {
  width: 25px;
  position: absolute;
  height: 25px;
  border: 2px dashed #4e5066;
  border-radius: 50%;
  top: -6px;
  left: -6px;
  animation: stripe 1s linear infinite;
}
.sticker-wrap {
  position: absolute;
  right: 80px;
  top: 110px;
  z-index: 1;
}
.border-wrap {
  position: absolute;
  bottom: 18px;
  left: 30px;
}
.border-wrap > span {
  width: 543px;
  height: 4px;
  background: rgb(0, 0, 0);
  display: block;
  margin-bottom: 3px;
}
.border-wrap > span:last-child {
  margin-bottom: 0;
}
.driver-section {
  background: #2e4148;
  overflow: visible;
  width: 70px;
  border-radius: 4px;
  padding: 10px;
  position: absolute;
  right: 5px;
  top: 15px;
  padding-right: 0;
}
.driver-section:after {
  content: "";
  display: inline-block;
  position: absolute;
  width: 15px;
  height: calc(100% + -2px);
  background: #2e4148;
  float: right;
  right: -6px;
  top: 2px;
  z-index: 10;
  -ms-transform: skew(-30deg, 0deg);
  -webkit-transform: skew(-30deg, 0deg);
  transform: skew(7deg, 0deg);
}
.driver-section .window-glass {
  width: 60px;
}
.driver-section .glass-inner {
  margin-left: -57px;
  margin-top: -5px;
  height: 70px;
  transform: skewX(8deg);
}
.driver-section .handle {
  width: 30px;
  height: 3px;
  background: rgba(255, 255, 255, 0.3);
  transform: rotate(-20deg);
  border-radius: 2px;
  position: absolute;
  bottom: 10px;
  right: 15px;
}
.door-lower {
  width: 82px;
  height: 48px;
  position: absolute;
  border: 4px solid #2e4148;
  top: 110px;
  right: -7px;
  z-index: 1;
  border-radius: 4px;
}
.door-lower .dot1 {
  width: 10px;
  height: 4px;
  background: #3a3e4b;
  border-radius: 4px;
  margin-top: 8px;
  margin-left: 7px;
}
.door-lower .dot2 {
  width: 20px;
  height: 20px;
  background: #3a3e4b;
  float: right;
  margin-right: 7px;
  border-radius: 2px;
  margin-top: -3px;
}
.lights-wrap .lights-1 {
  background: #cc8460;
  box-shadow: 1px 2px 0px 0px rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  width: 8px;
  height: 28px;
  position: absolute;
  bottom: 43px;
  left: -5px;
  animation: changeColor 0.5s infinite;
}
.lights-wrap .lights {
  background: #cc8460;
  box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  width: 8px;
  height: 3px;
  position: absolute;
  bottom: 43px;
  z-index: 1;
  animation: changeColor 0.5s infinite;
}
.lights-wrap .lights.lights-2 {
  left: 50px;
}
.lights-wrap .lights.lights-3 {
  left: 189px;
}
.lights-wrap .lights.lights-4 {
  left: 395px;
}
.lights-wrap .lights.lights-5 {
  right: 165px;
}
.square-1 {
  background: #dedede;
  border: 2px solid #2e4148;
  box-shadow: inset 2px 6px 2px 0px rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  position: absolute;
  width: 14px;
  height: 14px;
  left: 50px;
  top: 105px;
}
.square-2 {
  width: 20px;
  height: 20px;
  border: 1px solid rgba(58, 62, 75, 0.1);
  border-radius: 6px;
  padding: 0px;
  display: inline-block;
  text-align: center;
  position: absolute;
  right: 5px;
  bottom: 21px;
}
.square-2 > div {
  width: 12px;
  height: 10px;
  background: #3a3e4b;
  display: inline-block;
  border-radius: 1px;
}
.square-3 {
  width: 20px;
  height: 20px;
  border: 1px solid rgba(58, 62, 75, 0.1);
  border-radius: 6px;
  padding: 0px;
  display: inline-block;
  text-align: center;
  position: absolute;
  right: 35px;
  bottom: 5px;
}
.square-3 > div {
  width: 12px;
  height: 10px;
  background: #3a3e4b;
  display: inline-block;
  border-radius: 1px;
}
.shadow {
  background: #000000;
  border-radius: 8px;
  width: 663px;
  height: 14px;
  margin: 25px auto 0;
  position: relative;
}
.headlight-wrap {
  position: absolute;
  right: -17px;
  bottom: 66px;
  z-index: 1;
}
.headlight-wrap > span {
  width: 8px;
  height: 2px;
  background: #fff;
  display: block;
  margin-bottom: 1px;
}
.road {
  width: 200%;
  margin-top: -7px;
  position: relative;
  z-index: 1;
  animation: mov-road 3s linear infinite;
  overflow: hidden;
}
.road .line {
  float: left;
}
.road .line:nth-child(1) {
  width: 10px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-left: 80px;
  margin-right: 20px;
}
.road .line:nth-child(2) {
  width: 20px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-right: 150px;
}
.road .line:nth-child(3) {
  width: 200px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-right: 80px;
}
.road .line:nth-child(4) {
  width: 200px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-right: 180px;
}
.road .line:nth-child(5) {
  width: 150px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-right: 300px;
}
.road .line:nth-child(6) {
  width: 200px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
}
.road .line:nth-child(7) {
  width: 10px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-left: 80px;
  margin-right: 20px;
}
.road .line:nth-child(8) {
  width: 20px;
  height: 6px;
  background: yellow;
  border-radius: 4px;
  margin-right: 150px;
}
@keyframes changeColor {
  0% {
    background-color: #cc8460;
  }
  50% {
    background-color: orange;
  }
  100% {
    background-color: #ffc107;
  }
}
@keyframes stripe {
  0% {
    -moz-transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    -ms-transform: rotateZ(0deg);
  }
  0% {
    -moz-transform: rotateZ(180deg);
    -webkit-transform: rotateZ(180deg);
    -o-transform: rotateZ(180deg);
    -ms-transform: rotateZ(180deg);
  }
  100% {
    -moz-transform: rotateZ(360deg);
    -webkit-transform: rotateZ(360deg);
    -o-transform: rotateZ(360deg);
    -ms-transform: rotateZ(360deg);
  }
}
@keyframes bus-bounce {
  0% {
    top: 2px;
  }
  20% {
    top: 1px;
  }
  40% {
    top: 2px;
  }
  75% {
    top: 0px;
  }
  100% {
    top: 2px;
  }
}
@keyframes mov-road {
  0% {
    left: 1500px;
  }
  100% {
    left: -1500px;
  }
}




body {
  
  font-size: 62.5%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  
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
form {
}
form .field {
 width: 100%;
 position: relative;
 margin-bottom: 15px;
 margin-left: 0px;
 color: black;
   font-weight: 500;
}
form .field label {
 
 position: absolute;
 top: 0;
 left: 0;
 background: yellow;
 width: 25%;
 padding: 18px 0;
 font-size: 1.45em;
 letter-spacing: 0.075em;
 -webkit-transition: all 333ms ease-in-out;
 -moz-transition: all 333ms ease-in-out;
 -o-transition: all 333ms ease-in-out;
 -ms-transition: all 333ms ease-in-out;
 transition: all 333ms ease-in-out;
}
form .field label + span {
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
form .field input[type="text"], form .field textarea {
 border: none;
 background: #1c1d21;
 width: 80.5%;
 margin: 0;
 padding: 6px 0;
 padding-left: 19.5%;
 color: white;
 font-size: 1.4em;
 letter-spacing: 0.05em;
 
}
form .field input[type="password"], form .field textarea {
 border: none;
 background: #1c1d21;
 width: 80.5%;
 margin: 0;
 padding: 6px 0;
 padding-left: 19.5%;
 color: white;
 font-size: 1.4em;
 letter-spacing: 0.05em;
 
}
form .field input[type="text"]#msg, form .field textarea#msg {
 height: 18px;
 resize: none;
 -webkit-transition: all 333ms ease-in-out;
 -moz-transition: all 333ms ease-in-out;
 -o-transition: all 333ms ease-in-out;
 -ms-transition: all 333ms ease-in-out;
 transition: all 333ms ease-in-out;
}
form .field input[type="text"]:focus, form .field textarea:focus, form .field input[type="text"].focused, form .field textarea.focused {
 outline: none;
}
form .field input[type="text"]:focus#msg, form .field textarea:focus#msg, form .field input[type="text"].focused#msg, form .field textarea.focused#msg {
 padding-bottom: 150px;
}
form .field input[type="text"]:focus + label, form .field textarea:focus + label, form .field input[type="text"].focused + label, form .field textarea.focused + label {
 width: 18%;
 background: yellow;
 color: #313a3d;
}
form .field input[type="text"].focused + label, form .field textarea.focused + label {
 color: yellow;
}
form .field:hover label {
 width: 18%;
 background: yellow;
 color:black;
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
form input[type="button"] {
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
form input[type="button"]:hover {
 background: yellow;
 color: #fd9638;
}
form input[type="submit"]:focus {
 outline: none;
 background: #cd6302;
}

form .control{
    height: 70px !important;
    margin-top: 10px;
}


</style>



</body>

</html>

<?php
}
?>
