<?php

include("db.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$idcategoria = $_POST['idcategoria'];
$activo = $_POST['activo'];

$consulta = "INSERT INTO `productos` (`nombre`, `precio`, `id_categoria`, `activo`) 
VALUES (NULL, '$nombre', '$precio', '$idcategoria', '$activo');";

$resultado = mysqli_query($conexion, $consulta) or die("error de creacion");

echo "registro exitoso";

mysqli_close($conexion);
header('location:emple.php');

?>