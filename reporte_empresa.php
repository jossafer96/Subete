<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  * { margin:0; padding:0; }

html {
 min-height:100%; 
 -webkit-font-smoothing: antialiased; 	
 	width: 100%;
	height: 100%;
}

body {
	width: 100%;
	height: 100%;
	background-color:yellow;
	opacity:0;
	overflow:hidden; /* disable bounce back on OS X */
	cursor: default;
}

a { cursor:pointer; }

.box-text, .bd { overflow: hidden; }

.bd { padding:0 0 1px 0; }

.overlay-cover {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	left: 0px; 
	top: 0px;
}

#page {
	width: 100%;
	height: 100%;
	position: absolute;
	opacity:1;
	overflow:hidden;
	/*background: #A54209 url(../img/bg.png) repeat center center;*/
	background: repeat center center;
	/*background:#555;*/
	/*background-image:url(filesystem:chrome-extension://ehhkfhegcenpfoanmgfpfhnmdmflkbgk/persistent/background.jpg);*/
	
	font-size: 12px;
	/*font-family:'Segoe UI','HelveticaNeue-Light','Helvetica Neue',Helvetica,Arial,sans-serif;*/
	font-family:'Segoe UI','Helvetica Neue',Helvetica,Arial,sans-serif;
	color: rgba(255,255,255,.95); 
	-webkit-transition:margin .3s;
}

@font-face {
	font-family: 'HelveticaNeueLTCom';
	src: url('fonts/HelveticaNeueLTCom-Th_0.ttf') format('truetype');
	/*src: url('fonts/HelveticaNeueLTCom-Th_0.woff') format('woff');*/
}

input, button {
	font-family: 'Segoe UI','Helvetica Neue',Helvetica,Arial,sans-serif;
}

#page-gradient {
	width:100%;
	height:100%;
	background-image:	
		-webkit-gradient(
			linear,center top,center bottom,
			from(rgba(0, 0, 0, 0.01)),
			color-stop(75%,rgba(0, 0, 0, 0.001)),
			to(rgba(0, 0, 0, 0.33))),
		-webkit-gradient(
			linear,left center,right center,
			from(rgba(0, 0, 0, 0.25)),
			color-stop(25%,rgba(0, 0, 0, 0.001)),
			color-stop(75%,rgba(0, 0, 0, 0.001)),
			to(rgba(0, 0, 0, 0.25)));
}

.bold, b, strong {
	font-weight: bold;
}

.ticker-icon {
	width: 24px;
	height: 24px;
	margin-right: 8px;
	float:left;
}

.scrollable {
	overflow:auto;
	height:83%;
	padding-right:15px;
}

#boxes a {
	color: #9cf0ff;
	font-weight: bold;
	text-decoration: none;
	border-bottom:1px dotted #9c9c9c;
}

/**
 * Scrollbar
 */
::-webkit-scrollbar {
	-webkit-appearance: none;
	width: 7px;
}

::-webkit-scrollbar-thumb {
	-webkit-transition: background-color 2s ease-in-out;
	border-radius: 4px;
	background: rgba(0, 0, 0, 0.35); /*.25*/
	-webkit-box-shadow: 0 0 1px rgba(255,255,255,0.5);
}

::-webkit-scrollbar-track {
	border-radius: 4px;
	background-color: rgba(0, 0, 0, .05);
}

/**
 * Datetime
 */
 
#datetime {
	position:absolute;
	left: 10%;
	bottom: 5%;
	text-shadow: 0 0 2px rgba(255, 255, 255, .5);
	-webkit-transform:translateZ(0);
	cursor:default;
	/*font-family: 'Helvetica Neue LT Com 35 Thin','HelveticaNeue-UltraLight', 'Helvetica Neue',Helvetica,'Segoe UI',Arial,sans-serif;
	font-weight:300;*/
	color:rgba(255,255,255,.9);
	font-family: 'HelveticaNeueLTCom','Helvetica Neue',Helvetica,'Segoe UI',Arial,sans-serif;
}

#time {
	font-size:120px;
	line-height:135px;
	cursor:pointer;
	display:inline-block;
	-webkit-user-select:none;
}

#date {
	font-size:50px;
	line-height:60px;
}

#upcoming-event {
    display: inline-block;
    margin-left: 8px;
    font-size: 20px;
    line-height: 130%;
    color:#fff;
    text-decoration: none;
    padding:12px;
    border-radius: 6px;
    -webkit-transition: background-color .15s, -webkit-transform .15s;
}

#upcoming-event:hover {
	background-color: rgba(0,0,0,.35);
}
#upcoming-event:active {
	-webkit-transform:scale(0.8);
	background-color: rgba(0,0,0,.5);
}


/**
 * Box
 */
 
#boxes {
	position:absolute;
	width:38%;
	left:6%;
	height:45%;
	margin-top:16px;
	font-weight: 200;
	/*margin:30px 0 0 100px;*/
	/*
	-webkit-transform-style: preserve-3d;
	-webkit-perspective: 800;
	*/
}
 
.box {
	/*width:38%; /*600px;*/
	background: rgba(0, 0, 0, .2);
	padding:15px 10px 5px 30px;
	margin: 20px 0;
	border-radius:20px;
	/*box-shadow: 3px 3px 5px rgba(0,0,0,.3);*/
	position: relative;
}
/*
.box:nth-of-type(1) {
	-webkit-transform: translate3d(-100px,0,0);
	-webkit-transition: -webkit-transform 3s ease-in-out;
}

	-webkit-transform: translate3d(0,0,100px); *
*/
.box-h1 {
	font-size:30px;
	margin-bottom:5px;
	font-family:'Helvetica Neue',Helvetica,arial,sans-serif
}

.box-text {
	font-size:16px;
	margin:12px 0;
	-webkit-transition:opacity .4s ease-in-out, height .25s ease-out;
	/*
	-webkit-transition:opacity .2s ease-in-out, height .25s ease-out, -webkit-transform 1s ease;
	-webkit-transform-origin: 50% 100%;
	-webkit-perspective: 400px;
	*/
}

/* notifications */

#notifications-box {
	text-shadow: 2px 2px #333;
	color: white;
	-webkit-transform:translateZ(0); /*temporary fix for slow on mouse over*/
	height:62%;
	background: rgba(0,0,0,.6)
	/*
	-webkit-perspective: 1600px;
	-webkit-perspective-origin: 50% 0;
	*/
}

#clear-notifications {
		background:transparent;
    position: absolute;
    right: 30px;
    top: 20px;
    border: 2px solid #777;
    border-radius: 20px;
    padding: 3px 12px;
    color: #eee;
    cursor:pointer;
    opacity:0.5;
    outline:0;
    -webkit-transition:opacity .15s, background .15s, color .15s, border-color .15s, -webkit-transform .15s;
}
#clear-notifications:hover {
	background: rgba(255,255,255,.3);
	border-color:rgba(255,255,255,.1);
	color:#fff;
	-webkit-transform:scale(1.2);
	/*border-color:#f1f1f1;*/
}

#clear-notifications:active {
	-webkit-transform:scale(0.8);
}

#notifications-box:hover #clear-notifications {
	opacity:1;
}

/*border: 5px solid rgba(0, 0, 0, .3);*/


/**
 * Icons
 */

#slider { position:relative; overflow:hidden; /**/ clear:both;  }
#frames { width:10000px; position:relative; /*position:absolute;*/ }
#frames .frame { float:left; width: 980px; margin-right: 100px;  }


#apps-wrapper {	
	position:absolute;
	width:52%;
	right:2%;
	height:100%;
	z-index: 1;
  overflow-y: auto;
}

#apps-slider {
	overflow:hidden; 
	height:100%;
	width:760px;
	padding-top:28px;
	position: relative;
	clear:both;
}

#apps-pages-list {
	position:absolute;
	width:10000px; 
	height:100%;
	-webkit-transition:-webkit-transform/*left*/ .4s ease-in-out;
}

.apps-page {
	width:740px;
	/*float:left; 
	width:740px; = (128 + 2 * 10) * 5; 
	margin-right: 100px; 
	position:relative;*/
	height:100%;
	/*
	width:760px;
	overflow-y: scroll;
	height: 727px;
	overflow-x: hidden;
	padding-right: 7px;
	*/
}

#apps-dots {
	position: absolute;
	z-index: 10;
	top: 780px;
	left: 0;
	text-align: center;
	width: 100%;
	-webkit-user-select:none;

	/*
	contrast
	width: auto;
	background: rgba(0,0,0,.6);
	border-radius: 8px;
	padding: 3px 14px 5px;
	*/
}

#apps-dots span {
	margin:0 8px;
	cursor:pointer;
	height: 8px;
	width: 8px;
	border-radius: 8px;
	display: inline-block;
	background: #DEDEDE;
	opacity: .7;

	box-shadow: 0 0 4px 1px rgba(0,0,0,.25);

	/*
	margin: 0 5px;
	cursor: pointer;
	opacity: .5;
	padding: 1px;
	font-size: 34px;
	line-height: 14px;
	-webkit-user-select: none;
	&#8226;
	*/
}

#apps-dots span.active-dot {
	opacity:1;
	background: #fff;
}


.test-item a {
	text-decoration:none;
	color:#fff;
}

.test-item-add {
	width: 128px;
	height: 128px;
	color: #f1f1f1;
	line-height: 128px;
	font-family: arial;
	font-size: 100px;
	/* no text + height? */
}

.test-item-add:hover {
	color: #fff;
}

