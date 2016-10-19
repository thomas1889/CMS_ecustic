<?php

include ("../controlador/conexion.php");

$tipo = $_REQUEST['tipo']; 
$titulo = $_REQUEST['titulo'];
$textoPrev = $_REQUEST['textoPrev'];

$imagenPrev = $_REQUEST['imagenPrev'];
$nombrePDF = $_REQUEST['nombrePDF'];

$fecha = date('Y-m-d H:i');


        $sql ="INSERT INTO imagen ( nombre, ubicacion)
        		VALUES ('".$tipo."', '".$imagenPrev."')";

            mysql_query($sql)or die(mysql_error());

            $id_Img1 = mysql_insert_id();//obtener el id de el ultimo query ejecutado.



        $sql3 = "INSERT INTO articulos (titulo, preview, cabezote, id_imagen, fecha, archivo)
            VALUES ('".$tipo."','".$titulo."','".$textoPrev."','".$id_Img1."','".$fecha."','".$nombrePDF."')";

        mysql_query($sql3)or die(mysql_error());

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertando imagen...</title>
    </head>
    <body>
  <script type="text/javascript">
            window.alert('Añadido  nuevo Articulo.');
            window.location = "http://ecustic.co/Modelo/Adm/index.php";
        </script>
    </body>
</html>