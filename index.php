<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Eliana ML</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
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
            
                    <li class="submenu">
                        <img src="imagenes/config/user.png" id="img-user" alt="user">
                        <div id="user">
                            <table id="lista-user">
                                <thead>
                                    <tr>
                                        <th><a href="registro.php" id="registro" class="btn-2">Registrarte</a></th>
                                        <th><a href="login.php" id="login" class="btn-2">Ingresar</a></th>
                                     </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </li>
                    
                    </div>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <span>Ofertas</span>
                <h1>Frutas y Verduras</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. At voluptas delectus iste laborum laudantium consectetur vero? Aliquid iste odit quaerat ab placeat officiis, necessitatibus, exercitationem, sed cupiditate aliquam praesentium fugiat!
                </p>
                <a href="@" class="btn-1">Informacion</a>
            </div>   
            <div class="header-img">
                <img src="imagenes/publicidad/po1.png">
            </div>
        </div>
        
    </header>

    <section class="informacion container">

        <div class="informacion-content">

            <div class="informacion-1">
                <img src="i1.svg">
                <h3>Lorem ipsum </h3>
                <p>
                    Dolor sit amet consectetur adipisicing 
                </p>
            </div>

            <div class="informacion-1">
                <img src="i2.svg">
                <h3>Lorem ipsum </h3>
                <p>
                    Dolor sit amet consectetur adipisicing 
                </p>
            </div>

            <div class="informacion-1">
                <img src="i3.svg">
                <h3>Lorem ipsum </h3>
                <p>
                    Dolor sit amet consectetur adipisicing 
            </div>

        </div>
    </section>

    <section class="ofert container">

        <div class="ofert-1">
            <img src="imagenes/productos/10/principal.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="imagenes/productos/8/principal.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="imagenes/productos/12/principal.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="imagenes/productos/14/principal.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>

    </section>

    <main class="product container" id="lista-1">
        <h2>Productos destacados</h2>
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
    </main>

    <section class="service">

        <div class="service-1">
            <img class="store" src="imagenes/productos/1/principal.png">
        </div>
        <div class="service-2">
            <img class="store" src="imagenes/productos/2/principal.png">
        </div>
        <div class="service-3">
            <img class="store" src="imagenes/productos/3/principal.png">
        </div>
        

    </section>

    <section class="contact container">

        <form>
            <input type="email" placeholder="Correo">
            <input type="submit" class="btn-3">
        </form>

    </section>

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


    <script src="script.js"></script>
</body>
</html>