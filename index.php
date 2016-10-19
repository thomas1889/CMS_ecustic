<?php
require_once 'Controlador/pruebaController.php';
?>
<!DOCTYPE html>

<html lang="es">
    <head>

        <meta charset="UTF-8">

        <meta content="Aislamiento Acústico, Paneles Acústicos, Mediciones de ruido, Espumas acústicas, Soluciones acústicas, Acondicionamiento acústico,
              Empresas de Insonorización,Salas Acústicas,Diseño Acústico,Ingenieros Acústicos,Ruido Vivienda,Estudio Acústico,Diseño de teatros,
              Consultorías Acústicas,Insonorización,Mediciones de ruido,Soluciones Acústicas,Empresas de insonorización,Control de ruido,Ingenieros acústicos,
              Ruido Ambiental,Estudios de ruido,Mediciones acústicas,Mapas de ruido,Ruido Industrial,Estudio Acústico,Acústica Industrial,
              Ruido de máquinas,Ruido Ocupacional,Consultorías Acústicas,Insonorización,Aislamiento Acústico,Mediciones de Ruido,Soluciones Acústicas,
              Empresas de Insonorización,Control de Ruido,Diseño Acústico,Ingenieros Acústicos,Ruido Ambiental,Estudios de ruido,Mediciones acústicas,
              Mapas de ruido,Ruido Industrial,Estudio Acústico,Acústica Industrial,Ruido de máquinas,Silenciadores Acústicas,Consultorías acústicas,
              Absorbentes Acústicos,Paneles Acústicos,Difusores Acústicos,Silenciadores Acústicos,Espumas acústicas" name="keywords" />

        <link rel="icon" href="Assets/Img/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.css"/>

        <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/css/index.css"/>

        <title>Ecustic</title>
        <style type="text/css">
        body{
            background-image: url(fondNov-01.png);
            background-position: top center;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        </style>

        <!-- Importamos nuestra hoja de estilos CSS -->
        <link rel="stylesheet" href="Assets/css/estilos.css" />

        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="row-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <a href="index.php"><img class="logo" name src="Assets/Img/resources/logo-ecustic.png" title="Logo_Ecustic"></a>

                        <a href="index.php"><img class="header" name src="Assets/Img/resources/header.png" title="header"></a>
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
                            <a href="https://www.facebook.com/ecusticae" target="_blank"><img class="networks" src="Assets/Img/complements/fb.png" name="" id="" alt="Facebook" title="Facebook"></a>                    
                            <a href="https://twitter.com/ecusticltda" target="_blank"><img class="networks" src="Assets/Img/complements/twitter.png" name="" id="" alt="Twitter" title="Twitter"></a>
                        </div>
                        <div class="buscar">

                            <form id="buscador" name="buscador" action="./Vista/buscar.php" method="POST">
                                <br/>
                                <a target="_blank" onclick="enviar();" onchange="enviar();"><img class="search" src="Assets/Img/complements/search.png" name="" id="" alt="Buscar" title="Buscar"></a>
                                <input type="text" name="buscar" id="buscar" placeholder="buscar...">
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="col-md-2">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">

                    <nav class="navbar navbar-default" id="listaCustic">
                        <div class="container-fluid">
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
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin: auto;">
                                <ul class="nav navbar-nav">
                                    <li id="listaEcustic"><a href="Vista/Empresa.php"> Empresa <span class="sr-only">(current)</span></a></li>

                                    <li class="dropdown" id="listaEcustic">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li id="listaEcusticSub"><a href="Vista/Arquitectonica.php">Arquitectónica</a></li>
                                            <li id="listaEcusticSub"><a href="Vista/Ambiental.php">Ambiental</a></li>
                                            <li id="listaEcusticSub"><a href="Vista/Industrial.php">Industrial</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown" id="listaEcustic">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
                                        <ul class="dropdown-menu" id="listaEcusticSub">
                                            <li ><a href="Vista/Pa_acusticos.php">Productos > Paneles Acústicos</a></li>
                                            <li id="listaEcusticSub"><a href="Vista/Espumas.php">Productos > Espumas Acústicas</a></li>
                                        </ul>
                                    </li>
                                    <li id="listaEcustic"><a href="Vista/Pro_galerias.php">Proyectos</a></li>
                                    <li id="listaEcustic"><a href="Vista/Articulos.php">Articulos</a></li>
                                    <li id="listaEcustic"><a href="Vista/Clientes.php">Clientes</a></li>
                                    <li id="listaEcustic" style="border-right-style: none;"><a href="Vista/Contacto.php">Contacto</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>


                </div>
                <div class="col-md-2">
                </div>
            </div>

            <div class="row">

                <div class="col-md-2">
                </div>

                <div class="col-md-8" id="div1">



                    <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                        <!-- Indicators -->

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active"><img src="Assets/Img/pag/<?php echo $imagenes[0]['ubicacion']; ?>" style="width:100%" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Acústica Arquitectónica</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <img src="Assets/Img/pag/<?php echo $imagenes[1]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Acústica Ambiental</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <img src="Assets/Img/pag/<?php echo $imagenes[2]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Acústica Industrial</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <img src="Assets/Img/pag/<?php echo $imagenes[3]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Paneles Acústicos</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <img src="Assets/Img/pag/<?php echo $imagenes[48]['ubicacion']; ?>" style="width:100%" data-src="" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Espumas Acústicas </a></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="padding-top:2em;padding-bottom:2em;">
                            <span class="glyphicon glyphicon-chevron-left" style="left:15px;background-color:#85C43F; "></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="padding-top:2em;padding-bottom:2em;">
                            <span class="glyphicon glyphicon-chevron-right" style="right:15px;background-color:#85C43F;"></span>
                        </a>
                    </div>

                </div>

                <div class="col-md-2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                </div>

                <div class="col-md-8" id="div1">
                    <div class="quienes_somos" name="quienes" id="quienes">
                        <a href="#" target="_blank"><button>¿Quienes Somos?</button></a>
                        <p>
                            <?php echo $contenido[0]['contenido']; ?>
                        </p>
                    </div>
                    <img src="Assets/Img/resources/fondo_linea_2.png" width="100%">
                </div>


                <div class="col-md-2">
                </div>


            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" id="div1">
                    <article class="nosotros" name="nosotros" id="nosotros">
                        <h1 class="servicios">Servicios</h1>
                        <img src="Assets/Img/resources/linea.png" width="98%" >
                        <section>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5" id="acustica"> 
                                    <img style="height: auto; width: 100%;" src="Assets/Img/pag/<?php echo $imagenes[5]['ubicacion']; ?>">
                                </div>
                                <div class="col-md-5" id="acustica">
                                    <h1> <?php echo $contenido[4]['contenido']; ?></h1>
                                    <hr/>
                                    <p><?php echo $contenido[1]['contenido']; ?></p>
                                    <a href="Vista/Arquitectonica.php" target="_blank"><img src="Assets/Img/complements/plus.png"></a>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </section>

                        <section>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5"  id="ambiental" > 
                                    <img style="padding-top:1em;height: auto; width: 100%;" src="Assets/Img/pag/<?php echo $imagenes[6]['ubicacion']; ?>">
                                </div>
                                <div class="col-md-5" id="ambiental">
                                    <h1><?php echo $contenido[5]['contenido']; ?></h1>
                                    <hr/> 
                                    <p><?php echo $contenido[2]['contenido']; ?></p>
                                    <a href="Vista/Ambiental.php" target="_blank"><img src="Assets/Img/complements/plus.png"></a>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </section>

                        <section>
                            <div class="row">
                                <div class="col-md-1"></div>

                                <div class="col-md-5" id="industrial"> 
                                    <img style="height: auto; width: 100%;" src="Assets/Img/pag/<?php echo $imagenes[7]['ubicacion']; ?>">
                                </div>
                                <div class="col-md-5" id="industrial">
                                    <h1><?php echo $contenido[6]['contenido']; ?></h1>
                                    <hr/>
                                    <p><?php echo $contenido[3]['contenido']; ?></p>
                                    <a href="Vista/Industrial.php" target="_blank"><img src="Assets/Img/complements/plus.png"></a>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col-md-2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" id="div1">
                    <article>
                        <img src="Assets/Img/resources/fondo_linea_2.png" width="100%">
                        <h1 class="servicios">Clientes</h1>
                        <img src="Assets/Img/resources/linea.png" width="98%">
                        <div class="row">
                            <div class="col-md-12"> 
                                 <?php
                                $longitud = count($imagenesC);
                                for ($i=0; $i < $longitud ; $i++) { 
                                   
                                echo '<img src="Assets/Img/clientes/'.$imagenesC[$i]['ubicacion'].'" id="img1" name="img1" max-width="15%" height="Auto" title="'.$imagenesC[$i]['nombre'].'">';
                            
                            }
                                ?>
                            </div>
                        </div>
                    </article>
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
                                    <img src="Assets/Img/complements/phone.png"><span>+57(1)2360614</span><br/>
                                    <img src="Assets/Img/complements/smartphone.png"><span>300 657 90 86</span><br/>
                                     <img src="Assets/Img/complements/email.png"><span><a href="mailto:info@ecustic.co" style="color:black;">info@ecustic.co</a></span><br/>
                                    <img src="Assets/Img/complements/location.png"><span>Cra 15 # 82-08 oficina 303</span><br/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="logfoot">
                                    <img id="stimg" name="stimg" src="Assets/Img/resources/EMPRENDERBN.png" width="150px" height="auto">
                                    <img id="ndimg" name="ndimg" src="Assets/Img/resources/fonadebn.png" width="50px" height="auto">
                                    <img id="rdimg" name="rdimg" src="Assets/Img/resources/logosenaBN.png" width="50px" height="auto">
                                    <img id="thimg" name="thimg" src="Assets/Img/resources/ESCUDOBN.png" width="50px" height="auto">
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-md-2">
                </div>
            </div>

        </div>

        <script type="text/javascript" src="Assets/js/jquery11.js"></script>
        <script type="text/javascript" src="Assets/js/modernizer.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.js"></script>
        <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>




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
        
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>


    </body>
</html>