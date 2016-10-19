<?php
require_once ('../Controlador/controller.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">

        <link rel="icon" href="../Assets/Img/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap.css"/>

        <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>


        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../Assets/bootstrap/dist/css/bootstrap-theme.min.css">


        <link rel="stylesheet" type="text/css" href="../Assets/css/index.css"/>

        <script type="text/javascript" src="../Assets/js/jquery11.js"></script>
        <script type="text/javascript" src="../Assets/js/modernizer.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../Assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../Assets/bootstrap/js/bootstrap.js"></script>
        <title>Proyectos > Galerias</title>



        <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>

       

        <!-- Importamos nuestra hoja de estilos CSS -->
        <link rel="stylesheet" href="../Assets/css/estilos.css" />

        <link rel="stylesheet"  href="../Assets/css/lightslider.css"/>

    </head>
    <body>

        <div class="row-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <a href="../index.php"><img class="logo" name src="../Assets/Img/resources/logo-ecustic.png" title="Logo_Ecustic"></a>
                    <a href="../index.php"><img class="header" name src="../Assets/Img/resources/header.png" title="header"></a>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="clear"></div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="redes">
                        <div class="fbt">
                            <a href="https://www.facebook.com/ecusticae" target="_blank"><img class="networks" src="../Assets/Img/complements/fb.png" name="" id="" alt="Facebook" title="Facebook"></a>                    
                            <a href="https://twitter.com/ecusticltda" target="_blank"><img class="networks" src="../Assets/Img/complements/twitter.png" name="" id="" alt="Twitter" title="Twitter"></a>
                        </div>
                        <div class="buscar">

                            <form id="buscador" name="buscador" action="buscar.php" method="POST">
                                <br/>
                                <a target="_blank" onclick="enviar();" onchange="enviar();"><img class="search" src="../Assets/Img/complements/search.png" name="" id="" alt="Buscar" title="Buscar"></a>
                                <input type="text" name="buscar" id="buscar" placeholder="buscar...">
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="col-md-2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-default" id="listaCustic">
                        <div class="container-fluid" style="text-align:center;">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li id="listaEcustic"><a href="Empresa.php"> Empresa <span class="sr-only">(current)</span></a></li>

                                    <li class="dropdown" id="listaEcustic">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li id="listaEcusticSub"><a href="Arquitectonica.php">Arquitectónica</a></li>
                                            <li id="listaEcusticSub"><a href="Ambiental.php">Ambiental</a></li>
                                            <li id="listaEcusticSub"><a href="Industrial.php">Industrial</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown" id="listaEcustic">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                                        <ul class="dropdown-menu" id="listaEcusticSub">
                                            <li ><a href="Pa_acusticos.php">Productos > Paneles Acústicos</a></li>
                                            <li id="listaEcusticSub"><a href="Espumas.php">Productos > Espumas Acústicas</a></li>
                                        </ul>
                                    </li>
                                    <li id="listaEcustic"><a href="Pro_galerias.php">Proyectos</a></li>
                                    <li id="listaEcustic"><a href="Articulos.php">Articulos</a></li>
                                    <li id="listaEcustic"><a href="Clientes.php">Clientes</a></li>
                                    <li id="listaEcustic" style="border-right-style: none;"><a href="Contacto.php">Contacto</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>

                <div class="col-md-2">
                </div>
            </div>

            <div class="col-md-2">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-8">


            </div>
            <div class="col-md-2">
            </div>
        </div>

        <div class="row">

            <div class="col-md-2">
            </div>

            <div class="col-md-8" id="div1">
                <h1 class="titulos">Proyectos > Galerias</h1>
                <img src="../Assets/Img/resources/linea.png" style="max-width:100%;height:auto;">
                <br/>
                <br/>


                  <br/><br/>
                
                <iframe id='iframe' src='//flickrit.com/slideshowholder.php?full=100&height=600&width=800&size=big&speed=3&userId=93193809@N04&click=true&caption=on&counter=true&credit=2&trans=1&theme=1&thumbnails=1&transition=0&layoutType=fixed&sort=0' scrolling='no' frameborder='0' width='800' height='600' style="margin-top:-80px;" allowFullScreen='true' ></iframe>

                <!--<div class="galeriaP" >
                    <object class="objGaleria" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">
                        <param name="flashvars" value="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2F93193809%40N04%2Fshow&amp;page_show_back_url=%2Fphotos%2F93193809%40N04%2F&amp;user_id=93193809@N04" />
                        <param name="allowFullScreen" value="true" />
                        <param name="src" value="https://www.flickr.com/apps/slideshow/show.swf?v=71649" />
                        <embed class="embed" type="application/x-shockwave-flash" src="https://www.flickr.com/apps/slideshow/show.swf?v=71649" flashvars="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2F93193809%40N04%2Fshow&amp;page_show_back_url=%2Fphotos%2F93193809%40N04%2F&amp;user_id=93193809@N04" allowFullScreen="true" />
                    </object><br/>
                </div>-->

                <br/><br/>
                <h3 style="padding-left:15%;padding-right:15%;">
                Somos una empresa Colombiana jóven dedicada al desarrollo de proyectos de Ingeniería acústica, con amplia experiencia en soluciones de ruído <strong>Ambiental</strong>, ruído <strong>Industrial</strong> y acústica <strong>Aquitectónica</strong>.
                </h3>
                <br/><br/>
<!--
                <br/><br><br>
                -->
<!--
                <div class="demo" style="max-width:70%; margin: auto; max-height: auto;border-radius:15px 15px 15px 15px;margin-bottom: 20px;">
                    <div class="item">            
                        <div class="clearfix" >
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[47]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[47]['ubicacion']; ?>" width="100%" height="auto" />
                                    <h6><strong>ACÚSTICA AMBIENTAL</strong>
                                        Mediciones de emisión de ruido ambiental generado por la cancha de futbol 5 del Centro Comercial Bazaar Alsacia 
                                        Año: 2013.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[40]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[40]['ubicacion']; ?>" width="100%" height="auto"/>
                                    <h6><strong>ACÚSTICA AMBIENTAL</strong>
                                        Mediciones de emisión de ruido ambiental generado por la cancha de futbol 5 del Centro Comercial Bazaar Alsacia 
                                        Año: 2013.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[41]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[41]['ubicacion']; ?>" width="100%" height="auto"/>
                                    <h6><strong>ACÚSTICA ARQUITECTÓNICA</strong>
                                        Consultoría Acústica para la especificación de sistemas de ventanería para el Hotel Estelar Suite Jones.
                                        Año: 2013.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[42]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[42]['ubicacion']; ?>" width="100%" height="auto"/>
                                    <h6><strong>ACÚSTICA AMBIENTAL</strong>
                                        Mediciones de emisión de ruido generado por los compresores de los consultorios de la Compañía Seguros Bolívar.
                                        Año: 2013.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[52]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[52]['ubicacion']; ?>"width="100%" height="auto" />
                                    <h6>
                                        <strong>ACÚSTICA AMBIENTAL</strong>
                                        Medición de emisión de ruido por planta industrial.
                                        Lácteos La Arboleda– Bogotá D.C.
                                        Año: 2014.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[44]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[44]['ubicacion']; ?>"width="100%" height="auto" />
                                    <h6>
                                        <strong>ACÚSTICA AMBIENTAL</strong>
                                        Mediciones de emisión de ruido generado en los parqueaderos de buses del Sistema Integrado de Transporte Público.
                                        Año: 2014.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[45]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[45]['ubicacion']; ?>"width="100%" height="auto" />
                                    <h6>
                                        <span>ACÚSTICA AMBIENTAL</span>
                                        Mediciones de emisión de ruido ambiental generado por la cancha de futbol 5 del Centro Comercial Bazaar Alsacia 
                                        Año: 2013.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[50]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[50]['ubicacion']; ?>"width="100%" height="auto" />
                                    <h6>
                                        <strong>ACÚSTICA ARQUITECTÓNICA</strong>
                                        Paneles de Acondicionamiento Acústico para el Auditorio del Batallón Albán en Villavicencio.
                                        Año: 2014.
                                    </h6>
                                </li>
                                <li data-thumb="../Assets/Img/pag/<?php echo $imagenes[51]['ubicacion']; ?>"> 
                                    <img src="../Assets/Img/pag/<?php echo $imagenes[51]['ubicacion']; ?>"width="100%" height="auto" />
                                    <h6>
                                        <strong>ACÚSTICA ARQUITECTÓNICA</strong>
                                        Paneles de Acondicionamiento Acústico para salón Comunal
                                        Remansos de Santa Crúz – Bogotá D.C.
                                        Año: 2013.
                                    </h6>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>	
-->

            </div>

            <div class="col-md-2">
            </div>
        </div>


        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" id="div1">
                <footer>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contactos">
                                <img src="../Assets/Img/complements/phone.png"><span>+57(1)2360614</span><br/>
                                <img src="../Assets/Img/complements/smartphone.png"><span>300 657 90 86</span><br/>
                                 <img src="../Assets/Img/complements/email.png"><span><a href="mailto:info@ecustic.co" style="color:black;">info@ecustic.co</a></span><br/>
                                <img src="../Assets/Img/complements/location.png"><span>Cra 15 # 82-08 oficina 303</span><br/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="logfoot">
                                <img id="stimg" name="stimg" src="../Assets/Img/resources/EMPRENDERBN.png" width="150px" height="auto">
                                <img id="ndimg" name="ndimg" src="../Assets/Img/resources/fonadebn.png" width="50px" height="auto">
                                <img id="rdimg" name="rdimg" src="../Assets/Img/resources/logosenaBN.png" width="50px" height="auto">
                                <img id="thimg" name="thimg" src="../Assets/Img/resources/ESCUDOBN.png" width="50px" height="auto">
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="col-md-2">
            </div>
        </div>

    </div>
    <script>
            // convertimos en minusculas la cadena devuelta por navigator.userAgent
            var nav = navigator.userAgent.toLowerCase();

            //buscamos dentro de la cadena mediante indexOf() el identificador del navegador
            if(nav.indexOf("msie") != -1){
                alert("Recomendamos actualizar su navegador web\n \n a una versión compatible con nuestro sitio web.\n \n Gracias por su comprensión. \n \n \t Att: Equipo de Ecustic.");
                window.open('https://www.mozilla.org/es-ES/firefox/new/','_blank');
            } else {
                
            }
        </script>
    <script>
            function eviar(buscar) {
                document.getElementById('buscar').value = buscar;
                document.getElementById('buscador').submit();
            }
        </script>

    <script src="../Assets/js/lightslider.js"></script> 
    <script>
        $(document).ready(function () {
            $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
</body>
</html>