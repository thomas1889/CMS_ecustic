<?php
require_once ('Modelo/pruebaModel.php');
//require_once ('Modelo/pruebaModel.php');

$model = new modeloPrueba();

$contenido = $model->getContenido();

$imagenes = $model->getImagenes();

$imagenesC =$model->getImagenCliente(); 
//echo "<pre>";
//print_r($contenido);
//echo "</pre>";

//require_once ('../Vista/pruebaView.php');