.test-item {
	/*position:relative;
	float:left;*/
	position: absolute;
	text-align:center;
	width:128px;
	margin:10px;
	border-radius: 5px;
	/*background: rgba(0, 0, 0, .2);
	box-shadow: 3px 3px 5px rgba(0,0,0,.3);*/
	background: rgba(0, 0, 0, .17);
	box-shadow: 3px 3px 5px rgba(0,0,0,.24);
	-webkit-transition-property: background-color, -webkit-transform;
	-webkit-transition-duration: .15s, .10s;
	-webkit-transition-timing-function: ease-out, ease-out;
	-webkit-transition-delay: 0, 0;
	cursor: pointer;
	-webkit-user-select:none;
}

.animated .test-item {
	-webkit-transition-property: background-color, -webkit-transform, left, top;
	-webkit-transition-duration: .15s, .10s, .15s, .15s;
	-webkit-transition-timing-function: ease-out, ease-out, ease-out, ease-out;
	-webkit-transition-delay: 0, 0, 0, 0;
}

#mouse-move-overlay {
	opacity:0;
	display:none;
	position: absolute;
	z-index:30;
	top:0;
	right:0;
	bottom:0;
	left:0;
}

#screenshot-overlay {
	/*
	-webkit-transition-property: left, top, opacity;
	-webkit-transition-duration: 1s, 1s, 1s;
	-webkit-transition-timing-function: ease-out, ease-out, ease-out;
	-webkit-transition-delay: 0, 0, 0;
	*/
	display:none; 
	position:absolute;
	z-index:1000; 
	top:0;
	right:0; 
	bottom:0; 
	left:0; 
	background-position:center center;
	background-repeat:no-repeat;
	overflow:hidden;
}

.test-item-text {
	background:rgba(0,0,0,.5);
	padding:5px 10px;
	border-radius:8px;
	font-size: 16px;
	padding: 5px 5px;
	text-shadow: 0px 1px 5px rgba(0,0,0,0.1);
	/*text-shadow: #111 1px 2px;*/
	/*font-weight: bold;*/
	/*display:none;*/
}

.test-item-launcher { 
	cursor:pointer;   
	-webkit-user-select: none;
	user-select: none;
}

/*
.test-item-launcher::before {
	
  position: absolute;
  top: 42%;
  left: 50%;
  width: 0;
  height: 0;
  box-shadow: 0 0 110px 25px #000;
  z-index: -1;
  content: "";
  display: block;
}

.test-item.dragged .test-item-launcher::before {
	box-shadow: none;
}
*/

.test-item:hover {
	 background: rgba(0, 0, 0, .25);
	 -webkit-transform: scale(1.1);
	 z-index:5;
}

.test-item:active {	 
	background: rgba(0, 0, 0, .5);
	 -webkit-transform: scale(0.85);
	 -webkit-transition: -webkit-transform .4s cubic-bezier(.87,-.41,.19,1.44);

}
.test-item.pressed {	 
	background: rgba(0, 0, 0, .5);
	-webkit-transform: scale(0.85);
	/*
	-webkit-transition: -webkit-transform .4s cubic-bezier(.87,-.41,.19,1.44);
	-webkit-transform: scale(1.25);
	z-index:5;
	*/
}


.test-item.dragged {
	-webkit-transform: scale(1.1);
	background: rgba(0, 0, 0, .4);
	position: absolute;
	opacity: .9;
	z-index:5;
}

.test-item.ghost {
	visibility:hidden;
}

.test-item img {
	width:128px;
	height: 128px;
}

.test-item img.bordered {
	border: 1px solid rgba(0,0,0,0.16);
	box-sizing: border-box;
	width: 104px;
	height: 104px;
	margin: 12px;
}

.test-item img.bordered.circle {
	width: 108px;
	height: 108px;
	margin: 10px;
}

.indicator {
	position: absolute;
	right: -20px;
	top: -15px;

	border-radius: 20px;
	height: 40px;
  box-sizing: border-box;
  min-width: 40px;
  padding: 7px;
	font-size: 26px;
	line-height:26px;

	font-family: 'Helvetica Neue',Helvetica,'Segoe UI',Arial,sans-serif; /*'HelveticaNeue-Light',*/
	display:none;
	/**/
	border: 1px solid #8C0000;
	background: rgba(245, 53, 36, 0.9);
	box-shadow: 0 0 10px rgba(0,0,0,.6);
	/*
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.4, #CB0307), color-stop(1, #F9B6B9) );
	box-shadow: 0 0 10px rgba(0,0,0,.8);
	border: 3px solid white;
	padding: 8px 11px 8px;
	*/
}

.panel {
	width: 180px;
	background: rgba(255, 255, 255, .96);
	position: absolute;
	right: 200px;
	top: 50px;
	z-index: 1000;
  /*border:1px solid #ddd;
  border-color:#e0e0e0 #bfbfbf #aaa #bfbfbf;*/
  box-shadow: 0 10px 20px rgba(0, 0, 0, .25);
  border-radius: 5px; 
	padding:5px 0;
}

.panel li {
	display: block;
	color: #000;
	text-decoration:none;
	padding:3px 15px;
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
	cursor: default;
	font-size:13px;
}

.panel-app-name {
	font-weight:bold;
}

.panel li:hover {
	color: #fff;
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #1b78d9), color-stop(1, #319be7) );
	border-top:1px solid #148ddf;
	border-bottom:1px solid #095bba;
	text-shadow:0 0 1px #999;
}

.panel li.disabled {
	color:#aaa;
}

.panel li.disabled:hover {
	color:#aaa;
	background-image:none;
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
	text-shadow:none;
}


.panel hr {
	background: -webkit-linear-gradient(left, rgba(0, 0, 0, .10), rgba(0, 0, 0, .02) 96%);
	border: 0;
	height: 1px;
	margin: 8px 0;
}


#notes {
	display:none;
	width: 300px;
	right: 30px;
	bottom: 30px;
	position: absolute;
}

#notes2 {
	width: 40%;
	left: 6%;
	top: 34%;
	position: absolute;
	z-index:2;
	display:none;
}

.note {
	/*background:#fdfdcb;*/
	/*background-image: -webkit-linear-gradient(bottom, #FDFDCB 100%, #FCF9A1 80%);*/
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #FDFDCB),
		color-stop(0.5, #FCF9A1)
	);
	color:#000;
	font-size:18px;
	box-shadow: 2px 2px 10px rgba(0,0,0,0.8);
	/*border-top:30px solid #f8f7b6;*/
	font-family: 'Patrick Hand', cursive;

}

.note-body {
	padding:10px;
	font-size:18px;
	color:#333;
}
.note-header { 
	background:#f8f7b6;
	height:30px;
	line-height:30px;
	padding:0 10px;
	color:#640; 
	font-size:16px; 

	font-family: 'Patrick Hand', cursive;
	font-weight:bold;
}


.overlay {
	-webkit-transform:translateZ(0);
	-webkit-box-align: center;
	-webkit-box-pack: center;
	-webkit-transition: 0.5s opacity;
	background: -webkit-radial-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.8));
	bottom: 0;
	display: -webkit-box;
	left: 0;
	padding: 20px;
	padding-bottom: 130px;
	position: absolute;/*fixed*/
	right: 0;
	top: 0;
	z-index: 10;  
	opacity: 0;
	display: none;
}

.open-app {
	background:#fff;
	top:50%;
	bottom:50%;
	right:50%;
	left:50%;
	position: absolute; /*fixed*/
	z-index:20;
	opacity:0;
	display:block;
	/*
	-webkit-transition: top .3s ease-out;
	-webkit-transition-property: top, right, bottom, left;
	*/
}

.open-app-overlay {
	position: absolute; /*fixed*/
	background:#000;
	top:0;
	right:0;
	bottom:0;
	left:0;
	opacity:0;
	display:none;
	z-index:10;
	/*-webkit-transition: 1s opacity;*/
}

a#recently-closed-button {
	font-size:16px;
	font-weight:bold;
	display: block;
	position: absolute;
	right:8%;
	bottom:0;
	text-decoration:none;
	border-radius: 8px 8px 0 0;
	padding: 8px 16px;	
	z-index:11;

	/*	text-shadow: 1px 1px white;
	text-shadow: 1px 1px rgba(0, 0, 0, .4);
	text-shadow: 0px 1px 5px rgba(0,0,0,0.1);*/

	/*background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.5, #CB0307), color-stop(1, #ff5457) );*/
	/*border:2px solid rgba(255,255,255, .22);*/
	background-color: rgba(0,0,0,.5);
	border:3px solid rgba(255,255,255, .3);
	border-bottom:0;
	color: white;

	box-shadow: 0 0 10px #000;

	/* glass-like */
	background: rgba(0,0,0,.4);
	box-shadow: 0 0 10px rgba(0,0,0,.5);

	-webkit-transition-property: background-color, -webkit-transform;
	-webkit-transition-duration: .15s, .10s;
	-webkit-transition-timing-function: ease-out, ease-out;
	-webkit-transition-delay: 0, 0;
}

a#recently-closed-button:hover {
	/*background:rgba(200, 25, 0, .8);*/
	background: rgba(255,255,255,.3);
	-webkit-transform: scale(1.1) translate(0,-1px);
	/*text-shadow: 1px 1px 1px rgba(0,0,0,0.1);*/
}
a#recently-closed-button:active {
	-webkit-transform: scale(0.9) translate(0,6px);
}


