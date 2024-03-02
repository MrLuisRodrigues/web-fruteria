


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

                    
                    <form action="procesar_nuevo_productos.php" method="POST">
                    <h2>Nuevo Producto</h2>                 
                        <h2>Sistema Registro</h2>
                        <p>Nombre<input type="text" placeholder="Ingrese el nombre del Producto" name="nombre"></p>
                        <p>Precio <input type="text" placeholder="Ingrese el precio del producto" name="precio"></p>
                        <p>ID Categoria <input type="text"  placeholder="Ingrese la ID Categoria" name="idcategoria"></p>
                        <h6>ID 1 = Productos General <br>
                            ID 2 = Productos de Oferta
                        </h6>
                        <p>Activo <input type="text"  placeholder="Ingrese ID" name="activo"></p>
                        <h6>ID 1 = Activo <br>
                            ID 0 = Inactivo
                        </h6>
                        <input type="submit" value="Crear" class="submit-btn">
                    
                    </form>    

                </tbody>
            </table>        
        </div>  
    </div>       
</body>




</html>




