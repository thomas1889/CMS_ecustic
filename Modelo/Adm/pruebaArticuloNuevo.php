<?php
session_start();

include ('controlador/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="icon" href="../../Assets/Img/favicon.ico">
        <title>Gestor de Contenido</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <style type="text/css">

            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
            table tr td{
                padding-left:10px;
                padding-right:10px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                            <span class="sr-only">Desplegar / Ocultar Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a href="#" class="navbar-brand">Ecustic</a>-->
                    </div>
                    <!-- Inicia Menu -->
                    <div class="collapse navbar-collapse" id="navegacion-fm">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Editar Página<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="empresa.php">Empresa</a></li>
                                    <li><a href="Productos.php">Productos</a></li>

                                    <li class="dropdown-submenu"><a href="#">Servicios</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="ser_ambiental.php">Ambiental</a></li>
                                            <li><a href="ser_arquitectonico.php">Arquitectónico</a></li>
                                            <li><a href="ser_industrial.php">Industrial</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="galeria.php">Galería</a></li>
                                    <li><a href="articulos.php">Artículos</a></li>
                                    <li><a href="Clientes.php">Clientes</a></li>
                                </ul>
                            </li>

                            <li><a href="Contactos.php">Ver Base de datos de los contactos</a></li>
                            <li><a href="faq.php">Preguntas Frecuentes</a></li>
                        </ul>
                        </ul>

                        <form action="" class="navbar-form navbar-right" role="search">
                            <a href="../../index.php"><button type="button" class="btn btn-primary">
                                    <label>Cerrar Sesión [Usuario]</label> <span class="glyphicon glyphicon-off"></span>
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <section class="jumbotron">
            <div class="container">
                <h2><a href="index.php"><img src="../../Assets/Img/resources/logo-ecustic.png" width="200px" height="auto"></a></h2>
                <p>Adminsitrador de Contenidos</p>
            </div>
        </section>

        <section class="main container">
            <div class="row">
                <section class="posts col-md-12">

                    <article class="post clearfix">

                        <section>


                            <h2>Añadir un nuevo articulo <span style="color:red;"> Vista previa</span> <br> </h2><br/><br/>
                            

                            <form id="FnuevoArt" name="FnuevoArt" method="POST" action="modelo/guardarNuevoArt.php">
                                <table class='table table-hover' style='text-align:justify;'>
                                    <tr>
                                        <!--<td>Id Articulo</td>-->
                                        <td>Articulo Número</td>
                                        <td>Titulo del Artículo</td>
                                        <td>Texto Vista Previa del Artículo</td>
                                    </tr>
                                    <tr>
                                        <!--<td><textarea width="200px" height="200px"></textarea></td>-->
                                        <td><input type="text" id="tipo" name"tipo" placeholder="Ej: articulo5" required></td>
                                        <td><input type="text" id="titulo" name"titulo" placeholder="Ej: Diseño Acústico." required></td>
                                        <td><textarea width="400px" height="400px" id="textoPrev" name="textoPrev" placeholder="Ingrese su texto de máximo 250 cáracteres." required></textarea></td>
                                    </tr>
                                </table>
                                     <br>
                                     <br>
                                    <h2>Insertar <span style="color:red;">Imagen Vista Previa</span> del Artículo.</h2>
                                <table class='table table-hover' style='text-align:justify;'>
                                    <tr>
                                        <td>Ubicación de la imágen</td>
                                        <td>Nombre de la Imagen de la Vista Previa</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="nombreImg" name="nombre" placeholder="Ej: articulo5" required></td>
                                        <td><input type="text" id="imagenPrev" name"imagenPrev" placeholder="Ej: imagen2.jpg" required></td>
                                    </tr>
                                </table>
                                <br>
                                <br>

                                <h2>Insertar <span style="color:red;">Imagen del Articulo Completo</span>.</h2>
                                <table class='table table-hover' style='text-align:justify;'>
                                    <tr>
                                        <td>Ubicación de la imágen</td>
                                        <td>Nombre de la Imagen para el Artículo</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="nombreArt" name="nombreArt" placeholder="Ej: articulo5" required></td>
                                        <td><input type="text" id="imagenArt" name"imagenArt" placeholder="Ej: imagen3.png" required></td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                <h2>Insertar Texto y nombre del<span style="color:red;">Articulo.</span>.</h2>
                                <table class='table table-hover' style='text-align:justify;'>
                                    <tr>
                                        <td>Texto del Articulo Completo</td>
                                        <td>Nombre del PDF</td> 
                                    </tr>
                                    <tr>
                                        <td><textarea id="textoArt" name="textoArt" style="min-width:500px;height:300px;" required></textarea></td>
                                        <td><input type="text" id="nombrePDF" name="nombrePDF" required>
                                            <br><br><br>
                                            <button type="submit" class="btn btn-success">Guardar Todo</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>

                        </section>

                    </article>

                </section>

            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <p>Optima TM 2015.</p>

                    </div>
                </div>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myfunctions.js"></script>

    </body>
</html>