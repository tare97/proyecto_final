<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Título de la pestaña del navegador-->
        <title>EnjoyArt - Inicio de sesión</title>
        
        <!--Librerías a usar-->
        <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.min.css">
        <script src="../librerias/bootstrap/js/jquery.min.js"></script>
        <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>

        <!--Enlaces propíos-->
        <link rel="stylesheet" href="estilos.css">
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <!--Mensaje de Error en caso de no logearse correctamente-->
        <div class="error">
            <span>Datos de Ingreso no válidos, inténtelo de nuevo por favor</span>
	</div>
        <!--Estructura del panel de login-->
        <div class="login-box">
            <!--Título del panel-->
            <h1 align="center"><b>LOGIN TO ACCOUNT</b></h1>
            <form method="post" id="formlg">
                <!--Nombre de usuario-->
                <label for="username">UserName</label>
                <input id="username" name="username" type="text" placeholder="Enter your Username">
                <!--Contraseña-->
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password">
                <!--Boton para iniciar sesion-->
                <input name="submit" type="submit" value="LogIn" class="btn btn-info">
                <!--Enlace que te lleva al panel de suscripción-->
                <a href="registrarse/registro.php">Don´t have an account?</a>
            </form>
        </div>
    </body>
</html>
