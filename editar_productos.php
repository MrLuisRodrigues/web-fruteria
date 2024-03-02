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
                $sql = "SELECT * FROM productos WHERE id = '$ID'";
                $result = mysqli_query($conexion,$sql);

                while($mostrar = mysqli_fetch_array($result)){

                
                 ?>
                    <form action="procesar_editar_productos.php" method="POST">
                        <h2>Editar Producto</h2>
                        <input type="hidden" value="<?php echo $mostrar['id']?>" name="txtId">
                        <p>Nombre</p>
                        <input type="text" value="<?php echo $mostrar['nombre']?>" name="txtNombre">
                        <p>Precio</p>
                        <input type="text" value="<?php echo $mostrar['precio']?>" name="txtPrecio">
                        <p>ID Categoria</p>
                        <input type="text" value="<?php echo $mostrar['id_categoria']?>" name="txtIDcategoria">
                        <p>Activo</p>
                        <input type="text" value="<?php echo $mostrar['activo']?>" name="txtActivo">
                        
                    <?php
                        }
                    ?>
                    <br>
                    <input type="submit" value="Actualizar">
                    
                    </form>    

                </tbody>
            </table>        
        </div>  
    </div>       
</body>




</html>