#recently-closed {
	/*-webkit-transition: right .3s ease-out;*/
	position: absolute;
	right:10px; /*6%;*/
	background: #fff;
	box-shadow:0 1px 13px rgba(0, 0, 0, 0.8);
	padding:5px 0;
	border-radius:10px;
	color:#222;
	/*
	border:3px solid rgba(0, 0, 0, .2);
	background-image: -webkit-gradient( linear, left center, right center, color-stop(0.5, white), color-stop(1, #ddd) );
	*/
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.1, #DDD), color-stop(0.5, white) );
	border:3px solid rgba(0, 0, 0, .1);
	border-right:0;
	bottom: 40px;
	z-index: 12;
	-webkit-transition: -webkit-transform .25s cubic-bezier(.1,.56,.52,1);
	/* .2s ease-out
	cubic-bezier(0,.89,.68,1.09) 
	cubic-bezier(.17,.67,.68,1.09)
	middle: cubic-bezier(.08,.80,.68,1.09)
	cubic-beziercubic-bezier(.01,.61,.66,1.07); 
	*/
	/*-webkit-transition: opacity .3s, -webkit-transform .3s cubic-bezier(.87,-.41,.19,1.44);
	*/
	opacity:1;	
	display:none;
	/*new:
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
	border:0;*/
}

#recently-closed.minimized {
	-webkit-transform: translate3d(17%,55%,0) scale(0.1); 
	/*-webkit-transform: translate3d(15%,41%,0) scale(0.3);*/
	opacity:0.1;	
}

#recently-closed a {
	color:#000;
	display: block;
	line-height: 2;
	margin: 5px 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	text-decoration:none;
	padding: 0 20px 0 10px;
	width: 600px;
	font-size: 18px;
}

#recently-closed a:hover {
	background-color: #cfcfcf;
}
#recently-closed a:active {
	background:#4081EA !important;
	color:#fff !important;
}
#recently-closed  img {
	margin-right: 10px;
	margin-top: -4px;
	vertical-align: middle;
}

#add-app-button {
	color: #eee;
	font-weight: bold;    
	position: absolute;        
	width: 36px;    
	border-radius: 19px;    
	text-align: center;    
	cursor: pointer;    
	text-decoration: none;    
	-webkit-transition: color .15s, -webkit-transform .15s;
	bottom: 50%;
	font-size: 70px;
	line-height: 1;
	font-family: arial, helvetica, sans-serif;
	z-index: 1000;
	text-shadow: 0 0 5px rgba(0,0,0,.1);
	zoom:1.5;
	right: 2%;
	text-shadow: 0 0 3px rgba(0, 0, 0, .3);
}

#add-app-button:hover {
	-webkit-transition: color 1s , -webkit-transform .4s cubic-bezier(.87,-.41,.19,1.44);
  -webkit-transform: scale(1.65) translateZ(0);
  /*text-shadow: 0 0 3px rgba(0, 0, 0, .5);*/
  color: #ffde00;
}

#add-app-button:active {
	-webkit-transition: color .15s, -webkit-transform .15s;
  -webkit-transform: none;
  color:#FFF191;
}

#drop-target-wrapper {
	width: 100%;
	position: absolute;
	bottom: 2%;
	display:none;
}

#drop-target {
	width: 400px;
	margin: auto;
	background: rgba(175, 25, 0, .5) url(../_anyag/icons/misc/Recyclebin_small.png) no-repeat 97% center;
	text-align: center;
	border-radius: 8px;
	line-height: 50px;
	font-size: 18px;
}



/*
 Calendar icon widget
*/

#cal-icon {
		width: 128px;  
		height: 128px;
		/*-webkit-transform:translateZ(0);*/
}

#cal-icon-overlay {
	position: absolute;
	left: 0;
	top: 0;
	background: white;
	width: 100%;
	height: 100%;
	z-index: 10;
	opacity:0;
}

#cal-icon-content {
		width: 108px;
		height: 108px;
		background: #3b84f6;
		color: #fff;
		font-family: arial;      
		box-shadow: inset 0 0 15px rgba(0,0,0,.4);
		border-radius: 5px;
		position: absolute;
		left: 10px;
		top: 10px;
}

#cal-icon-header {
		background: rgba(33,85,174, 0.9);
		border-bottom: 4px solid #A1C4FF;
		padding: 6px 0 4px;
		font-size: 11px;
		font-weight: bold;
		border-radius: 5px;
		/*box-shadow:0px 2px 6px rgba(0,0,0,.2)*/
}    

#cal-icon-month-day {
		font-size: 62px;
		margin-top: -5px;
}    
#cal-icon-week-day {
		font-weight: bold;
		font-size: 14px;
		margin-top: -9px;
}


/*
 Notes editor
*/

 #qnote {
	height:50%;
}

	/*
#qnote {

	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(1, #FDFDCB), color-stop(0.5, #FCF9A1) );
	color:#222;
	font-family: "Comic Sans", "Comic Sans MS", cursive;

}

#qnote .box-text {
	font-size:18px !important;
}

	*/
#qnote-title, #qnote-text { cursor:text; }


#qnote-editor {
	position: absolute;
	right:30px;
	top:15px;
	opacity:0;
	-webkit-transition:opacity .10s ease-out;
}

#qnote-editor img {
	background: white;
	border-radius: 8px;
	margin: 0 0 -6px 10px;
	width: 24px;
	height: 24px;
	padding: 5px;
	cursor:pointer;
	/*box-shadow: 0 0 10px #333;
	border: 1px solid #CCC;*/
	-webkit-transition:background-color .10s, -webkit-transform .15s;
	border: 1px solid #CCC; 
}
#qnote-editor img:hover {
	-webkit-transform:scale(1.1);
	background-color: #eee;
}


#qnote-editor img:active {
	background: #ddd;
	-webkit-transform:scale(0.8);
}


/*
 Left toolbar buttons
*/

#info-button {
	font-family: lucida grande, serif;
	font-weight: bold;
	position: absolute;
	left: 15px;
	/*background-color: rgba(100, 50, 50, .8);*/
	color: #eee;
	width: 29px;
	line-height: 29px;
	font-size: 24px;
	border-radius: 16px;
	text-align: center;
	border: 2px solid #ccc;
	cursor: pointer;
	text-decoration: none;
	margin-top: 36px;
	-webkit-transition: color .5s, border .5s;
	z-index:10;
}

#review-button {
	position: absolute;
	left: 15px;	
	margin-top:81px;
	color:#eee;
	font-size: 36px;
	text-decoration: none;
	-webkit-transition: color 1s, -webkit-transform .5s;

	background: url(../icons/reviews.png);
	background-size: 32px 32px;
	width: 32px;
	height: 32px;
	z-index:10;
}

#focus-button {
	position: absolute;
	left: 17px;
  color: #eee;
  -webkit-transition: color 1s, -webkit-transform .5s, background .8s;
  width:30px;
  height:30px;
  border-radius: 100%;
  box-sizing: border-box;
  padding: 4px;
  border: 3px solid #eee;
  z-index:10;
  /*margin-top: 173px;*/
  bottom:65px;
}


#focus-button-fish-eye {
	width: 100%;
	height: 100%;
	background: #eee;
	border-radius: 100%;
}

#info-button:hover {
	color:#ffde00;
	border-color:rgba(255,255,255,.2);
}
#review-button:hover {
	-webkit-transform: scale(1.65) translateZ(0);
	background-image: url(../icons/reviews_hover.png);
	color:#ffde00;
}
#focus-button:hover {
	-webkit-transform: scale(0.80) translateZ(0);
	background: #ffde00; /* golden: #F9B71F */
	border-color: #ffde00;
	color:transparent;
}
#focus-button:hover #focus-button-fish-eye {
	background: #ffde00;
}

#settings-button {
	background: url(../icons/settings.png);
	background-size:32px 32px;
	position: absolute;
	left: 16px;	
	margin-top:126px;
	width:32px;
	height: 32px;
	-webkit-transition: -webkit-transform 1s;
	z-index:10;
}
#settings-button:hover {
	background-image: url(../icons/settings_hover.png);
	-webkit-transform: rotate(180deg) translateZ(0);
}

.toolbar-button-label {
	position: absolute;
	height: 1em;
	font-size: 17px;
	color: #f1f1f1;
	background: rgba(0,0,0,.6);
	border-radius: 8px;
	z-index: 100;
	text-shadow: 2px 2px #333;
	border: 1px solid rgba(255,255,255,.15);
	padding: 6px 22px;
	line-height: 1em;
	-webkit-transition: opacity 0.6s;
}

#background-button {
	background: url(../icons/background.png);
	background-size:32px 32px;
	position: absolute;
	left: 16px;
	bottom:16px;
	/*margin-top: 170px;*/
	width: 32px;
	height: 32px;
	-webkit-transition: background-image .15s, -webkit-transform .15s;
	cursor: pointer;
	z-index:10;
}

#background-button:hover {
	background-image: url(../icons/background_hover.png);
	-webkit-transition: background-image .5s , -webkit-transform .3s cubic-bezier(.87,-.41,.19,1.44);
	-webkit-transform: scale(1.65) translateZ(0);
}

#background-button:active {
	-webkit-transition: background-image .15s, -webkit-transform .15s;
	-webkit-transform: none;
}

#left-toolbar {
	height: 100%;
	width: 66px;
	left: 0;
	position: fixed;
	z-index: 0;
	top: 0;

}
#left-toolbar-gradient {
	height: 100%;
	width: 100%;
	position: absolute;
	z-index: 0;
	top: 0;
	left: 0;
	opacity:0;
	-webkit-transition: opacity 1s;
	background-image: linear-gradient(to right,
		rgba(0,0,0,0.35) 0%, rgba(0,0,0,0) 100%);
	/* left-toolbar width:66
	background-image: linear-gradient(to right, 
		rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 65%, rgba(0,0,0,0.5) 95%, rgba(0,0,0,0) 100%);*/
}

