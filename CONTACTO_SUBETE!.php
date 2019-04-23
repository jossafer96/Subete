<!DOCTYPE html>


<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rubik">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SUBETE!</title>
  
    <meta itemprop="name" content="SUBETE!">
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="YES">

   

    <link rel="icon" type="image/png"
        href="./SUBETE!_files/favicon.png">
    <link href="./SUBETE!_files/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./SUBETE!_files/public.css">
    <link rel="stylesheet" type="text/css" href="./SUBETE!_files/icomoon.css" media="all"
        onload="if(media!==&#39;all&#39;)media=&#39;all&#39;">




    <script>
        window.currentLanguage = 'en-us';
        window.currentLanguagePrefix = 'en';

        let renderCustomCodeOnClinetDomain = "";
        window.renderCustomCodeOnClinetDomain = !renderCustomCodeOnClinetDomain ? 0 : parseInt(
            renderCustomCodeOnClinetDomain);
    </script>
    <style type="text/css">
        :root .app-container>.questions-container-banner {
            display: none !important;
        }
    </style>



    <script type="text/javascript">
        function tryToRedirectToRightLanguage(languagePrefix) {

            if (isCustomDomain()) {

                const cookies = getCookieObject();

                var lastLanguage = languagePrefix;

                if (!lastLanguage) {
                    lastLanguage = getLastLanguageFromCookies(cookies);
                }

                var languagesObj = JSON.parse(window.hrefLangRelations);

                const defaultLanguagePrefix = getDefaultLanguagePrefix();

                const assignedLangPrefix = getAssignedLangPrefix();

                if (languagesObj.routPrefix && languagesObj.urls.hasOwnProperty(languagesObj.routPrefix)) {
                    if (lastLanguage !== languagesObj.routPrefix || defaultLanguagePrefix == languagesObj.routPrefix ||
                        assignedLangPrefix === lastLanguage) {

                        var url = languagesObj.urls[languagesObj.routPrefix];

                        if (url === decodeURI(window.location.origin + window.location.pathname).replace(/\/$/, "")) {
                            if (assignedLangPrefix === languagesObj.routPrefix || defaultLanguagePrefix == languagesObj
                                .routPrefix) {
                                url = url.replace('/' + languagesObj.routPrefix, '');
                            }
                        }

                        setLanguageCookie(languagesObj.routPrefix, url);
                    }

                    return false;

                } else {
                    var hrefLangPrefix = '';

                    for (var languageCode in languagesObj.urls) {
                        if (lastLanguage) {
                            if (lastLanguage === languageCode
                                // && defaultLanguagePrefix !== lastLanguage
                                &&
                                languagesObj.currentPrefix !== languageCode) {
                                window.location.replace(languagesObj.urls[languageCode]);
                                return false;
                            }
                        } else {
                            if (languagesObj.type == "2") {
                                hrefLangPrefix = languageCode.split('-').pop();
                            } else {
                                hrefLangPrefix = languageCode
                            }
                            if (defaultLanguagePrefix !== languagesObj.detectedPrefix &&
                                languagesObj.currentPrefix !== hrefLangPrefix) {
                                if (hrefLangPrefix === languagesObj.detectedPrefix) {
                                    window.location.replace(languagesObj.urls[languageCode]);
                                    return false;
                                } else {
                                    for (var code in languagesObj.additionalCodes) {
                                        var currentCode = languagesObj.additionalCodes[code];

                                        currentCode.forEach(item => {
                                            if (item.includes(`-${languagesObj.detectedPrefix}`) &&
                                                defaultLanguagePrefix !== languagesObj.detectedPrefix &&
                                                languagesObj.currentPrefix !== hrefLangPrefix) {
                                                window.location.replace(languagesObj.urls[code]);
                                                return false;
                                            }
                                        });
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        function getCookieObject() {
            const cookies = document.cookie;

            return cookies.split('; ').map((item) => {
                let [key, value] = item.split('=');
                return {
                    [key]: value
                };
            });
        }

        function getLastLanguageFromCookies(cookies) {
            let lastLanguage = null;

            for (cookie of cookies) {
                if (cookie['lastlanguage']) {
                    lastLanguage = cookie['lastlanguage'];
                    break;
                }
            }

            return lastLanguage;
        }

        function isCustomDomain() {
            return;
        }

        function getDefaultLanguagePrefix() {
            return "en";
        }

        function getAssignedLangPrefix() {
            return ""
        }

        function setLanguageCookie(prefix, url) {
            var d = new Date();
            var hour = 20;
            d.setTime(d.getTime() + (hour * 60 * 60 * 1000));
            var cookieExpireDate = "expires=" + d.toString();
            document.cookie = "lastlanguage=" + prefix + ";path=/; " + cookieExpireDate;
            if (url) {
                window.location.replace(url);
            }
        }
    </script>
    
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
                    <div class="header-rows">
                        <div class="uc-row header-row" data-id="26" style="  margin-bottom:0vh;  ">
                            <div class="row-container  container ">
                                <div class="row headerRow" style="">

                                    <div class="column col-xs-4 " datacolumn-id="156" style="  padding:9px 0px;     ">
                                        <div class="column-container " style="">

                                            <div class="module-container   only-mobile   align-left ModuleLogo
                                         first   last " style=" padding:0px 20px 0px 0px;  ">
                                                <div class="  module ModuleLogo " datamodule-id="166"
                                                    style="display:block;max-width:180px;">
                                                    <a href="https://subete.ucraft.net/">
                                                        <img src="./SUBETE!_files/logo.png" alt="SUBETE!">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column col-xs-7 " datacolumn-id="46" style="  padding:9px 0px;     ">
                                        <div class="column-container " style="">

                                            <div class="module-container   only-mobile   align-right ModuleNavigation
                                         first   last " style=" padding:0 10px 0 20px;  ">
                                                <div class="  module ModuleNavigation " datamodule-id="64">
                                                    <input type="hidden" class="standard-navigation">
                                                    <style>
                                                        #navigation-64>.standard-view>.navigation>.page>.page-children {
                                                            background: rgb(240, 240, 240);
                                                        }

                                                        #navigation-64>.standard-view>.navigation>.page>.page-children>.page>ul {
                                                            background: rgb(240, 240, 240);
                                                        }


                                                        #navigation-64>.standard-view>.navigation>.page>.page-children {
                                                            border-radius: 0px;
                                                        }

                                                        #navigation-64>.standard-view>.navigation>.page>.page-children>.page>ul {
                                                            border-radius: 0px;
                                                        }


                                                        #navigation-64>div>ul li:hover>ul {
                                                            display: block;
                                                        }

                                                        #navigation-64 .page a {
                                                            color: rgb(170, 170, 170);
                                                            font-size: 18px;
                                                            font-weight: 500;
                                                            letter-spacing: 0px;
                                                            text-transform: uppercase;
                                                        }

                                                        #navigation-64>div>ul>li.page:not(:last-child) {
                                                            margin-right: 31px;
                                                        }

                                                        #navigation-64>div>ul>li:first-child:nth-last-child(1) {}

                                                        #navigation-64 li.page>a:hover,
                                                        #navigation-64 li.page>ul.page-children>li.page a:hover,
                                                        #navigation-64 li.page>ul.page-children>li.page>ul.page-children>li.page a:hover {
                                                            color: rgb(53, 53, 53) !important;
                                                        }

                                                        #navigation-64 li.page>ul.page-children li.page a {
                                                            color: #353535;
                                                        }


                                                        #navigation-64 li.page.active>a,
                                                        #navigation-64 li.page>ul.page-children>li.page.active>a,
                                                        #navigation-64 li.page>ul.page-children>li.page>ul.page-children>li.page.active>a {
                                                            color: rgb(53, 53, 53);
                                                        }

                                                        #navigation-64 li.page.active>a:hover,
                                                        #navigation-64 li.page>ul.page-children>li.page.active>a:hover,
                                                        #navigation-64 li.page>ul.page-children>li.page>ul.page-children>li.page.active>a:hover {
                                                            color: rgb(53, 53, 53) !important;
                                                        }

                                                        #navigation-64 li.page>ul.page-children:before,
                                                        #navigation-64 li.page>ul.page-children>li.has-childes>.page-children.pagesArrows>li:first-child:before {
                                                            color: rgb(240, 240, 240);
                                                        }

                                                        #navigation-64 li.page>ul.page-children>li.page>a {
                                                            color: #353535;
                                                            font-size: 14px;




                                                        }


                                                        #navigation-64 li.page>ul.page-children>li.page>a {
                                                            font-weight: 600;
                                                        }


                                                        #navigation-64 li.page ul.page-children .page {
                                                            padding-top: 16.5px;
                                                            padding-bottom: 16.5px;
                                                        }

                                                        #navigation-64 li.page ul.page-children .page:last-child {
                                                            padding-bottom: 16.5px;
                                                        }

                                                        #navigation-64 li.has-childes.page>a>.uci-dropdown-arrow-down {
                                                            font-size: 10px;
                                                        }

                                                        #navigation-64 li.has-childes.page>.page-children.pagesArrows>.has-childes>a>.uci-dropdown-arrow-down {
                                                            font-size: 8px;
                                                        }

                                                        #navigation-64 li.has-childes.page>.page-children li>a,
                                                        #navigation-64 li.has-childes.page>.page-children li {
                                                            text-align: center;
                                                        }
                                                    </style>
                                                    <div id="navigation-64" data-nav-sub-page-scollapsible="0"
                                                        class="navigation-inner  horizontal standard"
                                                        data-stretch-labels="0">

                                                        <div class="off-canvas-button icon"
                                                            data-selector="off-canvas-64"
                                                            style="width:25px;height:25px;">
                                                            <svg viewBox="0 0 100.00000762939453 75.000244140625"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g transform="scale(1.2716659928598795)">
                                                                    <g>
                                                                        <g>
                                                                            <path clip-rule="evenodd"
                                                                                d="M81.602,44.102h-66.84c-3.256,0-5.898,2.64-5.898,5.898    s2.642,5.898,5.898,5.898h66.84c3.256,0,5.898-2.64,5.898-5.898S84.858,44.102,81.602,44.102z M81.602,67.693h-66.84    c-3.256,0-5.898,2.64-5.898,5.898c0,3.258,2.642,5.898,5.898,5.898h66.84c3.256,0,5.898-2.64,5.898-5.898    C87.5,70.333,84.858,67.693,81.602,67.693z M14.763,32.307h66.84c3.256,0,5.898-2.64,5.898-5.898c0-3.258-2.642-5.898-5.898-5.898    h-66.84c-3.256,0-5.898,2.64-5.898,5.898C8.865,29.667,11.507,32.307,14.763,32.307z"
                                                                                transform="translate(-8.864001274108887,-20.511001586914062)">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>

                                                        <div class="standard-view ">
                                                            <ul class="navigation"
                                                                style="font-family: &#39;Rubik&#39;;">
                                                                <li class=" page   show" data-anchor="">
                                                                    <a class="nav-item"
                                                                        href="./index.php"
                                                                        data-page-type="pageBlank">
                                                                        <span class="title">
                                                                            INICIO
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class=" page show" data-anchor="">
                                                                    <a class="nav-item"
                                                                        href="./COMPRAR_SUBETE!.php"
                                                                        data-page-type="pageBlank">
                                                                        <span class="title">
                                                                            COMPRAR
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class=" page   show" data-anchor="">
                                                                    <a class="nav-item"
                                                                        href="./MISVIAJES_SUBETE!.php"
                                                                        data-page-type="pageBlank">
                                                                        <span class="title">
                                                                            MIS VIAJES
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class=" page  active show" data-anchor="">
                                                                    <a class="nav-item"
                                                                        href="./CONTACTO_SUBETE!.php"
                                                                        data-page-type="pageBlank">
                                                                        <span class="title">
                                                                            CONTACTO&nbsp; &nbsp; &nbsp;&nbsp;
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
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
                        <div class="main-rows">
                                <div class="uc-row first" data-id="21" style="  margin-bottom:0vh;   background-image:url(./SUBETE!_files/school_bus.jpg);    background-repeat: no-repeat;
                                background-size: cover;">
                                    <div class="row-container  container ">
                                        <div class="row mainRow" style="">
                        <section id="hire">
                            <h1 style="color: white;">Contactame</h1>
                            
                            <form>
                                  <div class="field name-box">
                                        <input type="text" id="name" placeholder="Quien eres?"/>
                                        <label for="name">Nombre</label>
                                        <span class="ss-icon">check</span>
                                  </div>
                        
                                  <div class="field email-box">
                                        <input type="text" id="email" placeholder="nombre@email.com"/>
                                        <label for="email">Correo</label>
                                        <span class="ss-icon">check</span>
                                  </div>
                        
                                  <div class="field msg-box">
                                        <textarea id="msg" rows="4" placeholder="Escribe tu mensaje aqui......"/></textarea>
                                        <label for="msg">Msg</label>
                                        <span class="ss-icon">check</span>
                                  </div>
                        
                                  <input class="button" type="submit" value="Enviar" />
                          </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
                   
                <div class="footer-rows" style="">
                    <div class="uc-row                
                                " data-id="33"
                        style="  background:linear-gradient(180deg, rgb(240, 241, 238) 0%,rgb(50, 50, 49) 100%); ">
                        <div class="row-container  container ">
                            <div class="row footerRow" style="">

                                <div class="column col-sm-12 " datacolumn-id="123" style="  padding:0vh 0vh;     ">
                                    <div class="column-container vertical-top" style=" margin-top:26.706231454006vh; ">


                                        <div class="module-container   only-mobile   align-center ModuleTitle
                                          last " style=" padding:0 20px 15px 20px;  ">
                                            <div class="  module ModuleTitle " datamodule-id="83">
                                                <div class="uc-content">
                                                    <h6 style="color:rgb(240, 240, 240);">Copyright © 2019&nbsp;</h6>
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

                </div>
            </div>
        </div>
        <div class="accounts-popup">
            <div class="loading-container">
                <div class="loading-spinner"></div>
            </div>
            <iframe id="accounts-iframe" style="border: none;"
                src="./SUBETE!_files/saved_resource.html"></iframe>
        </div>
    </div>
    <div class="module-datepicker-container"></div>


    <style>
        @font-face {
            font-family: 'badge_opensans';
            src: url('/assets/fonts/Badge_OpenSans.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'lato_am';
            src: url('/assets/fonts/Lato_VH.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        html[lang="hy-am"] .powered-by-container {
            font-family: 'lato_am';

        }

        html[dir="rtl"] .powered-by-container,
        html[dir="rtl"] .powered-by-container .powered-by-left-section,
        html[dir="rtl"] .powered-by-container .powered-by-left-section .info-created,
        html[dir="rtl"] .powered-by-container .powered-by-right-section .opened-info,
        html[dir="rtl"] .powered-by-container .powered-by-right-section {
            flex-direction: row-reverse;
        }

        html[dir="rtl"] .powered-by-container .powered-by-right-section span {
            text-align: left;
        }

        .powered-by-container {
            font-family: 'badge_opensans', sans-serif;
            position: fixed;
            bottom: 0;
            right: 0;
            width: 100%;
            z-index: 9999;
            background: #161E33;
            display: flex;
            align-items: center;
            min-height: 48px;
            padding: 0 24px;

        }

        .powered-by-container .powered-by-right-section {
            flex: 1;
            justify-content: flex-end;
            margin-left: 24px;
        }

        .powered-by-container .powered-by-left-section .line-divider,
        .powered-by-container .powered-by-right-section .line-divider {
            min-height: 24px;
            height: 100%;
            width: 1px;
            background: #576180;
            margin: 6px 24px;
        }

        .powered-by-container .powered-by-left-section,
        .powered-by-container .powered-by-right-section,
        .powered-by-right-section .opened-info,
        .powered-by-container .powered-by-left-section .info-created {
            display: flex;
            align-items: center;
        }

        .powered-by-left-section .created-btn {
            text-transform: uppercase;
            height: 24px;
            line-height: 24px;
            padding: 0 13px;
            font-size: 10px;
            color: #fff;
            border-radius: 20px;
            background: #4FA36D;
            text-align: center;
            cursor: pointer;
            outline: none;
            border: none;
            text-decoration: none;
            white-space: nowrap;
            transition: background .3s;
        }

        .powered-by-left-section .created-btn:hover {
            background: #408368;
        }

        .powered-by-left-section .info-created span {
            font-size: 12px;
            line-height: 16px;
            color: #fff;
            font-weight: 500;
            margin-right: 12px;
        }

        .powered-by-left-section .info-created img {
            width: 85px;
            margin-bottom: 6px;
        }

        .powered-by-right-section .opened-info {
            -webkit-transition: all .35s;
            transition: all .35s;
            -webkit-transform: translate3d(calc(100% - 48px), 0, 0);
            transform: translate3d(calc(100% - 24px), 0, 0);
        }

        .powered-by-right-section .opened-info.opened {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .powered-by-right-section .opened-info.opened .round-arrow {
            transform: rotate(180deg);
        }

        .powered-by-right-section .opened-info .round-arrow {
            width: 24px;
            height: 24px;
            min-width: 24px;
            min-height: 24px;
            background: #3D4766;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all .35s;
        }

        .powered-by-right-section .opened-info .round-arrow i {
            font-size: 24px;
            color: #ABB4CC;
        }

        .powered-by-right-section .opened-info span {
            font-size: 12px;
            line-height: 16px;
            color: #fff;
            font-weight: 500;
            max-width: 650px;
        }

        .powered-by-right-section .opened-info span a {
            font-weight: bold;
            color: #fff;
            text-decoration: underline;
        }

        @media only screen and (max-width: 991px) {
            .powered-by-container {
                flex-direction: column;
                align-items: flex-start;
                padding: 0 16px 30px;
            }

            .powered-by-container .powered-by-left-section,
            .powered-by-container .powered-by-right-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .powered-by-container .line-divider {
                display: none;
            }

            .powered-by-container .powered-by-right-section {
                margin-left: 0;
            }

            .powered-by-container .powered-by-left-section .info-created {
                padding: 13px 0;
                max-width: 265px;
            }

            .powered-by-container .powered-by-right-section .opened-info {
                -webkit-transform: none;
                transform: none;
                max-height: 0;
                overflow: hidden;
                transition: max-height .33s ease-out;
            }

            .powered-by-container .powered-by-right-section .opened-info.opened {
                max-height: 120px;
                overflow: visible;

            }

            .powered-by-container .powered-by-right-section .opened-info span {
                padding-top: 15px;
                opacity: 0;
                transition: opacity .55s ease-out;
            }

            .powered-by-container .powered-by-right-section .opened-info.opened span {
                opacity: 1;
            }

            .powered-by-container .powered-by-right-section .opened-info .round-arrow {
                position: absolute;
                right: 8px;
                top: 8px;
                transform: rotate(90deg);
            }

            .powered-by-container .powered-by-right-section .opened-info.opened .round-arrow {
                transform: rotate(270deg);
            }

            html[lang="hy-am"] .powered-by-container {
                font-family: 'lato_am';

            }

            html[dir="rtl"] .powered-by-container,
            html[dir="rtl"] .powered-by-container .powered-by-left-section {
                flex-direction: column !important;
                align-items: flex-end !important;
            }

            html[dir="rtl"] .powered-by-container .powered-by-right-section span {
                text-align: left;
            }
        }





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
  background: black;
  width: 80.5%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313a3d;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
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
  background: #fd9638;
  color: #313a3d;
}
form .field input[type="text"].focused + label, form .field textarea.focused + label {
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
    <script>
        // Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});




        function toggleInfo() {
            var element = document.getElementById("opened-info");
            element.classList.toggle("opened");
        }

        function openIframe() {
            window.addEventListener("message", receiveMessage, false);
            var element = document.querySelector(".accounts-popup .loading-container");
            var iframeElement = document.getElementById("accounts-iframe");
            var popupElement = document.querySelector(".accounts-popup");

            element.classList.add("show");
            document.body.classList.add('no-scroll');
            document.getElementsByTagName('html')[0].classList.add('no-scroll');
            popupElement.classList.add("show");
            window.location.hash = '#get-started';
            iframeElement.setAttribute("src", window.accountsUrl + '?locale=' + window.currentLanguagePrefix +
                "#/wizard/choose-package?animate=false");

            function receiveMessage(event) {
                switch (event.data.action) {
                    case 'close':
                        popupElement.classList.remove("show");
                        window.location.hash = '/';
                        document.body.classList.remove('no-scroll');
                        document.getElementsByTagName('html')[0].classList.remove('no-scroll');

                        iframeElement.setAttribute("src", "");

                        if (window.accountSystemLanguage !== null) {
                            tryToRedirectToRightLanguage(window.accountSystemLanguage);
                        }
                        break;
                    case 'redirect':
                        window.open(event.data.url, '_blank');
                        popupElement.classList.remove("show");
                        window.location.hash = '/';
                        document.body.classList.remove('no-scroll');
                        document.getElementsByTagName('html')[0].classList.remove('no-scroll');
                        iframeElement.setAttribute("src", "");
                        break;
                    case 'reload':
                        window.location.reload();
                        break;
                    case 'loaded':
                        element.classList.remove("show");
                        break;
                }
            }
        }

        window.addEventListener('load', function () {
            var badgeElement = document.querySelector(".powered-by-container");

            if (badgeElement) {
                var badgeHeight = badgeElement.getBoundingClientRect().height;

                var lastBlock = document.querySelector(".main-layout > div:last-child");
                var offCanvas = document.querySelector(".off-canvas > .off-canvas-scroll-container");

                if (lastBlock) {
                    lastBlock.style.paddingBottom = badgeHeight + 'px';
                }

                if (offCanvas) {
                    offCanvas.style.paddingBottom = badgeHeight + 'px';
                }
            }

            if (window.location.hash.trim() == "#get-started") {
                openIframe();
            }
        });
    </script>
    
    <!-- Html -->


    <!-- Auth token -->
    <script type="text/javascript">
        var page = {
            "id": 16,
            "title": "COMPRAR",
            "alias": "comprar",
            "component": null,
            "type": "pageBlank",
            "target": 0,
            "homepage": 0,
            "isHeading": 0,
            "isHidden": 0,
            "externalUrl": "",
            "navigationId": 0,
            "parentPageId": null,
            "ordering": 2,
            "languageId": 1,
            "langRefId": 16,
            "params": "{\"margin\":1.8500000000000001,\"published\":1,\"bodyBackgroundColor\":\"rgb(240, 240, 240)\"}",
            "seoParams": "{\"pageTitle\":\"\",\"description\":\"\",\"state\":0}",
            "updated_at": "2019-04-03 18:00:50",
            "created_at": "2019-04-03 18:00:25",
            "deleted_at": "0000-00-00 00:00:00",
            "margin": 1.85,
            "published": 1,
            "bodyBackgroundColor": "rgb(240, 240, 240)",
            "seo": {
                "pageTitle": "",
                "description": "",
                "state": 0
            },
            "visibility": [2, 3, 4],
            "parent": null
        };
        var currentLanguageObject = {
            "id": 1,
            "title": "English",
            "language": "en-us",
            "prefix": "en",
            "region": "United States",
            "flag": "us.png",
            "default": 1,
            "published": 1,
            "updated_at": "2015-11-23 00:00:00",
            "created_at": "2015-11-23 00:00:00",
            "deleted_at": "1970-01-01 12:00:00"
        };
        var isTablet = 0;
        var isMobile = 0;
        var ucraftWebsiteElementsDisabled = 1;
        var printElementsEnabled = 0;
        var siteArchiverEnabled = 0;
        var croppedUrlPrefix = "https:\/\/static.ucraft.app\/fs\/userFiles\/subete\/images\/";
        var userFilesUrl = "https:\/\/static.ucraft.app\/fs\/userFiles\/subete\/";
        var accountsUrl = "https:\/\/accounts.ucraft.net";
        var accountsIframeUrl = "https:\/\/accounts.ucraft.com";
        var currency = "USD";
        var helpUrl = "https:\/\/support.ucraft.com";
        var websiteUrl = "https:\/\/www.ucraft.com";
        var publicAddonsAssetsUrl = "\/frontend-public\/";
        var publicUser = null;
        var staticUrl = "https:\/\/static.ucraft.app";
        var hasEcommerce = false;
        var hasFlights = false;
        var translations = {
            "validation.requiredField": "This field is required",
            "validation.invalidEmail": "This is not a valid e-mail address",
            "validation.characterRequired": "The minimum number of characters is",
            "validation.characterAllowed": "The maximum number of characters is",
            "validation.wordsRequired": "The minimum number of words is",
            "validation.wordsAllowed": "The maximum number of words is",
            "validation.invalidUrl": "This is not a valid URL",
            "validation.passwordCompare": "Password and the Verification don`t match",
            "validation.promoCodeCompare": "This is not a valid Coupon Code ",
            "validation.invalidNumber": "This is not a valid number",
            "validation.greaterThanNumber": "Value should be greater than",
            "validation.greaterLowerThanNumber": "Value should be greater lower",
            "validation.alias": "The alias may only contain letters, numbers, and dashes",
            "validation.fileIsBig": "The file you are uploading is too big.",
            "validation.invalidFileType": "Type of the file you are uploading is not a supported.",
            "validation.invalidDate": "Invalid date",
            "validation.invalidDateFormat": "The date doesn\u2019t match with the correct date format=> dd\/mm\/yyyy",
            "validation.reCaptchaUnexpectedError": "The Invisible reCAPTCHA error.",
            "validation.missingInputSecret": "The Invisible reCAPTCHA Secret Key is missing.",
            "validation.invalidInputSecret": "The Invisible reCAPTCHA Secret Key is invalid.",
            "validation.missingInputResponse": "The Invisible reCAPTCHA response parameter is missing.",
            "validation.invalidInputResponse": "The Invisible reCAPTCHA response parameter is invalid.",
            "validation.badRequest": "The Invisible reCAPTCHA request is invalid.",
            "validation.enableSslMessage": "Submitting this form is not possible, as the SSL has been enabled on your domain, but not on your website yet. To successfully submit the form you need to enable SSL in your domain configuration."
        };

        var styleSheetUrls = [];
        var _token = 'XlbuT7avBYfqnmEqnXeE5Iwuhqx8ygdlhVwbbXNL';
        var editUrl = 'https://subete.ucraft.net';
        var baseUrl = 'https://subete.ucraft.net';
        var apiPrefix = 'api';
        var publicApiPrefix = 'papi';
        var publicRestPrefix = 'prest';
        var pageId = '16';
        var siteInfo = {
            domain: ''
        };
        var googleMapKey = 'AIzaSyCOt5KmGHnyjT3QwpXk9z0QTkT06FpjWHY';
        <!-- lazy load css -->
        var ll = function (styleSheetUrls) {
            styleSheetUrls.forEach(function (el) {
                var l = document.createElement('link');
                l.rel = 'stylesheet';
                l.href = el;
                var h = document.getElementsByTagName('head')[0];
                h.appendChild(l);
            });
        };

        var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame ||
            msRequestAnimationFrame;

        if (raf) {
            raf(function () {
                ll(styleSheetUrls)
            });
        } else {
            window.addEventListener('load', function () {
                ll(styleSheetUrls)
            });
        }
    </script>

    <!-- jQuery minified -->
    <script src="./SUBETE!_files/jquery-3.2.1.min.js.descarga"></script>

    <!-- public assets js, all lib js files concated and minified -->
    <script src="./SUBETE!_files/publicAssets.js.descarga"></script>

    <!-- public js and admin js mix -->


    <!-- public js, all modules and apps public js concated and minified -->
    <script src="./SUBETE!_files/public.js.descarga"></script>

    <!-- Scripts -->

    <!-- Inline Scripts -->





    <script>
    </script>





</body>

</html>