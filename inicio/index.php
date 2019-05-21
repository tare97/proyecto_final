<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de sesion</title>
        <!--Enlaces propios-->
        <link rel="stylesheet" href="estilos.css">
        <!--Librerias de Bootstrap y jquery-->
        <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.min.css">
        <script src="../librerias/bootstrap/js/jquery.min.js"></script>
        <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <div class="error">
            <span>Datos de Ingreso no válidos, inténtelo de nuevo por favor</span>
	</div>
        <div class="login-box">
            <h1 align="center">User Login form</h1>
            <form method="post" id="formlg" name="">
                <!--Username-->
                <label for="username">UserName</label>
                <input id="username" name="username" type="text" placeholder="Introduce tu Username">
                <!--Password-->
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Introduce tu password">
                <!--Boton para iniciar sesion-->
                <input name="submit" type="submit" value="LogIn" class="btn btn-info">
                <!--Enlace si te quieres suscribir-->
                <a href="registrarse/registro.php">Don´t have an account?</a>
            </form>
        </div>
    </body>
</html>
