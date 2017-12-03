<?php
if( isset( $_POST['nombre'] )) {
    $nombre = trim($_POST['nombre']);
    $mail = trim($_POST['email']);
    $regiones = trim($_POST['regiones']);
    $comunas = trim($_POST['comunas']);
    
    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "FROM: " . $mail . "\r\n";
    //$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $cuerpo = "Contenido:\n\n";
    $cuerpo .= "Email: " . $mail . "\n";
    $cuerpo .= "Nombre: " . $nombre . "\n";
    $cuerpo .= "Región: " . $regiones. "\n";
    $cuerpo .= "Comuna: " . $comunas . "\n";

    //$cuerpo .= "Mensaje: " . $mensaje . "\n";
    //$cuerpo .= "Clinica: " . $_POST['sca'] ."\n\n";  
    //mando el correo...
   mail("mail@mail.com","Datos ingresados a landing",$cuerpo, $cabeceras);
} else {
   // header( 'Location: ./' ) ;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Tittle</title>
        <link rel="stylesheet" href="archivos/foundation.css">
        <link rel="stylesheet" href="archivos/style.css">
        <link rel="stylesheet" href="bo-css/bootstrap-reboot.css">
        <link rel="stylesheet" href="bo-css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="bo-css/bootstrap.css">
        <link rel="stylesheet" href="bo-css/bootstrap.min.css">
        <link rel="stylesheet" href="archivos/select.css">
        <link rel="icon" type="image/png" href="archivos/favicon.jpg" />
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <script src="bo-js/bootstrap.bundle.js"></script>
        <script src="bo-js/bootstrap.bundle.min.js"></script>
        <script src="bo-js/bootstrap.js"></script>
        <script src="bo-js/bootstrap.min.js"></script>
        <script src="bo-js/modernizr.js"></script>
        <script src="archivos/modernizr.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })  
            (window,document,'script','//www.google-analytics.com/analytics.js','ga');  
            ga('create', 'UA-64216916-1', 'auto');  
            ga('send', 'pageview');
        </script>
<!-- Facebook Conversion Code for Clientes potenciales - Retargeting Web -->
        <script>
            (function() {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
                }
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', '6025687714467', {'value':'0.00','currency':'CLP'}]);
        </script>
        <noscript>
            <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025687714467&amp;cd[value]=0.00&amp;cd[currency]=CLP&amp;noscript=1" /></noscript>
<!-- Facebook Conversion Code for Clientes potenciales - Publico Objetivo -->
        <script>
            (function() {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
                }
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', '6025687905667', {'value':'0.00','currency':'CLP'}]);
        </script>
        <noscript>
            <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025687905667&amp;cd[value]=0.00&amp;cd[currency]=CLP&amp;noscript=1" />
        </noscript>
        <script>
            (function() {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '722493677863037']);
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', 'PixelInitialized', {}]);
        </script>
        <noscript>
            <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=722493677863037&amp;ev=PixelInitialized" />
        </noscript>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
         <!-- header -->
        <section id="mensaje">
            <div class="pt-5">
                <div class="row" style="margin:inherit;">
                    <div class=" column d-flex justify-content-between" id="face">
                        <div class="col-md-4 col-4 st ml-4">
                            <img src="archivos/logoarr.png">
                        </div>
                       <div class="col-md-4 col-6 mr-4 hom codo-ph" >SLOGAN PT1<span class="font-2"> SLOGAN PT2</span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 columns pareja d-flex justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-12 columns pareja caja-query">
                            <div class="linea">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 columns pareja">
                            <h1 class="blue  first-ph ">
                               <img src="archivos/comilla1.png" alt="" class="comilla1">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et d
                                <img src="archivos/comilla2.png" alt="" class="comilla2">
                            </h1>
                            <div class="promo">
                                <img src="logo.png">  
                            </div>     
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-12 columns pareja caja-query">
                        </div>
                    </div><!-- .columns -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 columns" id="face">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 fle3 scroll-down">
                        </div>
                    </div>
                    <section class="column pb-3" id="scrollRegistrate">
                        <div class="col-12 col-md-4">
                        </div>
                        <div id=contacto class="col-12 col-md-4 mb-5">
                            <h2 class="blue">Bienvenido</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p> 
                        </div>
                        <div class="col-12 col-md-4">
                        </div>
                    </section>
                    <div class="col-md-4 col-12 hom">
                    </div>
                    <div class="col-md-4 col-12 hom">
                    </div>
                    <div class="col-md-4 col-12 hom pb-4 pt-2 pr-5 ">SLOGAN PT1<span class="font-2"> SLOGAN PT2</span>
                    </div>
                </div>
            </div>
        </section>
<!-- footer -->
    </section> 
    <footer id="footer">
        <div class="row" style="margin:inherit;" >
            <div class="large-12 medium-12 small-12 columns primerfooter" >
                <div class="row d-flex justify-content-between"  style="margin:inherit;">
                    <div class="col-md-1 col-12 logo-git-2">
                        <img class="grupo" src="archivos/logo.png">
                    </div>
                    <div class="col-md-8 col-12">
                        landing creada por<span class="font-2"> JoseHollow24</span>
                    </div>  
                    <div class="col-md-1 col-12 logo-git-2">  
                        <img class="stab" src="archivos/logo.png"> 
                    </div>
                </div>
            </div>
        </div>
    </footer>  
        <script src="archivos/jquery-2.1.4.js"></script>
        <script src="archivos/foundation.js"></script>
        <script src="archivos/validate.js"></script>
        <script src="archivos/rut.js"></script>
        <script stype="text/javascript" async defer>
            function scrollDown(el) {
                el.animate({
                    scrollTop: el[0].scrollHeight
                }, 2500, function() {
                    scrollUp(el)
                });
            };
            scrollDown($("html,body"));
        </script> 
    </body>
</html>