#left-toolbar:hover #left-toolbar-gradient {
	opacity:1;
}


/*
 Weather
*/

@font-face {
    font-family: MeteoconsRegular;
    src: url(fonst/meteocons-webfont.eot);
    src: url(fonts/meteocons-webfont.eot?#iefix) format('embedded-opentype'), url(fonts/meteocons-webfont.woff) format('woff'), url(fonts/meteocons-webfont.ttf) format('truetype'), url(fonts/meteocons-webfont.svg#MeteoconsRegular) format('svg');
    font-weight: 400
}

/*
text-shadow: 0 1px 5px rgba(0,0,0,.1);
*/

.weather {
    position: relative
}
.weather .location {
    outline: 0
}
.metric-stat .icon {
    display: block; 
   	margin:0 auto;
}
.weather .icon:before {
    font-family: MeteoconsRegular;
    content: attr(data-icon);
    font-size: 140%;
}
.weather .degree:not(:empty):after {
 content: "\00B0" /* Â° */
}
.weather .degree-before:not(:empty):before {
 content: "\00B0" /* Â° */
}

.weather .degree {
    font-weight:bold
}
.metric {
		z-index: 100;
    /*margin: 14px 20px 0 0;
    text-align: right;*/
    display: inline-block;
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px;
    border-radius: 0 0 0 8px;

    /*background-color: rgba(0,0,0,.3); */

    -webkit-transition:background-color .5s;
    cursor: default;
    -webkit-user-select: none;
}
.metric.left {
	left:4px;
	bottom:108px;
	top:auto;
	right: auto;
	border-radius: 8px;
	padding: 6px;
}
.metric.left .degree {
	display:block;
	text-align: center;
}

.weather:hover {
	background-color: rgba(0,0,0,.5); 
}
.metric-stat {
    display: block;
    margin-left: 6px;
    font-size: 26px;
    text-align: center;
}
.metric-stat .icon, .metric-stat .degree:after, .weather-stat-col .degree:after {
	color: rgba(255, 255, 255, 0.7);
}

.metric-stat .icon {
	color:#fff;
}

.metric-stat .icon.svg {
	min-width:40px; 
	min-height:40px; 
	background-size: 40px; 
	vertical-align: top;
  background-repeat: no-repeat; 
  background-position: center center;
  position: relative;
  /*margin-left:-4px;*/
}
#left-toolbar .metric-stat .icon.svg {
	left:-4px;
}

.metric-stat .percip-prob {
	position: absolute;
	top: 0;
	right: -4px;
	font-size: 12px;
	/* color #a5d6ff; */
}




/* forecast */

#weather-forecast {
	background: rgba(0,0,0,.9);
	left: 62px;
	margin-bottom: -38px;
	padding: 0 12px 16px;
	-webkit-transition:opacity .4s;
	border: 1px solid rgba(255,255,255,.1);
	/*box-shadow: 0 1px 13px rgba(0, 0, 0, 0.8);*/
}
.focus #weather-forecast {
	background: rgba(0,0,0,.7);
}
#weather-forecast-header {
    text-align: center;
    padding: 15px;
}
#weather-forecast-city {
	  font-size: 20px;
    font-weight: normal;
    color: rgba(255,255,255,.5);
    /*
    font-size: 30px;
    font-weight: bold;
    color: rgba(255,255,255,.90);
    */
    /* font-weight: 300; font-size: 16px; */
    /*color: #F9B71F;*/ /* golden for day? */
    /*color:#a5d6ff; */ /* cold blue for night? */
}


#weather-forecast-city.accurate {
    font-weight: 500;
    color: rgba(255,255,255,.85);
}

#weather-forecast .metric-stat {
	float:left;
	margin: 0 15px;
	width: 48px;
}
.degree.low {
	color:#a5d6ff;
	font-size: 80%;
}

#weather-forecast .degree {
    left:2.5px;
    position: relative;
}

#weather-unit-option {
   position: absolute;
    /*left: 24px;*/
    font-size: 18px;
    display: table-cell;
    vertical-align: middle;
    top: 18px;
    right: 26px;
    color:#fff;
    opacity: 0.5;
    cursor: pointer;
    text-transform: uppercase;
}
#weather-unit-option:hover { opacity:1; }

.weather-stat-col {
	display: inline-block;
	width:78px;
	margin:8px 0px 6px;
	padding-bottom:14px;
	text-align: center;
	border-bottom: 2px solid rgba(128,128,128,.15);
}

.weather-stat-title {
	font-size: 18px;	color:rgba(255,255,255,.7);
}

.weather-stat-val {
	font-size: 26px;
}

.weather-stat-unit {
	font-size: 16px;
	color:rgba(255,255,255,.7);
}

#weather-forecast-help {
	position: absolute;
	left:0;
	right: 0;
	top: -5px;
	padding:20px;
	box-sizing: border-box;;
	-webkit-transform:translateY(-100%);
	background: rgba(0,0,0,.95);
	font-size: 14px;
	border-radius: 8px;
}

#weather-forecast-help a { color: #F9B71F; font-weight: bold; }

.location-icon {
	width: 20px;
	height: 20px;
	background-size: 20px;
	position: absolute;
	/*right: 14px;*/
	left: 26px;
  top: 18px;
  opacity: .8;
  cursor:pointer;
  background-image: url(../icons/location.svg);
  display: none;
}
.location-icon:hover {
  opacity: 1.0 !important;
}

.location-icon.disabled {
	display: block;
	opacity: .5;
	background-image: url(../icons/location_disabled.svg);
}

/*
 Bookmarks
*/

#bookmarks-bar {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	height:40px;
	background:#f1f1f1;
	-webkit-transition: top .3s;
	border-bottom: 1px solid #ccc;
	box-shadow: 0 10px 20px rgba(0,0,0,.2);
	z-index: 10000;
	display: none;
}

.bookmark img {
	top: 3px;
	position: relative;
	margin-right: 7px;
}

.bookmark {
	text-decoration: none;
	color: #000;
	display: inline-block;
	padding: 4px 6px 7px;
	font-size: 13px;
	margin:5px 0 0 4px;
	border:1px solid transparent;
}

.bookmark:hover {
	background: #ddd;
	border-radius: 3px;
	border-color: #cfcfcf;
}

.bookmark:active {
	background: #ccc;
	border-color: #999;
}


/*
 Search box
*/

/* cursor: https://jsbin.com/befuhebeya/1/edit; */ 

#search-box {
  -webkit-transition: left .2s ease-in-out, right .2s ease-in-out;

  background: transparent;
  height: 24px;
  padding: 2px; /*1px*/
  margin: 0px 15px 0;
  position: relative;
  top: 8px; /*6*/
  z-index: 1000;
  width: 55%;
  margin: 0 auto;
  display:none;
}

.show-search #search-box {
	display:block !important;
}

.show-search #apps-slider {
	padding-top: 54px;
}

#search-input-bg {
	position: absolute;
	top: 0;
	height: 34px;
	width: 100%;
	background: #fff;
	z-index: -1;
	background: rgba(255,255,255,.98);
	border-radius: 2px;
}
#search-input-bg.hover {
	background: #fff;
}
#search-input-bg.active {
	background: #fff;
}

#search-box input {
  font-size: 16px;
  /*font-family: arial, helvetica, sans-serif; */

  width:100%;
  outline: none;
  background-clip: padding-box;
  border: 2px solid rgb(205, 205, 205);
  border-color: rgba(0, 0, 0, 0.15);
  height: 34px; /*30*/
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  line-height: 34px;

  /**/
  font-size: 17px;/*bigger 20*/
  padding: 2px 75px 2px 9px;
  background: transparent;
  /*border: 1px solid #fff;*/
  border-radius: 2px;

  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
}

/*#search-box input.navigating {
	font-weight: 500 !important;
}*/

#search-box input:focus, 
#search-box input:active {
  /*border-color: rgb(66, 133, 244);*/
}
#search-box.mac input:focus, 
#search-box.mac input:active {
	border-color: rgb(255,255,255);
  border-bottom-color: rgb(225,225,225);
  border-color: rgb(225,225,225);
}
#search-box input:hover {

}

#search-box input::-webkit-input-placeholder {
	color: #999;
	text-shadow:none !important;
	/*color: #aaa;
	font-weight:500;*/
}

#bar-buttons {
  position: absolute;
  top: 3px;   /*2px;*/
  right: 3px; /*2px;*/
}

#search-button {
  float: right;
  margin-left: 1px;
  cursor: pointer;
}

.button {
  display: inline-block;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  color: #444;

  border: 1px solid #dcdcdc;
  border-radius: 2px;

  cursor: default;
  font-size: 13px;
  font-weight: bold;
  text-align: center;
  height: 26px;
  line-height: 26px;
  min-width: 54px;
  padding: 0 8px;
  text-decoration: none;
}

.button:hover {
  background-color: #F8F8F8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);

  border: 1px solid #C6C6C6;
  color: #333;

  -webkit-box-shadow: 0px 1px 1px rgba(0,0,0,.1);
  box-shadow: 0px 1px 1px rgba(0,0,0,.1);
}

/* blue */

.button.blue {
  background-color: #4D90FE;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);

  border: 1px solid #3079ED;
  color: white;
}

