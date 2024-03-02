<?php

include("db.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$consulta = "INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `contraseña`, `id_rol`) 
VALUES ('$nombre', '$apellido', '$usuario', '$contraseña', '3');";

$resultado = mysqli_query($conexion, $consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);
header('location:admin.php');

?>