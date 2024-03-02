<?php

    $usuario = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['correo']=$usuario;

    include('db.php');

    $consulta = "SELECT*FROM usuarios WHERE correo = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_fetch_array( $resultado );

    if($filas['id_rol']==1){ //administrador
        header("location:admin.php");
    
    }elseif($filas["id_rol"]== 2){ //Empleado 
        header("location:emple.php");

    }elseif($filas["id_rol"]== 3){ //Cliente
        header("location:index.php");
    }else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>    
