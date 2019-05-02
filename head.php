    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Roboto|Rubik" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SUBETE!</title>
    <meta itemprop="name" content="SUBETE!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="YES">
    <link rel="icon" type="image/png"href="./SUBETE!_files/favicon.png">
    <link href="./SUBETE!_files/css.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./SUBETE!_files/public.css">
    <link rel="stylesheet" type="text/css" href="./SUBETE!_files/icomoon.css" media="all"onload="if(media!==&#39;all&#39;)media=&#39;all&#39;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <script>
        window.currentLanguage = 'en-us';
        window.currentLanguagePrefix = 'en';

        let renderCustomCodeOnClinetDomain = "";
        window.renderCustomCodeOnClinetDomain = !renderCustomCodeOnClinetDomain ? 0 : parseInt(
            renderCustomCodeOnClinetDomain);
    </script>
    <style type="text/css">
    @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css");

    div .datepicker {
   
    width: 30% !important;
}

        :root .app-container>.questions-container-banner {
            display: none !important;
        }
        @import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://fonts.googleapis.com/css?family=Lato:400,700');


.username h3 {
  float: left;
  font-size: 18px;
  font-weight: 600 ;
  margin: 25px 10px 0 0;
  position: relative;
  font-family: Rubik
}

#container-avatar {
  float: left;
  height: 72px;
  width: 72px;
}

#container-avatar img {
  border: 4px solid #eeeeee;
  border-radius: 100px;
  display: block;
  height: 72px;
  width: 72px;
}

#container-avatar #badge {
  align-items: center;
  background: #f68867;
  border-radius: 100px;
  color: #fff;
  display: flex;
  font-size: 13px;
  font-weight: bold;
  height: 27px;
  justify-content: center;
  margin: 0 0 0 45px;
  position: absolute;
  text-align: center;
  width: 27px;
}

#container-avatar .entypo-menu {
  float: right;
  font-size: 20px;
  margin: -45px -25px 0 20px;
}

.username:hover .nav, .entypo-menu:hover .nav {
  opacity: 1;
  visibility: visible;  
}

.username:hover .entypo-menu {
  color: #6bc6d8;
  transition: all .15s;
}

.nav {
  opacity: 0;
  position: relative;
  top: 0;
  transform: translate3d(0, 0, 0,);
  transition: all .15s;
  visibility: hidden;
}

.nav ul {
  background: yellow;
  border-radius: 4px;
  color: #efefef;
  float: left;
  font-size: 13px;
  left: -35px;
  position: absolute;
  text-align: left;
  text-transform: uppercase;
  top: 15px;
  padding: 0;
    width: 132px;
    
}

.nav ul li:first-child:after {
  border-bottom: 10px solid #797979;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  content: "";
  display: block;
  height: 0;
  position: absolute;
  right: 37px;
  top: -10px;
  width: 0;
}

.nav ul li:first-child:hover:after {
  border-bottom: 10px solid #f68867;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  content: "";
  display: block;
  height: 0;
  right: 37px;
  top: -10px;
  width: 0;
}

.nav ul li {
  border-bottom: 1px solid rgba(204, 204, 204, .3);
  left: -50px;
  padding: 15px;
}

.nav ul li:last-child {
  border: 0;
}

.nav ul li span {
  margin: 0 14px 0 0;
}

.nav ul li:hover {
  background: #f68867;
  border-bottom: 1px solid #f68867;
  cursor: pointer;
}

.nav ul li a {
  color: #efefef;
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
    