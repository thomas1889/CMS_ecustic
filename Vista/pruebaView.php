<?php
require_once '../Controlador/Controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        echo $contenido[0]['contenido'];
        ?>

        <img width="30%" height="auto" src="../Assets/Img/pag/<?php echo $imagenes[0]['ubicacion']; ?>">
    </body>
</html>




