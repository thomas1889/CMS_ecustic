<!DOCTYPE html>
<html lang="es">
    <head>
        
        <meta charset="UTF-8">

        <link rel="icon" href="Assets/Img/favicon.ico">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap.css"/>


        <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="Assets/bootstrap/dist/css/bootstrap-theme.min.css">

        <link rel="stylesheet" type="text/css" href="Assets/css/index.css"/>
   
        <script type="text/javascript" src="Assets/js/jquery11.js"></script>
        <script type="text/javascript" src="Assets/js/modernizer.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.js"></script>
        <title>Ecustic</title>


        <!-- Incluimos la libreria jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Incluimos el plugin -->
        <script src="Assets/js/bjqs.min.js"></script>
        <script src="Assets/js/script.js"></script>
         
        <!-- Importamos nuestra hoja de estilos CSS -->
        <link rel="stylesheet" href="Assets/css/estilos.css" />


    </head>
    <body>

        <div class="row-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <a href="index.php"><img class="logo" name src="Assets/Img/resources/logo-ecustic.png" title="Logo_Ecustic"></a>
                    <img class="header" name src="Assets/Img/resources/header.png" title="header">
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
                            <a href="#" target="_blank"><img class="networks" src="Assets/Img/complements/fb.png" name="" id="" alt="Facebook" title="Facebook"></a>                    
                            <a href="#" target="_blank"><img class="networks" src="Assets/Img/complements/twitter.png" name="" id="" alt="Twitter" title="Twitter"></a>
                        </div>
                        <div class="buscar">

                            <form id="buscador" method="POST" name="buscador" action="" class="navbar-form navbar-right" role="search">
                                            <button type="submit" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                            <div class="form-group">
                                                <input type="text" id="buscar" class="form-control" placeholder="buscar...">
                                            </div>
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
                    <!--<div id="menu">
                                <nav>
                                    <ul class="pro">
                                        <li class="pro2"><a href="Vista/Empresa.php">Empresa</a></li>

                                        <li class="pro2"><a href="index.php#nosotros">Servicios</a>
                                            <ul>
                                                <li><a class="subm" href="Vista/Arquitectonica.php">Acústica Arquitectónica</a></li>
                                                <li><a class="subm"href="Vista/Ambiental.php">Acústica Ambiental</a></li>
                                                <li><a class="subm" href="Vista/Industrial.php">Acústica Industrial</a></li>
                                            </ul>
                                        </li>

                                        <li class="pro2"><a href="#">Productos</a>
                                            <ul>
                                                <li><a class="subm" href="Vista/Pro_acusticos.php">Productos > Paneles Acústicos</a></li>
                                                <li><a class="subm" href="Vista/Pro_paneles.php">Productos > Espumas Acústicas</a></li>
                                            </ul>
                                        </li>

                                        <li class="pro2"><a href="Vista/Pro_galerias.php">Proyectos</a></li>


                                        <li class="pro2"><a href="Vista/Articulos.php">Artículos</a></li>

                                        <li class="pro2"><a href="Vista/Clientes.php">Clientes</a></li>

                                        <li class="pro2" style="border-right-style:hidden;"><a href="Vista/Contacto.php">Contacto</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>-->


                        <!--    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                                            <span class="sr-only">Desplegar / Ocultar Menu</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a href="Vista/Empresa.php" class="navbar-brand">Empresa</a>
                                    </div>
                                    
                                    <div class="collapse navbar-collapse" id="navegacion-fm">
                                        <ul class="nav navbar-nav">                                            
                                            <li class="dropdown" class="active">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                                Servicios<span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="Vista/Arquitectonica.php">Acústica Arquitectónica</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="Vista/Ambiental.php">Acústica Ambiental</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="Vista/Industrial.php">Acústica Industrial</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                                    Productos <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="Vista/Pro_acusticos.php">Paneles Acústicos</a></li>
                                                    <li><a href="Vista/Pro_paneles.php">Espumas Acústicas</a></li>
                                                </ul>
                                            </li>
                                            
                                            <div class="btn-group">
                                              <button type="button" class="btn">Action</button>
                                              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>

                                            <li><a href="Vista/Pro_galerias.php">Proyectos</a></li>
                                            <li><a href="Vista/Articulos.php">Artículos</a></li>
                                            <li><a href="Vista/Clientes.php">Clientes</a></li>
                                            <li style="border-right-style:hidden;"><a href="Vista/Contacto.php">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                    </div> -->

                <div class="col-md-2">
                </div>
            </div>

            <div class="row">

                <div class="col-md-2">
                </div>

                <div class="col-md-8" id="div1">

                    <div id="slider">
                        <ul class="bjqs">
                            <li><img src="Assets/Img/pag/home1.png" /></li>
                            <li><img src="Assets/Img/pag/home2.png" /></li>
                            <li><img src="Assets/Img/pag/home3.png" /></li>
                            <li><img src="Assets/Img/pag/home4.png" /></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                </div>

                <div class="col-md-8" id="div1">
                    <div class="quienes_somos">
                        <a href="#" target="_blank"><button>¿Quienes Somos?</button></a>
                        <p>Somos una empresa Colombiana jóven dedicada al desarrollo de proyectos de Ingeniería acústica, con amplia experiencia en soluciones de ruído ambiental, ruído industrial y acústica aquitectónica.</p>
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
                        <img src="Assets/Img/resources/linea.png" width="98%">
                        <section>
                        	<div class="row">
	                        	<div class="col-md-1"></div>
	                        	<div class="col-md-5" id="acustica"> 
		                            <img src="Assets/Img/pag/Acustica_Arq.png">
	                            </div>
	                            <div class="col-md-5" id="acustica">
		                            <h1>Acústica Arquitectónica</h1>
		                            <hr/>
		                            <p>Acústica Arquitectónica: Los Objetivos de los estudios de la acústica arquitectónica son el aislamiento de riudo y la calidad sonora al initerior de los espacios. El aislamiento sonoro consite en ...</p>
		                            <a href="Vista/Arquitectonica.php" target="_blank"><img src="Assets/Img/complements/plus.png"></a>
		                        </div>
		                        <div class="col-md-1"></div>
	                        </div>
                        </section>

                        <section>
                           <div class="row">
	                        	<div class="col-md-1"></div>
	                        	<div class="col-md-5"  id="ambiental" > 
		                            <img style="padding-top:1em;" src="Assets/Img/pag/Acustica_Am.png">
	                            </div>
	                            <div class="col-md-5" id="ambiental">
		                            <h1>Acústica Ambiental</h1>
		                            <hr/>
		                            <p>Los estudios de ruido ambiental permiten evaluar y diagnosticar los niveles de ruido emitidos por diversas fuentes y espacios, los cuales en muchas ocasiones pueden afectar zonas sensibles. En tales casos también se estudia...</p>
		                            <a href="Vista/Ambiental.php" target="_blank"><img src="Assets/Img/complements/plus.png"></a>
		                        </div>
		                        <div class="col-md-1"></div>
	                        </div>
                        </section>

                        <section>
                            <div class="row">
	                        	<div class="col-md-1"></div>
	                        	
		                        	<div class="col-md-5" id="industrial"> 
			                            <img src="Assets/Img/pag/Acustica_Ind.png">
		                            </div>
		                            <div class="col-md-5" id="industrial">
			                            <h1>Acústica Industrial</h1>
			                            <hr/>
			                            <p>Los objetivos de los estudios de acústica arquitectónica son el aislamiento de ruido y la calidad sonora al interior de los espacios.</p>
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
                                <img src="Assets/Img/clientes/postobon.png" id="img1" name="img1" width="120px" height="50px" title="Postobón">
                                <img src="Assets/Img/clientes/taborda.png" id="img2" name="img2" width="120px" height="50px" title="Taborda">
                                <img src="Assets/Img/clientes/segurosbolivar.png" id="img3" name="img3" width="120px" height="50px" title="Seguros_Bolivar">
                                <img src="Assets/Img/clientes/cinepolis.png" id="img4" name="img4" width="120px" height="50px" title="cinepolis">
                                <img src="Assets/Img/clientes/ladevi.png" id="img5" name="img5" width="120px" height="50px" title="Ladevi">
                                <img src="Assets/Img/clientes/Galias.png" id="img6" name="img6" width="120px" height="50px" title="Galias">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="Assets/Img/clientes/Estelar.png" id="img7" name="img7" width="120px" height="50px" title="Estelar">
                                <img src="Assets/Img/clientes/isarco.png" id="img8" name="img8" width="120px" height="50px" title="Isarco">
                                <img src="Assets/Img/clientes/Alqueria.png" id="img9" name="img9" width="120px" height="50px" title="Alqueria">
                                <img src="Assets/Img/clientes/fiholl.png" id="img10" name="img10" width="120px" height="50px" title="Fiholl">
                                <img src="Assets/Img/clientes/palmacesar.png" id="img11" name="img11" width="120px" height="50px" title="Palmas">
                                <img src="Assets/Img/clientes/udefaca.png" id="img12" name="img12" width="120px" height="50px" title="Universidad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="Assets/Img/clientes/masivo.png" id="img13" name="img13" width="120px" height="50px" title="Masivo" >
                                <img src="Assets/Img/clientes/buenaventura.png" id="img14" name="img14" width="120px" height="50px" title="buenaventura">
                                <img src="Assets/Img/clientes/corpacero.png" id="img15" name="img15" width="120px" height="50px" title="Corpacero">
                                <img src="Assets/Img/clientes/bazaar.png" id="img16" name="img16" width="120px" height="50px" title="Bazaar">
                                <img src="Assets/Img/clientes/arboleda.png" id="img17" name="img17" width="120px" height="50px" title="arboleda">
                                <img src="Assets/Img/clientes/palmasdelcesar.png" id="img18" name="img18" width="120px" height="50px" title="Palmas del cesar">
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
                                    <img src="Assets/Img/complements/email.png"><span>info@ecustic.co</span><br/>
                                    <img src="Assets/Img/complements/location.png"><span>Cra 15 #82-08 Oficina</span><br/>
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



    </body>
</html>