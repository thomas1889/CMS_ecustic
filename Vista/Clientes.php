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
        <title>Clientes</title>
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
                    <section>
                        <div class="row">
                                    <h1 class="servicios">Clientes</h1>
                                <img src="../Assets/Img/resources/linea_3.png" width="100%"><br/><br/>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-10">
                                <p  class="textos" id="clientes" name="clientes" style="font-size:1em;padding-left:1%;padding-right:1%;">
                                    <?php echo $contenido[62]['contenido'];?>
                                    </p><br/><br/>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-12"> 
                                <?php
                                $longitud = count($imagenesC);
                                for ($i=0; $i < $longitud ; $i++) { 
                                   
                                echo '<img src="../Assets/Img/clientes/'.$imagenesC[$i]['ubicacion'].'" id="img1" name="img1" max-width="15%" height="Auto" title="'.$imagenesC[$i]['nombre'].'">';
                            
                            }
                                ?>
                            </div>
                        </div>
                      <!--  <div class="row">
                            <div class="col-md-12">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[12]['ubicacion']; ?>" id="img5" name="img5" max-width="15%" height="Auto" title="Ladevi">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[13]['ubicacion']; ?>" id="img6" name="img6" max-width="15%" height="Auto" title="Galias">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[14]['ubicacion']; ?>" id="img7" name="img7" max-width="15%" height="Auto" title="Estelar">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[15]['ubicacion']; ?>" id="img8" name="img8" max-width="15%" height="Auto" title="Isarco">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">                                
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[16]['ubicacion']; ?>" id="img9" name="img9"max-width="15%" height="Auto" title="Alqueria">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[17]['ubicacion']; ?>" id="img10" name="img10"max-width="15%" height="Auto" title="Fiholl">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[18]['ubicacion']; ?>" id="img11" name="img11" max-width="15%" height="Auto" title="Palmas">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[19]['ubicacion']; ?>" id="img12" name="img12" max-width="15%" height="Auto" title="Universidad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[20]['ubicacion']; ?>" id="img13" name="img13" max-width="15%" height="Auto" title="Masivo" >
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[21]['ubicacion']; ?>" id="img14" name="img14" max-width="15%" height="Auto" title="buenaventura">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[22]['ubicacion']; ?>" id="img15" name="img15" max-width="15%" height="Auto" title="Corpacero">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[23]['ubicacion']; ?>" id="img16" name="img16" max-width="15%" height="Auto" title="Bazaar">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[24]['ubicacion']; ?>" id="img17" name="img17" max-width="15%" height="Auto" title="arboleda">
                                <img src="../Assets/Img/clientes/<?php echo $imagenes[25]['ubicacion']; ?>" id="img18" name="img18" max-width="15%" height="Auto" title="Palmas del cesar">
                            </div>
                        </div>-->
                        </div>
                    </article>
                        </div>
                    </section>
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