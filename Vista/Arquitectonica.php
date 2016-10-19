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
        <title>Acústica Arquitectonica</title>
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
                    <h1 class="titulos" >Acústica Arquitectónica</h1>
                    <img src="../Assets/Img/resources/linea_3.png" width="100%">
                    <img  src="../Assets/Img/pag/<?php echo $imagenes[29]['ubicacion']; ?>" style="max-width:100%;height:auto;">
                    <article class="textos">
                        <p class="arquitectonicaTexto" name="arquitectonica" id="arquitectonica"><?php echo $contenido[12]['contenido'];?></p><br/>
                        <p><?php echo $contenido[13]['contenido'];?></p><br/>

                        <p><?php echo $contenido[14]['contenido'];?></p><br/>

                        <p><?php echo $contenido[15]['contenido'];?></p>
                        <p><?php echo $contenido[16]['contenido'];?></p>
                        <p><?php echo $contenido[17]['contenido'];?></p>
                        <p><?php echo $contenido[18]['contenido'];?>.</p>
                        <p><?php echo $contenido[19]['contenido'];?></p><br/>
                    </article>
                </div>

                <div class="col-md-2">
                </div>
            </div>

            <!--<div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" id="div1">
                        <img src="../Assets/Img/resources/linea_2.png" width="100%">
                    <footer>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contactos">
                                    <img src="../Assets/Img/complements/phone.png"><span>+57(1)2360614</span><br/>
                                    <img src="../Assets/Img/complements/smartphone.png"><span>300 657 90 86</span><br/>
                                    <img src="../Assets/Img/complements/email.png"><span>info@ecustic.co</span><br/>
                                    <img src="../Assets/Img/complements/location.png"><span>Cra 15 #82-08 Oficina</span><br/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="logfoot">
                                    <img id="stimg" name="stimg" src="../Assets/Img/resources/EMPRENDERBN.png" width="180px" height="50px">
                                    <img id="ndimg" name="ndimg" src="../Assets/Img/resources/fonadebn.png" width="80px" height="60px">
                                    <img id="rdimg" name="rdimg" src="../Assets/Img/resources/logosenaBN.png" width="80px" height="60px">
                                    <img id="thimg" name="thimg" src="../Assets/Img/resources/ESCUDOBN.png" width="80px" height="60px">
                                 </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-md-2">
                </div>
            </div>-->


            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" id="div1">
                    <img src="../Assets/Img/resources/linea_2.png" width="100%">
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
    </body>
</html>