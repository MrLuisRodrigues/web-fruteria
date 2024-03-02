<?php

include("db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion Empleado</title>
    <link rel="stylesheet" href="admin.css">
    

</head>
<body>

    <header class="header">
        <div class="menu-container">
            <a href="index.php" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/config/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="registro_admin.php">Nuevo Cliente</a></li>
                </ul>
            </nav>
        </div>
        
    </header>


    <div class="container">
        <div class="container-table">
            <table class="table">
                <h3>ID Rol = 1 Admin<br>
                ID Rol = 2 Empleado<br>
                ID Rol = 3 Cliente<br>
                </h3>
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">ID Rol</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <?php
                    $sql = "SELECT * FROM usuarios";
                    $result = mysqli_query($conexion,$sql);

                    while($mostrar = mysqli_fetch_array($result)){

                    
                ?>
                
                <tbody>
                    <tr>
                    <th><?php echo $mostrar['id']?></th>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['apellido']?></td>
                    <td><?php echo $mostrar['correo']?></td>
                    <td><?php echo $mostrar['contraseña']?></td>
                    <td><?php echo $mostrar['id_rol']?></td>
                    <!---- Editar---->
                    <td>
                        <a class="btn-success" href="editar.php?ID=<?php echo $mostrar['id']?>">Editar</a>
                    
                    <!---- Eliminar---->
                    
                        <form action="eliminar.php" method="POST">
                            <input type="hidden" value="<?php echo $mostrar ['id']?>" name="txtID" reaadonly>
                            <td><input class="btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
                        </form>
                    </td>

                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>        
        </div>  
    </div>       
</body>
</html>




