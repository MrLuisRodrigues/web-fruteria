

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <form action = "validar_registro.php" method="post">

                <h2>Sistema Registro</h2>
                <p>Nombre<input type="text" placeholder="Ingrese su nombre" name="nombre"></p>
                <p>Apellido <input type="text" placeholder="Ingrese su apellido" name="apellido"></p>
                <p>Correo <input type="email" required="" placeholder="Ingrese su correo" name="correo"></p>
                <p>Contraseña <input type="password" required="" placeholder="Ingrese su contraseña" name="contraseña"></p>
                <input type="submit" value="Registrar" class="submit-btn">

        </form>
    </div>
</body>
</html>