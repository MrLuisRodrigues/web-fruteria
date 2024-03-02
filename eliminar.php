<?php

include("db.php");

$ID = $_POST["txtID"];
mysqli_query($conexion,"DELETE FROM usuarios WHERE id = '$ID'") or die("error al eliminar");

mysqli_close($conexion);
header("location:admin.php");

?>