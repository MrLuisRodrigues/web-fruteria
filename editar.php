<?php

include("db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion Empleado</title>
    <link rel="stylesheet" href="editar.css">
   

</head>
<body>
    <div class="container">
        <div class="container-table">
            <table class="table">
                <tbody>

                <?php

                $ID = $_GET["ID"];
                $sql = "SELECT * FROM usuarios WHERE id = '$ID'";
                $result = mysqli_query($conexion,$sql);

                while($mostrar = mysqli_fetch_array($result)){

                
                 ?>
                    <form action="procesar_editar.php" method="POST">
                        <h2>Editar Cliente</h2>
                        <input type="hidden" value="<?php echo $mostrar['id']?>" name="txtId">
                        <p>Nombre</p>
                        <input type="text" value="<?php echo $mostrar['nombre']?>" name="txtNombre">
                        <p>Apellido</p>
                        <input type="text" value="<?php echo $mostrar['apellido']?>" name="txtApellido">
                        <p>Correo</p>
                        <input type="text" value="<?php echo $mostrar['correo']?>" name="txtCorreo">
                        <p>Contraseña</p>
                        <input type="text" value="<?php echo $mostrar['contraseña']?>" name="txtContraseña">
                        <p>ID Rol</p>
                        <input type="text" value="<?php echo $mostrar['id_rol']?>" name="txtIDrol">
                        <br>
                        
                    <?php
                        }
                    ?>
                    <input class="btn-success" type="submit" value="Actualizar">
                    
                    </form>    

                </tbody>
            </table>        
        </div>  
    </div>       
</body>




</html>




