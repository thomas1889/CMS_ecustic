<?php
include 'conexion.php';
$jerarquia= $_REQUEST['id_imagen'];
$pagina= $_REQUEST['nombre'];
$jerarquia= $_REQUEST['id_imagen'];



$sql = "INSERT INTO imagen (id_imagen, nombre, ubicacion)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