.button.blue:hover {
  border: 1px solid #2F5BB7;

  background-color: #357AE8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);

  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.1);
  box-shadow: 0 1px 1px rgba(0,0,0,.1);
}

.button.blue:active {
	border: 1px solid #183B82;
	background-color: #2964C3;
	background-image: none;
}


/* search suggestions */

ul#suggestions  {
  background: rgba(255,255,255,.98);
  width: 100%;
  list-style-type: none;
  text-align: left;
  /*border: 2px solid #d0d0d0;/*ddd*/
  border-top:0;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.30);/*.25*/
  /*   box-shadow: 0 2px 4px rgba(0,0,0,0.2); */
  /*border-radius: 0 0 3px 3px;*/
  border-radius: 0 0 6px 6px;
  font-size: 17px;
  /*font-family: arial, helvetica, sans-serif; */
  z-index:100; 
  color:#222;
  padding-bottom: 3px;
  padding-top: 3px;

  box-sizing:border-box;
  position:absolute;
  /*background:rgba(250,250,250,.98);*/
  background:linear-gradient(to bottom, rgba(255,255,255,.98) 25%,rgba(228,228,228,.98) 100%) 
}


#suggestions li {
	padding: 5px 9px; 
	cursor:default;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden; 
}

#suggestions li:hover {
	background:#ddd !important;
	color:#222 !important;
}

#suggestions li.active, #suggestions li:active, #suggestions li.active:hover { 
	background:#4081EA !important;
	color:#fff !important;
}

#suggestions li.top-hit {
	border-top: 2px solid #eee;
	border-bottom: 2px solid #eee;
	background-color: #f1f1f1;
	position: relative;
}
#suggestions li.top-hit span {
	color: #888;
}
#suggestions li.top-hit b {
	font-weight:500; 
}
#suggestions li.top-hit.active span {
	color:#ccc;
}
/*#suggestions li.top-hit span:after { content: "Top Hit"; }*/

@-webkit-keyframes fadein { from { opacity: 0 } to { opacity: 1 } }
@-webkit-keyframes fadeout { from { opacity: 1 } to { opacity: 0 } }

#search-results {
	z-index:99; 
	background: #fff; /*rgba(255,255,255,.98);*/
	width:100%;
	border-radius: 0 0 3px 3px;
	border: 2px solid #CCC;
	border-top:0;
	box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
	box-sizing:border-box;
	height:900px;
	max-width: 700px;
	-webkit-animation: fadein 0.5s ease 0s forwards;
	border-radius: 0px 0px 5px 5px;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 5px;
}
#search-results.overlay-cover {
	border: 0px; 
	margin: 0px; 
	padding: 0px; 
	border-radius: 0px;
	box-shadow:  none;
	max-width: initial;
	-webkit-animation: none;
	height: 100%;
}

/* full-screen search */

.search-fullscreen #search-box {
	padding: 6px;
	background: #eee;
	width: 100%;
	box-sizing: border-box;
	top: 0;
	border-bottom: 1px solid #ddd;
	height: auto;
}

.search-fullscreen #search-form {
	width: 50%;
	margin-left: 120px;
}

.search-fullscreen #search-box input {
	box-shadow: none;
	border-width: 1px;
}

.search-fullscreen #search-box input:hover {
	border: 1px solid #b9b9b9;
  border-top-color: #a0a0a0;
}

.search-fullscreen #search-box input.focus {
	border: 1px solid #4d90fe;
}

.search-fullscreen #bar-buttons { top:0; right:0; }

.search-fullscreen #search-button { 
		height: 100%;
    	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4IiB3aWR0aD0iNDgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTMxIDI4aC0xLjU5bC0uNTUtLjU1YzEuOTYtMi4yNyAzLjE0LTUuMjIgMy4xNC04LjQ1IDAtNy4xOC01LjgyLTEzLTEzLTEzcy0xMyA1LjgyLTEzIDEzIDUuODIgMTMgMTMgMTNjMy4yMyAwIDYuMTgtMS4xOCA4LjQ1LTMuMTNsLjU1LjU1djEuNThsMTAgOS45OCAyLjk4LTIuOTgtOS45OC0xMHptLTEyIDBjLTQuOTcgMC05LTQuMDMtOS05czQuMDMtOSA5LTkgOSA0LjAzIDkgOS00LjAzIDktOSA5eiIvPjxwYXRoIGQ9Ik0wIDBoNDh2NDhoLTQ4eiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==);
    background-repeat: no-repeat;
    background-size: 24px;
    background-position: center center;
    text-indent: -9999px;
    padding: 4px 0;
    border:0;
    min-width: 40px;
    cursor:default;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
 }

.search-fullscreen #suggestions {
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.20);
	background: rgba(255,255,255,.98);
	border-radius: 0;
}

.search-fullscreen #suggestions li:hover {
	background: #eee !important;
}

.search-fullscreen #suggestions li.active, 
.search-fullscreen #suggestions li:active, 
.search-fullscreen #suggestions li.active:hover { 
	background:#4081EA !important;
}

#loading {
	width: 64px;
	height: 64px;
	position:fixed;
	z-index:1000;
}

/* silver suggest */

#silver-suggest {
  position: absolute;
  left: 87px;
  top: 10px;
  font-size: 17px;
  z-index: -1;
  color: silver;  
  line-height: normal;

  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  right: 88px;
  box-sizing: border-box;
  line-height: 34px;

  /*font-weight:500; */
}

#silver-suggest span {
	/*color: transparent;*/
	padding: 4px 0;
}
.mac #silver-suggest span {
	/*color: transparent;*/
	padding: 1px 0;
}
#silver-match {
	visibility: hidden;
}
#silver-rest {
	background-color: #4081EA;
	color: #fff;
	/*padding: 3px 0px; arial*/
	/*
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	max-width: 70%;
	display: inline-block;
	*/
}

#silver-title {
	/*padding: 3px 0px; arial*/
	padding-right: 6px !important;
	/**/
	background-color: #4081EA;
	color: #C5DBFF;
}

#silver-title:empty {
	display: none;
}

.mac #silver-rest {
	background-color: #B5D5FD;
	color: #000;/*333*/
	font-weight:500;
}

.mac #silver-title {
	color:#3772D7;
	background-color: #B5D5FD;
}

#suggestions li .title {
	color: #777;
	padding-left: 0.25em;
}

/* Show urls as I type */
#show-more {
	position: absolute;
	left: -217px;
	background-color: red;
	top: 0;
	font-size: 20px;
	line-height: 32px;
	padding: 0 10px;
	border: 2px solid rgb(196, 0, 0);
	font-weight: 500;
	cursor: pointer;
}

#search-indexing {
	position: absolute;
	right: -190px;
	top: 0;
	font-size: 20px;
	line-height: 32px;
	padding: 1px 14px;
	cursor: default;
	background: rgba(0,0,0,.6);
	border-radius: 5px;
	border: 1px solid rgba(255,255,255,.1);
	color: #bbb;
}

/*
 Panels
*/

#new-app-panel {
  	position: fixed;
  	right: 0;
	  top: 0;
	  display: block;
	  border: 0;
	  height: 100%;
	  width: 540px;
	  z-index: 1000;
	  box-shadow: -10px 0 50px rgba(0,0,0,.4);
	  border-left: 10px solid rgba(0,0,0,.05);
	  box-sizing: border-box;
	  background-color: rgba(237, 237, 237, 0.95);

	  transition:-webkit-transform .3s ease-in-out;
	  box-sizing: initial;
	  padding-right: 50px;
	  right: -50px;
	  -webkit-animation-name: elastic-snap-to-point-from-right;
	  -webkit-animation-duration: .8s;
	  -webkit-animation-play-state: running; 
}

#new-app-panel.hidden {
	-webkit-animation-play-state: paused;
	transform:translate(110%,0);
}



@-webkit-keyframes elastic-snap-to-point-from-right {
	0% { -webkit-transform:translate(110.00000000000001%,0%) translateZ(0) }
	30% { -webkit-transform:translate(-2.571428571428564%,0%) translateZ(0) }
	35% { -webkit-transform:translate(-2.295238095238097%,0%) translateZ(0) }
	40% { -webkit-transform:translate(0%,0%) translateZ(0) }
	45% { -webkit-transform:translate(1.2571428571428577%,0%) translateZ(0) }
	50% { -webkit-transform:translate(1.2190476190476199%,0%) translateZ(0) }
	55% { -webkit-transform:translate(0%,0%) translateZ(0) }
	60% { -webkit-transform:translate(-0.7509523809524043%,0%) translateZ(0) }
	65% { -webkit-transform:translate(-0.51904761904763%,0%) translateZ(0) }
	70% { -webkit-transform:translate(0%,0%) translateZ(0) }
	75% { -webkit-transform:translate(0.459523809523815%,0%) translateZ(0) }
	80% { -webkit-transform:translate(0.2547619047618964%,0%) translateZ(0) }
	85% { -webkit-transform:translate(0%,0%) translateZ(0) }
	90% { -webkit-transform:translate(-0.2723809523809593%,0%) translateZ(0) }
	95% { -webkit-transform:translate(-0.1623809523809593%,0%) translateZ(0) }
	100% { -webkit-transform:translate(0%,0%) translateZ(0) }
}

