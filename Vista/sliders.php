<?php
require_once '../Controlador/Controller.php';
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

        <!-- Incluimos el plugin -->
        <script src="../Assets/js/bjqs.min_2.js"></script>
        <script src="../Assets/js/script_2.js"></script>

        <!-- Importamos nuestra hoja de estilos CSS -->
        <link rel="stylesheet" href="../Assets/css/estilos.css" />



    </head>
    <body>
        <div id="slider">
            <ul class="bjqs">
                <li><img src="../Assets/Img/pag/<?php echo $imagenes[39]['ubicacion']; ?>" alt="Texto 1" title="cosas"/>
                    <p>Texto 1</p>
                </li>
                <li><img src="../Assets/Img/pag/<?php echo $imagenes[40]['ubicacion']; ?>" title="cosas"/>
                    <p>Texto 2</p>
                </li>
                <li><img src="../Assets/Img/pag/<?php echo $imagenes[41]['ubicacion']; ?>" alt="Texto 4" title="cosas"/></li>
                <li><img src="../Assets/Img/pag/<?php echo $imagenes[42]['ubicacion']; ?>" title="cosas"/>
                    <p>Texto 4</p>
                </li>
            </ul>
        </div>




        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: auto;max-width: 75%; max-height: auto;"> 


            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"><img src="../Assets/Img/pag/<?php echo $imagenes[39]['ubicacion']; ?>" style="width:100%" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">1</a></p>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="../Assets/Img/pag/<?php echo $imagenes[40]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">2</a></p>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="../Assets/Img/pag/<?php echo $imagenes[41]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">3</a></p>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="../Assets/Img/pag/<?php echo $imagenes[42]['ubicacion']; ?>" style="width:100%" data-src="" alt="Second    slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1></h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">4</a></p>
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