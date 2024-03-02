<?php

include("db.php");

$ID = $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];
$contraseña = $_POST['txtContraseña'];
$idrol = $_POST['txtIDrol'];

mysqli_query($conexion,"UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido', `correo` = '$correo', 
`contraseña` = '$contraseña', `id_rol` = '$idrol' WHERE `usuarios`.`id` = '$ID';")or die("error de actualizar");

mysqli_close($conexion);
header('location:emple.php');

?>