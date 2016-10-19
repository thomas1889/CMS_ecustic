<?php
require_once ('/modelo/amModel.php');

$model = new modeloPrueba();

$contenido = $model->getContenido();

$imagenes = $model->getImagenes();