@-webkit-keyframes elastic-snap-to-point-from-bottom {
	0% { -webkit-transform:translate(0%,110.00000000000001%) translateZ(0) }
	30% { -webkit-transform:translate(0%,-2.571428571428564%) translateZ(0) }
	35% { -webkit-transform:translate(0%,-2.295238095238097%) translateZ(0) }
	40% { -webkit-transform:translate(0%,0%) translateZ(0) }
	45% { -webkit-transform:translate(0%,1.2571428571428577%) translateZ(0) }
	50% { -webkit-transform:translate(0%,1.2190476190476199%) translateZ(0) }
	55% { -webkit-transform:translate(0%,0%) translateZ(0) }
	60% { -webkit-transform:translate(0%,-0.7509523809524043%) translateZ(0) }
	65% { -webkit-transform:translate(0%,-0.51904761904763%) translateZ(0) }
	70% { -webkit-transform:translate(0%,0%) translateZ(0) }
	75% { -webkit-transform:translate(0%,0.459523809523815%) translateZ(0) }
	80% { -webkit-transform:translate(0%,0.2547619047618964%) translateZ(0) }
	85% { -webkit-transform:translate(0%,0%) translateZ(0) }
	90% { -webkit-transform:translate(0%,-0.2723809523809593%) translateZ(0) }
	95% { -webkit-transform:translate(0%,-0.1623809523809593%) translateZ(0) }
	100% { -webkit-transform:translate(0%,0%) translateZ(0) }
}


#background-setting-panel {
  	position: fixed;
  	bottom: 0;
	  left: 0;
	  display: block;
	  border: 0;
	  width: 100%;
	  height: 240px;
	  z-index: 1000;
	  box-shadow: -10px 0 50px rgba(0,0,0,.4);
	  /* background-color: rgba(255,255,255,.98); */
	  /*border-top: 10px solid rgba(0,0,0,.05);*/
	  /* border: 10px solid rgba(0,0,0,.05); */
	  border-top: 5px solid rgba(255,255,255,.05);
	  background-color: rgba(30, 30, 30, 0.95);
	  transition:-webkit-transform .3s ease-in-out;

	  box-sizing: initial;
	  padding-bottom: 50px;
	  bottom: -50px;
	  -webkit-animation-name: elastic-snap-to-point-from-bottom;
	  -webkit-animation-duration: .90s;
	  -webkit-animation-play-state: running; 
}

#background-setting-panel.hidden {
	transform:translate(0,110%);
	-webkit-animation-play-state: paused; 
}

/*
 Clean look
*/

html.hidden-notifications.hidden-notes	#apps-wrapper {
	right: 50%;
	transform: translateX(50%);
	width: auto;
}

html.focus #boxes, html.focus #apps-wrapper, html.focus #add-app-button {
	display:none;
}

html.focus #datetime {
	position: fixed;
	top: 50%;
	left: 50%;
	bottom: auto;
	right: auto;
	transform: translate(-50%, -50%);
	text-shadow: 0 1px 5px rgba(0,0,0,.1);
	zoom: 1.35;
	font-weight: bold;
	color: rgba(255,255,255,.95);
}

html.focus #date {
	text-align: center;
}
html.focus #datetime {
	text-align: center;
}
html.focus #upcoming-event {
	display:none;
}


/*
 Shimmer
*/

.shimmer {
  text-align: center;
  color: rgba(255,255,255,0.1);
  background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  -webkit-background-size: 125px 100%;
  background-size: 125px 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-animation-name: shimmer;
  animation-name: shimmer;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: #222;
}

.shimmer {
  font-weight: 300;
  font-size: 3em;
  margin: 0 auto;
  padding: 0 140px 0 0;
  display: inline;
  margin-bottom: 0;
}

@-webkit-keyframes shimmer {
  0% { background-position: top left; }
  100% { background-position: top right; } }
@-keyframes shimmer {
  0% { background-position: top left; }
  100% { background-position: top right; } }

/*
 Different Resolutions
*/

@media only screen and (max-height: 1000px) {
	#search-results { height:800px; }
	#background-setting-panel { height:200px; }
}
@media only screen and (max-height: 900px) {
	#search-results { height:700px; }
	#background-setting-panel { height:190px; }
}
@media only screen and (max-height: 800px) {
	#background-setting-panel { height:180px }
}
@media only screen and (max-height: 750px) {
	#search-results { height:650px; }
}
@media only screen and (max-height: 700px) {
	#search-results { height:500px; }
	#background-setting-panel { height:160px }
}

@media only screen and (max-width: 1460px) {
	#apps-wrapper	{ right:4%; }
	#boxes { left: 5%; }
}


@media only screen and (max-width: 1550px) {
	#add-app-button { right: 1%; zoom:1.25; }
}


@media only screen and (max-width: 1440px) {

/*#apps-slider { padding-top:14px; }*/

a#recently-closed-button {
		right:3%;
		padding: 6px 14px;
}

#recently-closed a {
	width: 500px;
	font-size: 16px;
}

.scrollable {
	height: 75%;
}

#time {
	line-height: 110px;
}


#apps-dots {
	top:785px;
}

#new-app-panel {
	width: 440px;
}

}

@media only screen and (max-width: 1400px) {
	#add-app-button { right: 10px; zoom:1; }
}

@media only screen and (max-width: 1366px) {

/*search bar only*/
.box {
	margin: 10px 0;
}

#search-box {
	width: 65%;
}
/*search bar only*/

/*#apps-slider { padding-top:26px; }*/

#boxes {
	width:37%;
}

#apps-wrapper {
	width:54%;
}

#apps {
	width: 680px; /* old one = (116 + 2 * 10) * 5; */
	/*
	width: 700px;
	height: 590px;
	*/
}

.test-item {
	width: 116px; /* old one: 116; */
	position:absolute;
	/*background-color:transparent;*/
}

.test-item img  {
	width:  76px;
	height: 76px;
}

.test-item img.bordered  {
	width:  66px;
	height: 66px;
	margin: 5px;
}

.test-item img.bordered.circle  {
	width:  68px;
	height: 68px;
	margin: 4px;
}

.test-item-text {
	font-size: 14px;
	padding: 5px 5px;
	/*color: #F1F1F1;*/
}

.indicator {
	border-radius: 17px;
	height: 34px;
	min-width: 34px;
	padding: 6px;
	font-size: 22px;
	line-height: 22px;
}

#datetime {
	bottom: 4%; /*before search bar: 6%;*/
}

#date {
	font-size:37px; /*37*/
	line-height:43px;
}

#time {
	font-size:80px; /*90*/ /*before search bar*/
	line-height:100px;
}

#upcoming-event {
    font-size: 16px;
    margin-left:15px;
}

a#recently-closed-button {
	right:6.5%;
}

#recently-closed a {
	width: 430px;
	font-size: 13px;
}

.box-text {
	font-size:15px;
}

.box-h1 {
	font-size: 26px;
}

#notifications-box {
	height:70%;
}
#qnote {
	height:55%;
}


#apps-dots {
	top:580px;
}


/*
 Calendar icon widget
*/
#cal-icon {
	width: 116px;
	height: 79px;
}

#cal-icon-content {
	width: 78px;
  height: 70px;
  left: 22px;
  top: 5px;
}

#cal-icon-header {
	padding: 2px 0 2px;
	font-size: 10px;
}    

#cal-icon-month-day {
	font-size: 33px;
	margin-top: -1px;
}    
#cal-icon-week-day {
	font-size: 11px;
	margin-top: -5px;
	font-weight: 500;
}


}

@media only screen and (max-width: 1280px) {


a#recently-closed-button {
	right:3%;
}

.box-h1 {
	font-size: 24px;
	margin-bottom:0;
}

#recently-closed a {
	width: 430px;
	font-size: 13px;
}

}

/* color ideas: */
/* golden: #F9B71F */
  </style>
