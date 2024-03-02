<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="productos.css">
</head>

<body>
    
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/config/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="@" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        
    </header>

    <div class="product container">
    <div class="col">
            <?php foreach ($resultado as $row) { ?>
                <div class="product-content">
                    <div class="product">
                        
                        <?php

                            $id = $row['id'];
                            $imagen = "imagenes/productos/$id/principal.png";

                            if(!file_exists($imagen)) {
                                $imagen = "imagenes/NoImagen.jpeg";
                            }    

                            ?>
                            <img src="<?php echo $imagen; ?>">
                            <div class="product-txt">
                                <h3><?php echo $row['nombre']; ?></h3>
                                <p class="precio">$ <?php echo number_format($row['precio'], 2, ',', '.'); ?></p>
                                <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar</a>
                            </div>
                    </div>      
                </div>
            <?php } ?>
        </div>  

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                    <li><a href="@">lorem</a></li>
                </ul>
            </div>

        </div>

    </footer>


</body>
</html>