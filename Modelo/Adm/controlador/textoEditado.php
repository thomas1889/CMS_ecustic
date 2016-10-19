<?php
include ("../controlador/conexion.php");

$jerarquia = $_POST['Id_texto'];
$pagina = $_POST['Titulo'];
$tipo = $_POST['Tipo'];
$contenido = $_POST['Contenido'];

$sql = "update texto
        set id_texto='" . $jerarquia . "', titulo ='" . $pagina . "', tipo ='" . $tipo . "', contenido ='" . $contenido . "'
        where id_texto = '" . $jerarquia . "'";

$query = mysql_query($sql) or die(mysql_error());
?>
<body>
    <script type="text/javascript">
        window.alert('Texto actualizado correctamente');
        window.location = "http://ecustic.co/Modelo/Adm/index.php";
    </script>
</body>