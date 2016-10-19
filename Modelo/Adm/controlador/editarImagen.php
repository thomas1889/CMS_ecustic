<?php
include ("../controlador/conexion.php");
$id_imagen = $_POST['id_imagen'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../Assets/Img/favicon.ico">
        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Satisfy'/>
        <script type="text/javascript" src="../../../Assets/js/jquery11.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/myfunctions.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Editando Producto...</title>
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
                        <li class="active"><a href="../index.php">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Editar Página<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../empresa.php">Empresa</a></li>

                                <li><a href="../Productos.php">Productos</a></li>

                                <li class="dropdown-submenu"><a href="#">Servicios</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../ser_ambiental.php">Ambiental</a></li>
                                        <li><a href="../ser_arquitectonico.php">Arquitectónico</a></li>
                                        <li><a href="../ser_industrial.php">Industrial</a></li>
                                    </ul>
                                </li>

                                <li><a href="../articulos.php">Artículos</a></li>
                                <li><a href="../Clientes.php">Clientes</a></li>

                            </ul>
                        </li>

                        <li><a href="#">Preguntas Frecuentes</a></li>
                    </ul>
                    </ul>

                    <form action="" class="navbar-form navbar-right" role="search">
                        <button type="submit" class="btn btn-primary">
                            <label>Cerrar Sesión [Usuario]</label> <span class="glyphicon glyphicon-off"></span>
                        </button> 
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <div class="row-fluid">
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <?php
                        $sql = "select id_imagen, nombre, ubicacion
				from imagen
                                where id_imagen = " . $id_imagen;
                        $query = mysql_query($sql) or die(mysql_error());
                        $imagenes = mysql_fetch_array($query);
                        ?>
                        <form id="formi" name="formi" method="POST" action="imagenEditada.php">
                            <table class='table table-hover' style='text-align:justify;'>
                                <tr>
                                    <td>
                                        <label>Jerarquía:</label>
                                    </td>
                                    <td>
                                        <label>Página en la que aparece</label>
                                    </td>
                                    <td>
                                        <label>Vista previa</label>
                                    </td>
                                    <td>
                                        <label>Actualizar Nombre y extensión del archivo de imágen.</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" id="Id_texto" name="Id_imagen" readonly value="<?php echo $imagenes['id_imagen']; ?>">
                                    </td>

                                    <td>
                                        <input type="text" id="Titulo" name="Titulo" readonly value="<?php echo $imagenes['nombre']; ?>">
                                    </td>

                                    <td>
                                        <img width="350px" height='auto' src="../../../Assets/Img/pag/<?php echo $imagenes['ubicacion'] ?>">
                                        <br><br><br><hr>
                                        <span>Medidas Recomendadas para la imagen del articulo: 
                                            <br>
                                            <strong>350 Ancho X 250 pixeles de Alto máximo</strong>
                                        </span>
                                        <hr>
                                    </td>     

                                    <td>
                                        <input type="text" id="ruta" name="ruta" value="<?php echo $imagenes['ubicacion']; ?>">
                                    </td>     

                                    <td>
                                        <input type="submit" class="btn btn-success" id="envian" name="envian" value="Actualizar" onclick="actuar();" >
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <input type="hidden" id="nombretexto" name="nombretexto" value="<?php echo $imagenes; ?>">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
