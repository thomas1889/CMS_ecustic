<?php
include ("../../Controlador/conexion.php");

$username = $_POST['mail'];
$password = md5($_POST['password']);

$sql = "
select  id,
        nombre,
        usuario,
        contrasena,
        rol
        from empleado
        where usuario = '" . $username . "'
        and contrasena = '" . $password . "' ";

$query = mysql_query($sql);

if (mysql_num_rows($query) == 0) {
    header('location:../Modelo/Adm/index.php');
    //header('location:loginFail.php');
    
} else {
    session_start();
    $rows = mysql_fetch_array($query);
    $_SESSION['usuario'] = $rows['usuario'];
    $_SESSION['rol'] = $rows['rol'];
    header('location:../Modelo/Adm/index.php');
}
?>