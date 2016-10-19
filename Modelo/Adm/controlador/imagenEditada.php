<?php
include ("../controlador/conexion.php");


$jerarquia = $_POST['Id_imagen'];
$nombre = $_POST['Titulo'];
$ruta = $_POST['ruta'];

$sql = "update imagen
        set id_imagen='" . $jerarquia . "', nombre ='" . $nombre . "', ubicacion ='" . $ruta . "'
        where id_imagen = '" . $jerarquia . "'";

$query = mysql_query($sql) or die(mysql_error());
?>
<body>
    <script type="text/javascript">
        window.alert('Imagen actualizada correctamente');
        window.location = "http://ecustic.co/Modelo/Adm/index.php";
    </script>
</body>