</head>
<body>
<body style="opacity: 1; transition: opacity 0.5s;">
<!--
<img src="filesystem:chrome-extension://ehhkfhegcenpfoanmgfpfhnmdmflkbgk/persistent/background.jpg" style="display:none"/>
-->
<div id="page" style="background-image: url(&quot;../img/backgrounds/34.jpg&quot;); background-size: 100% 100%;">
<div id="page-gradient">
  <div id="apps-wrapper">
    <div id="apps-slider">
      <div id="apps-pages-list"><div class="test-item" id="webstore" data-url="https://chrome.google.com/webstore/category/popular" style="left: 0px; top: 0px;"><div class="test-item-launcher"><img src="chrome://extension-icon/ahfgeienlihckogmohjhadlkjgocpleb/128/0"></div><div class="test-item-text">Install apps</div></div><div class="test-item" id="pjkljhegncpnkpknbcohdijeoejaedia" data-url="https://mail.google.com/mail/ca" style="left: 148px; top: 0px;"><div class="indicator" id="indicator-gmail" style="display:block">4151</div><div class="test-item-launcher"><img src="chrome://extension-icon/pjkljhegncpnkpknbcohdijeoejaedia/128/0"></div><div class="test-item-text">Gmail</div></div><div class="test-item" id="contacts" data-url="https://www.google.com/contacts/#contacts" style="left: 296px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="icons/app/contacts-128.png"></div><div class="test-item-text">Contacts</div></div><div class="test-item" id="felcaaldnbdncclmgdcncolpebgiejap" data-url="chrome-extension://felcaaldnbdncclmgdcncolpebgiejap/main.html" style="left: 444px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/felcaaldnbdncclmgdcncolpebgiejap/128/0"></div><div class="test-item-text">Sheets</div></div><div class="test-item" id="aapocclcgogkmnckokdopfmhonfmgoek" data-url="chrome-extension://aapocclcgogkmnckokdopfmhonfmgoek/main.html" style="left: 592px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/aapocclcgogkmnckokdopfmhonfmgoek/128/0"></div><div class="test-item-text">Slides</div></div><div class="test-item" id="aohghmighlieiainnegkcijnfilokake" data-url="chrome-extension://aohghmighlieiainnegkcijnfilokake/main.html" style="left: 0px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/aohghmighlieiainnegkcijnfilokake/128/0"></div><div class="test-item-text">Docs</div></div><div class="test-item" id="dfedpnjhhpjkdbelmdhcgjjcoimgcdcb" data-url="https://codepen.io/" style="left: 148px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/dfedpnjhhpjkdbelmdhcgjjcoimgcdcb/128/0"></div><div class="test-item-text">CodePen</div></div><div class="test-item" id="user_app_0" data-url="https://github.com" style="left: 296px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="filesystem:chrome-extension://ehhkfhegcenpfoanmgfpfhnmdmflkbgk/persistent/xoq27rvtb9x63osl5py88semiyx8wo54exier5dl8h4nm6lxr_fluidicon.png"></div><div class="test-item-text">GitHub</div></div><div class="test-item" id="nbdmccoknlfggadpfkmcpnamfnbkmkcp" data-url="https://ide.c9.io/#1page" style="left: 444px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/nbdmccoknlfggadpfkmcpnamfnbkmkcp/128/0"></div><div class="test-item-text">Cloud9</div></div><div class="test-item" id="nffchahhjecejoiigmnhhicpoabngedk" data-url="https://onedrive.live.com/" style="left: 592px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/nffchahhjecejoiigmnhhicpoabngedk/128/0"></div><div class="test-item-text">OneDrive</div></div><div class="test-item" id="apdfllckaahabafndbhieahigkjlhalf" data-url="https://drive.google.com/?usp=chrome_app" style="left: 0px; top: 364px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/apdfllckaahabafndbhieahigkjlhalf/128/0"></div><div class="test-item-text">Drive</div></div><div class="test-item" id="cimncnjihlhfmagneecomiloklpjeagl" data-url="https://qbo.intuit.com/" style="left: 148px; top: 364px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/cimncnjihlhfmagneecomiloklpjeagl/128/0"></div><div class="test-item-text">QuickBooks</div></div><div class="test-item" id="kkhabjffjaooaefhbodphgflhdnhooea" data-url="https://app.goocreate.com/" style="left: 296px; top: 364px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/kkhabjffjaooaefhbodphgflhdnhooea/128/0"></div><div class="test-item-text">Goo Create</div></div><div class="test-item" id="ckdndemedapacbnpapaickknpmojjpmn" data-url="http://www.wireframe.cc/" style="left: 444px; top: 364px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/ckdndemedapacbnpapaickknpmojjpmn/128/0"></div><div class="test-item-text">Wireframe.cc</div></div><div class="test-item" id="facdepannhjndnaaobghfgdlocbicmea" data-url="https://futuramo.com/" style="left: 592px; top: 364px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/facdepannhjndnaaobghfgdlocbicmea/128/0"></div><div class="test-item-text">FUTURAMO Ico.</div></div><div class="test-item" id="fgoeochdoiiomfedbllbobpomebkmpnf" data-url="https://login.playcanvas.com/signup" style="left: 0px; top: 546px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/fgoeochdoiiomfedbllbobpomebkmpnf/128/0"></div><div class="test-item-text">PlayCanvas</div></div><div class="test-item" id="fhbjgbiflinjbdggehcddcbncdddomop" data-url="" style="left: 148px; top: 546px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/fhbjgbiflinjbdggehcddcbncdddomop/128/0"></div><div class="test-item-text">Postman</div></div><div class="test-item" id="ggnbmkeocaahgalopiggecjodlejgfpg" data-url="" style="left: 296px; top: 546px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/ggnbmkeocaahgalopiggecjodlejgfpg/128/0"></div><div class="test-item-text">Window For W.</div></div><div class="test-item" id="hjmchndlheccnejbaamnbdmehmabemen" data-url="http://www.editey.com/" style="left: 444px; top: 546px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/hjmchndlheccnejbaamnbdmehmabemen/128/0"></div><div class="test-item-text">Editey</div></div><div class="test-item" id="ieiehnodpnflmmhfbnfppdeaefmaiobg" data-url="https://platform.telerik.com/?utm_source=web_store" style="left: 592px; top: 546px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/ieiehnodpnflmmhfbnfppdeaefmaiobg/128/0"></div><div class="test-item-text">Telerik Plat.</div></div><div class="test-item" id="kabncpcembkecekibfmamlbogjefdnae" data-url="https://webflow.com/dashboard/" style="left: 840px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/kabncpcembkecekibfmamlbogjefdnae/128/0"></div><div class="test-item-text">Webflow - We.</div></div><div class="test-item" id="blpcfgokakmgnkcojhhkbfbldkacnbeo" data-url="https://www.youtube.com/" style="left: 988px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/blpcfgokakmgnkcojhhkbfbldkacnbeo/128/0"></div><div class="test-item-text">YouTube</div></div><div class="test-item" id="mmfbcljfglbokpmkimbfghdkjmjhdgbg" data-url="" style="left: 1136px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/mmfbcljfglbokpmkimbfghdkjmjhdgbg/128/0"></div><div class="test-item-text">Text</div></div><div class="test-item" id="nenaeeaoehmlmgaaibpcnbbalgjcfdag" data-url="http://app.uxpin.com/mod/dmsLogin/GoogleRedirect" style="left: 1284px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/nenaeeaoehmlmgaaibpcnbbalgjcfdag/128/0"></div><div class="test-item-text">UXPin</div></div><div class="test-item" id="nlfbhphohgafllkjnakmdppmmkjfbnke" data-url="https://moqups.com/" style="left: 1432px; top: 0px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/nlfbhphohgafllkjnakmdppmmkjfbnke/128/0"></div><div class="test-item-text">Moqups · Moc.</div></div><div class="test-item" id="onlkggianjhjenigcpigpjehhpplldkc" data-url="https://www.draw.io/" style="left: 840px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="chrome://extension-icon/onlkggianjhjenigcpigpjehhpplldkc/128/0"></div><div class="test-item-text">draw.io Diag.</div></div><div class="test-item" id="facebook" data-url="https://www.facebook.com/" style="left: 988px; top: 182px; position: absolute;"><div class="indicator" id="indicator-facebook" style="">0</div><div class="test-item-launcher"><img src="icons/app/facebook-128.png"></div><div class="test-item-text">Facebook</div></div><div class="test-item" id="twitter" data-url="https://twitter.com/" style="left: 1136px; top: 182px; position: absolute;"><div class="test-item-launcher"><img src="icons/app/twitter-128.png"></div><div class="test-item-text">Twitter</div></div><div class="test-item" id="dmogdjmcpfaibncngoolgljgocdabhke" data-url="" style="left: 1284px; top: 182px;"><div class="test-item-launcher"><img src="chrome://extension-icon/dmogdjmcpfaibncngoolgljgocdabhke/128/0"></div><div class="test-item-text">Dark WebSock.</div></div></div>
      <div id="apps-dots"><span class="active-dot"></span><span></span></div>
     </div>
  </div>

  <div id="search-box" class="mac" style="display:none">
    <form id="search-form" name="search-form" style="position: relative; padding: 0px;">
      <input type="text" name="p" autocomplete="off" placeholder="Search Google or type URL" spellcheck="false" id="search-input" autofocus="" style="color: transparent; text-shadow: rgb(0, 0, 0) 0px 0px 0px;">
      <div id="search-input-bg"></div>
      <div id="bar-buttons">
        <div id="search-button" class="button blue">Search</div>
      </div>
    <ul id="suggestions" style="visibility: hidden;"></ul><div id="silver-suggest" style="top: 0px; left: 11px;"></div></form>
    <div id="search-results-wrap" style="display:none">
      <iframe id="search-results" src="about:blank"></iframe>
    </div>
  </div>

  <div id="boxes">
    <div class="box" id="notifications-box">
      <div class="box-h1 bold">Notifications</div>
      <button id="clear-notifications">clear</button>
      <div class="scrollable" id="notifications"></div>
    </div>
    <div class="box" id="qnote">
      <div class="box-h1 bold" contenteditable="true" spellcheck="false" id="qnote-title">Quick Notes</div>
      <div id="qnote-editor">
        <img src="icons/editor/undo.png" data-cmd="undo">
        <img src="icons/editor/redo.png" data-cmd="redo">
        <img src="icons/editor/bold.png" data-cmd="bold">
        <img src="icons/editor/italics.png" data-cmd="italic">
      </div>
      <div class="box-text scrollable" contenteditable="true" spellcheck="false" id="qnote-text">
        <div><b>Click to edit</b> <i>&amp;</i> <b>add your own notes</b><i>!</i></div>
        <div>1<b>)</b> Something to do</div>
        <div>2<b>)</b> Somewhere to go</div>
        <div>3<b>)</b> Something to remember</div>
        <div>4<b>)</b> Someone to meet</div>
        <div>5<b>)</b> And so on <b>...</b></div>
      </div>
    </div>
  </div>

  <div id="datetime">
    <div id="time" title="Click to change format">13:43</div>
    <a id="upcoming-event" title="Click to see event" target="_blank"></a>
    <div id="date">Tuesday, July 26</div>
  </div>

  <a id="add-app-button">+</a>
  <a id="recently-closed-button">recently closed</a>
  <div id="recently-closed"></div>

  <div id="drop-target-wrapper">
    <div id="drop-target">Drop here to remove</div>
  </div>

