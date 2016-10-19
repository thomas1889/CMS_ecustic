<?php
require_once ('../Modelo/Model.php');


$model = new modeloPrueba();

$contenido = $model->getContenido();

$imagenes = $model->getImagenes();

$articulos = $model->getArticles();

$imagenesC =$model->getImagenCliente(); 

//echo "<pre>";
//print_r($articulos);
//echo "</pre>";

//require_once ('../Vista/pruebaView.php');