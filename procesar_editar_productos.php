<?php

include("db.php");

$ID = $_POST['txtId'];
$nombre = $_POST['txtNombre'];
$precio = $_POST['txtPrecio'];
$idcategoria = $_POST['txtIDcategoria'];
$activo = $_POST['txtActivo'];

mysqli_query($conexion,"UPDATE `productos` SET `nombre` = '$nombre', `precio` = '$precio', `id_categoria` = '$idcategoria',
 `activo` = '$activo' WHERE `productos`.`id` = '$ID';")or die("error de actualizar");



mysqli_close($conexion);
header('location:emple.php');

?>