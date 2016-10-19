<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>formulario</title>

        <script language="JavaScript">

            setTimeout("update()", 3000);

            function update() {
                document.location.href = "";
            }
        </script>
    </head>

    <body>
            

        <?php
        include ('../Controlador/conexion.php');

        $mail = '"KW"';
        $ciudad =$_POST['ciudad'] ;
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $mensajeC = $_POST['comentarios'];
        $fecha = date('Y-m-d H:i');
        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        $mensaje = " \r\n";

        $mensaje = '
				Este mensaje fue enviado por: 
				Nombre: ' . $nombre . '
				Su telefono es: ' . $telefono . '
				Su Correo es:  ' . $correo . '
				El mensaje es  ' . $mensajeC . ' 
				';

        $mensaje .= "Enviado el " . date('d/m/Y', time());
        $para = 'santiagobarrios08@gmail.com';
        $asunto = 'KW';
        mail($para, $asunto, utf8_decode($mensaje)/* , $header */);

/* 

        $sql = "insert into registros (nombre, correo, telefono, mensaje, fecha)
		values ('" . $nombre . "','" . $correo . "','" . $telefono . "','" . $mensajeC . "','" . $fecha . "')";


        mysql_query($sql) or die(mysql_error());
  */      
        
        /* header('location:../index.html'); */
        ?>

    </body>
</html>