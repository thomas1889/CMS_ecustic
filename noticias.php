<!DOCTYPE html>

<html lang="es">
    <head>

        <meta charset="UTF-8">

        <meta content="" name="keywords" />

        <link rel="icon" href="Assets/Img/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.css"/>


        <!--<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>-->

        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">


        <link rel="stylesheet" type="text/css" href="Assets/css/index.css"/>

        <title>Noticias</title>

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
                    <a href="index.php"><img class="logo" name src="Assets/Img/pag/logo.png" title="Logo_Ecustic"></a>

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
                            <a href="https://www.facebook.com/luz.a.sanchez.121" target="_blank"><img class="networks" src="Assets/Img/pag/facebook.png" name="" id="" alt="Facebook" title="Facebook"></a>                    
                            <a href="https://twitter.com/luzrincons" target="_blank"><img class="networks" src="Assets/Img/pag/twitter.png" name="" id="" alt="Twitter" title="Twitter"></a>
                            <a href="https://instagram.com/luza2480/" target="_blank"><img class="networks" src="Assets/Img/pag/instagram.png" name="" id="" alt="instagram" title="instagram"></a>
                            <a href="#" target="_blank"><img class="networks" src="Assets/Img/pag/youtube.png" name="" id="" alt="youtube" title="youtube"></a>
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
                                    <li id="listaEcustic"><a href="index.php"><img src="Assets/Img/pag/linea_roja.png" width="90%"> Inicio <span class="sr-only">(current)</span></a></li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li id="listaEcusticSub"><a href="perfil_Lab.php">Perfil Laboral</a></li>
                                            <li id="listaEcusticSub"><a href="perfil_Pro.php">Perfil Profesional</a></li>
                                        </ul>
                                    </li>
                                    <li id="listaEcustic"><a href="contacto.php">Contacto</a></li>

                                    <li id="listaEcustic"><a href="propuestas.php">Propuestas</a></li>
                                    <li id="listaEcustic"><a href="index.php#noticias">Noticias</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-2">
            </div>

            <div class="col-md-8" id="propuesta">
                <div class="col-sm-6" style="text-align: left; padding-left: 10%; border-right: 1px solid red; ">
                    <span>
                        <h3>MIEMBRO DEL DIRECTORIO DISTRITAL DE BOGOTA PARTIDO DE LA U</h3>
                    </span>

                </div>
                <div class="col-sm-6" style="text-align: right; padding-right: 10%;">

                </div>
            </div>
            <div class="col-md-2">
            </div>

        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4" id="propuestas">
                <p> 
                    1.
                    Luz Angela Rincón es miembro del Directorio Distrital del Partido de la U.<br><br>

                    2.
                    CELEBRACION DE LA VIRGEN DEL CARMEN EN USAQUEN CON LUZ ANGELA RINCON CANDIDATA EDIL USAQUEN
                    Apoyamos a la Reina del Barrio La Esperanza en la fiesta de la Virgen del Carmen y nuestra reina gano!!!<br><br>
                    3.
                    ENCUENTRO DE EDILES DEL PARTIDO DE LA U CON RAFAEL  PARDO CANDIDATO ALCALDIA DE BOGOTA
                    Luz Angela Rincón con Rafael Pardo…<br>
                </p> 
                
            </div>
            <div class="col-md-4">
                <img src="Assets/Img/pag/asamblea_social.jpg" width="350px" height="auto" alt=""><br><br><br>
                <img src="Assets/Img/pag/pardo.jpg" width="350px" height="auto" alt="">
                <br>
                <br><br>
                <br>
                <br>
            </div>

            <div class="col-md-2">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-4">
                <img src="Assets/Img/pag/IMG1.jpg" width="350px" height="auto" alt=""><br><br><br>
                <img src="Assets/Img/pag/img2.jpg" width="350px" height="auto" alt="">
                <br>
                <br>
                <br>
                <br><br>
            </div>

            <div class="col-md-4" id="propuestas">
                <h1>CELEBRANDO EL DIA DE LAS MADRES CON LUZ ANGELA RINCON Y RICARDO CORREA EN LOS CERROS NORORIENTALES</h1>
                <br><br>

                <p> 
                    Un día muy especial con las madres del barrio La Perla y sus alrededores, Ricardo Correa candidato al Concejo por el partido de la U con el número 45, compartió con las abuelas y madres de la comunidad, la candidata a Edil del partido de la U Luz Angela Rincón con el número 85, disfrutaron de una tarde amena celebrando el día de la Madre.<br><br>

                    5. APOYANDO LA INFANCIA
                    Nuestra reina del Barrio La Esperanza contó con el apoyo de Ricardo Correa candidato al Concejo de Bogotá y con la candidata Edil Luz Angela Rincón. Adicional los candidatos apoyaron el reinado del la Virgen del Carmen con el deseo de apoyar la infancia y la adolescencia en la localidad. Se presentaron siete reinas de diferentes barrios de la localidad de Usaquén.<br><br>

                    6. INSCRIPCION DE LA CANDIDATURA EN LA REGISTRADURIA AUXILIAR DE USAQUEN
                    Todos los miembros en calidad de candidatos realizaron la inscripción oficial ante la Registraduría Auxiliar de la Localidad de Usaquén. Luz Angela Rincón queda oficialmente Candidata del Partido de la U con el numero 85.<br><br>

                </p> 
            </div>

            <div class="col-md-2">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <footer>
                    <div class="row">
                        <div class="col-sm-5" style="border-right: 1px solid #ffffff;">
                            <img src="Assets/Img/pag/logo_footer.png">
                        </div>
                        <div class="col-sm-3" style="font-size: 1.5em;text-align: left;padding-left: 8%;border-right: 1px solid #ffffff;">
                            <p>
                                Inicio
                            </p>
                            <p>
                                Perfil
                            </p>
                            <p>
                                Noticias
                            </p>
                            <p>
                                Contacto
                            </p>
                            <p>
                                Propuestas
                            </p>
                            <p>
                                Redes Sociales
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <form name="" id="forContact" action="#" method="POST">
                                <h2>Contacto</h2><br>
                                <label>Nombre:</label>
                                <input type="text" name="" id="">
                                <label>Apellido:</label>
                                <input type="text" id="" name=""><br>
                                <label>Email:</label>
                                <input type="mail" id="" name="">
                                <label>Teléfono:</label>
                                <input type="text" id="" name=""><br>
                                <label>Comentario:</label><br>
                                <textarea id="" name=""></textarea><br>
                                <button class="btn btn-danger">Envíar</button>
                            </form>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </div>
    <script>
        function eviar(buscar) {
            document.getElementById('buscar').value = buscar;
            document.getElementById('buscador').submit();
        }
    </script>

    <script type="text/javascript" src="Assets/js/jquery11.js"></script>
    <script type="text/javascript" src="Assets/js/modernizer.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.js"></script>
    <!-- Incluimos la libreria jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Incluimos el plugin -->
    <script src="Assets/js/bjqs.min.js"></script>
    <script src="Assets/js/script.js"></script>


</body>
</html>