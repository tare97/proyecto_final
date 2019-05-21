


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>EnjoyArt - Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
                <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Formulario de registro</h1>
        <form id="frmajax" method="POST" class="form-register">
            <h2 class="form__titulo">CREAR UNA CUENTA</h2>
            <div class="contenedor-inputs">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required >
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="input-48" required >
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-40" required >
                <input type="email" id="correo" name="correo" placeholder="Correo Electronico" class="input-56" required >
                <input type="password" id="pass" name="password" placeholder="Contraseña" class="input-48" required >
                <input type="password" id="pass2" name="password2" placeholder="Verifica Contraseña" class="input-48" required >
                <button id="btnguardar" onclick="validar();">Guardar datos</button>
                <p class="form__link">¿Ya tienes cuenta? <a href="../index.php">Ingrese aquí</a></p>
            </div>
        </form>
    </body>
</html>