<div id="left-toolbar">
  <div id="left-toolbar-gradient"></div>
  <a id="info-button" title="Help" href="https://chrome.google.com/webstore/detail/ehhkfhegcenpfoanmgfpfhnmdmflkbgk/support" target="_blank">i</a>
  <a id="review-button" title="Review" href="https://chrome.google.com/webstore/detail/ehhkfhegcenpfoanmgfpfhnmdmflkbgk/reviews" target="_blank"></a>
  <a id="settings-button" title="Settings" href="options.html" target="_blank"></a>
  <!-- ◉◎○● --> 
  <a id="focus-button" data-title="Focus"><div id="focus-button-fish-eye"></div></a>  
  <a id="background-button" data-title="Beautiful Backgrounds"></a>
  <div id="weather" class="metric weather left">
    <div class="metric-stat">
      <span class="icon svg" style="background-image: none, url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4IiB2aWV3Qm94PSIwIDAgNjQgNjQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik01Ny4zMTEsMzUuODI5Yy0wLjE3NS0yLjAwOS0wLjk0Mi0zLjczNi0yLjIyOS01LjAwNWMtMS4xOTktMS4xODQtMi41NDgtMS43MDItMy4zNTYtMS45Mg0KCWMtMC4xMTMtMS45MTYtMC44OS0zLjcyMi0yLjI1OS01LjIzM2MtMS44NjYtMi4wNjUtNC42NTEtMy4yOTYtNy40NTItMy4yOTZjLTEuNTM2LDAtMy4wOTcsMC40MzktNC41MTEsMS4yNDcNCgljLTAuMjE0LTAuMjgtMC40NDEtMC41NTUtMC42ODMtMC44MjNjLTIuNjc0LTIuOTcyLTYuNzM0LTQuNzQ0LTEwLjg2Mi00Ljc0NGMtMy44MzMsMC03LjczOCwxLjg0Ni0xMC40NDYsNC45MzcNCgljLTIuMDYsMi4zNS0zLjIwMyw1LjE0NC0zLjIzOCw3Ljg5Yy00LjkyLDAuNzY5LTguNjAyLDQuNzktOC42MDIsOS40MzhjMCw1LjIyNiwzLjI2MSw5LjcwMyw1LjkzMSw5LjcwM2w0MC4yMTUtMC4wMThsMC4zOTctMC42MDkNCgljMC4wNTItMC4wNzYsMS4xMDQtMS43MjcsMS4zMDgtMy44NzloNi42OTFsMC4zOTYtMC42MzdjMC4xLTAuMTU4LDAuOTU5LTEuNiwwLjk1OS0zLjM5OEM1OS41NywzNy45MTQsNTguNjg4LDM2LjQ5Niw1Ny4zMTEsMzUuODI5DQoJeiBNMTUuMDI2LDI5LjkzMmMtMC4zMTEtMi4zNzMsMC42MDMtNC45ODMsMi41MS03LjE1OGMyLjIwNC0yLjUxNCw1LjM1Mi00LjAxNiw4LjQyLTQuMDE2YzMuMzc2LDAsNi42ODgsMS40NCw4Ljg2MiwzLjg1Mg0KCWMxLjcxOCwxLjkwOCwyLjUyOSw0LjI0NCwyLjI4NSw2LjU5M2wtMC4wNzYsMS40NzRoMS40NzljMC42NzUsMCwzLjAwMywwLjQyLDQuODUzLDIuMjg1YzEuNDc1LDEuNDg5LDIuMjA5LDMuNTE3LDIuMTg4LDYuMDI2DQoJbC0wLjAxLDEuMzU5bDEuMTgtMC4wMDZsMC4xNjYsMC4wMzRjMS4xNTQsMC4yNDYsMS45OSwxLjI3MiwxLjk5LDIuNDQ2YzAsMS4wMDgtMC4zNDQsMS45NDUtMC41OTIsMi40ODhMOS42MDIsNDUuMzI0DQoJYy0wLjc4MSwwLTMuMjM1LTIuOTAzLTMuMjM1LTcuMDAyYzAtMy41OTYsMy4zNTYtNi43MzksNy4zMjktNi44NjdsMS41MywwLjAwM0wxNS4wMjYsMjkuOTMyeiBNMzguODgsMjMuOTM4DQoJYzAuOTk4LTAuNTYyLDIuMDgtMC44NjcsMy4xMzQtMC44NjdjMi4wNTEsMCw0LjA5MiwwLjkwMiw1LjQ1NywyLjQxYzEuMTUxLDEuMjc1LDEuNzAyLDIuODUyLDEuNTQ1LDQuNDM3bC0wLjE0OCwxLjUxNmwxLjU3OC0wLjAzNQ0KCWMwLjQzNCwwLDEuNzI1LDAuMzQsMi43NDYsMS4zNDhjMC45ODMsMC45NywxLjQ3NiwyLjMzMywxLjQ2Myw0LjA1M2wtMC4wMTQsMS4zNjNsMS4xNzYtMC4wMWwwLjA3MiwwLjAxOA0KCWMwLjU3LDAuMTI2LDAuOTg0LDAuNjgsMC45ODQsMS4zMTJjMCwwLjUwOC0wLjEyNywwLjk4Mi0wLjI2LDEuMzM0TDUxLjE1LDQwLjgyYy0wLjU0MS0xLjI4Ny0xLjU3OS0yLjMzOS0yLjkzOC0yLjg1Ng0KCWMtMC4xNzEtMi43ODctMS4xNi01LjExLTIuOTM5LTYuOTA2Yy0yLjAxLTIuMDMtNC40NTMtMi43MjItNS40MzItMi45MjlDMzkuODEyLDI2LjY3NywzOS40NzksMjUuMjY4LDM4Ljg4LDIzLjkzOHoiLz4NCjwvc3ZnPg0K&quot;);"></span><span class="degree">83</span>
    </div>
  </div>
</div>


<div id="weather-forecast" class="metric weather left" style="display:none; opacity: 0;">
     <div id="weather-forecast-help" style="display:none;">
      We only have an <i>estimate</i> of your location. 
      For accurate weather reporting 
      install <a href="https://chrome.google.com/webstore/detail/home-accurate-weather/foomlpdinaehlbhlncohiekomfdnicbj" target="_blank">Home - Accurate Weather</a>
     </div>
     <div id="weather-forecast-header">
        <div id="weather-forecast-city"></div>
        <div id="weather-unit-option" class="degree-before" title="Change °C/°F">f</div>
        <a class="location-icon disabled" title="Install Accurate Weather" href="https://chrome.google.com/webstore/detail/home-accurate-weather/foomlpdinaehlbhlncohiekomfdnicbj" target="_blank"></a>
     </div>
     <div id="weather-forecast-cond"></div>
     <div id="weather-forecast-data"></div>
</div>

<ul class="panel" style="display:none"></ul>


<!--
<div id="focus-button-old" style="
    display:none;
    position: fixed;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 24px;
    text-shadow: 0 1px 5px rgba(0,0,0,.1);
    font-weight: bo;
    color: #bbb;
    font-weight: bold;
">(<span style="
    color: #fff;
    font-weight: normal;
    /* text-shadow: 0 1px 5px rgba(0,0,0,.9); */
">focus</span>)</div>
-->

</div>
</div> <!-- end of page -->

<div id="bookmarks-bar"></div>
<div class="overlay"></div>
<div class="open-app"></div>
<div class="open-app-overlay"></div>
<div id="screenshot-overlay"></div>
<div id="mouse-move-overlay"></div>


<script src="js/logerror.js"></script>

<script src="js/main.js"></script>
<script src="js/draggable.js"></script>
<script src="js/notes.js"></script>
<script src="js/weather.js"></script>

<script src="js/search/common.js"></script>
<script src="js/search/fauxmine.js"></script>
<script src="js/search/suggest.js"></script>

<script src="panels/panels.js" async=""></script>
<script src="js/recently_closed.js" async=""></script>

<script src="js/cursor.js"></script>

<div id="search-promo" style="display:none">

<!-- <script async src="js/idle_overlay.js"></script> -->
<!--<style></style>
<img src="http://i59.tinypic.com/2mzfknn.png">-->
<div id="search-promo-text">
<div id="search-promo-desc">
    <b>Your searchbar got smarter.</b><br>
    It requires history permission.
    <!-- Needs you to enable history -->
</div>
<div id="search-promo-accept"><a href="#">Alright let's do this</a> :)</div>
<div id="search-promo-decline"><a href="#">Nope, I don't need quick urls</a></div>
</div>
</div>
<script src="js/search_promo.js" async=""></script>

<!--
<script src="js/context_menu.js"></script>
<script src="js/smoothscroll/sscr.js"></script>
-->

  
<div class="cursor" style="position: fixed; border-left-width: 2px; border-left-style: solid; border-left-color: rgb(0, 109, 254); font-size: 17px; height: 1.3em; margin-top: -0.25em; margin-left: -1px; width: 0px; z-index: 1000; left: 0px; top: 0px; visibility: hidden; display: none; transform: translate(443px, 20px);"></div><div id="INPUT--mirror-div" style="white-space: pre-wrap; position: absolute; top: 2px; left: -9999px; visibility: hidden; box-sizing: border-box; width: 1056px; height: 34px; overflow: hidden; border-width: 2px; padding: 2px 75px 2px 9px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 17px; line-height: 34px; font-family: &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; text-align: start; text-transform: none; text-indent: 0px; text-decoration: none; letter-spacing: normal; word-spacing: 0px;"><span style="background-color: lightgrey;">.</span></div></body>
</body>
</html>