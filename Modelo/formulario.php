<?php
include ('Adm/controlador/conexion.php');

$mail = '"Ecustic"';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];
$mensajeC = $_POST['mensajeC'];
$fecha = date('Y-m-d H:i');

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = " \r\n";

$mensaje = 'Este mensaje fue enviado por: 
				Nombre: ' . $nombre . '
				Su telefono es: ' . $telefono . '
				Su Correo es:  ' . $correo . '
				El mensaje es  ' . $mensajeC . '';

$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@ecustic.co';
$asunto = 'Ecustic';
mail($para, $asunto, utf8_decode($mensaje)/* , $header */);



$sql = "insert into registros (nombre, correo, celular, telefono, mensaje, fecha)
		values ('" . $nombre . "','" . $correo . "','" . $celular . "','" . $telefono . "','" . $mensajeC . "','" . $fecha . "')";


mysql_query($sql) or die(mysql_error());
mysql_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gracias</title>
    </head>


    <body>
        <script language="JavaScript">
            window.alert('Sus Datos fueron Recibidos,\n Gracias por Escribirnos.\n\n Atentamente: Departamento de Ecustic.');
            window.location = "http://ecustic.co/";
        </script>
    </body>
</html>