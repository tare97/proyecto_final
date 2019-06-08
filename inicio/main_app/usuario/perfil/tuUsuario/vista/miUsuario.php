<?php
session_start();
?>
<html>
    <header>
        <!--Titulo de la pagína-->
        <title>EnjoyArt - Mi perfil</title>
        <!--Enlaces y librerías para el funcionamiento de la pagína-->
        <link rel="stylesheet" type="text/css" href="../librerias/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../librerias/glyphicons.css">
        <script src="../librerias/bootstrap.min.js"></script>
        <script src="../librerias/jquery.min.js"></script>
            <!--Enlaces personales de js y css-->
            <link rel="stylesheet" type="text/css" href="../css/estilos.css">
            <script src="../controlador/control_usuario.js"></script>
    </header>
    <?php
        //Estructura de php para conseguír los elementos para la edición-->
        require '../../../conexion.php';

        $sql = "SELECT * FROM usuarios WHERE id_usuario='" . $_SESSION['id_usuario'] . "'";
        $rec = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($rec);
        //Elementos que necesito.
        $usuario = $row->{'usuario'};
        $nombre = $row->{'nombre'};
        $apellido = $row->{'apellido'};
        $email = $row->{'email'};
        $password = $row->{'password'};
        $clave = base64_encode($password);
        
    ?>
    <body>
        <!--BARRA DE NAVEGACIÓN-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../../perfil.php">EnjoyArt Application</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Perfíl</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../../../perfil.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                </ul>
            </div>
        </nav>
        <!--Contenido de la pagína-->
        <div class="container">
            <div class="row parte1">
                <!--Titulo-->
                <h1>Pagína Personal</h1>
            </div>
            <div class="row parte2">
                <div class="col-xs-12 col-md-6">
                    <!--Panel de edición del usuario-->
                    <div class="panel panel-default edicion">
                        <div class="panel-heading">Panel del Usuario: <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['login_user']; ?></div>
                        <div class="panel-body">
                            <form method="post" id="panel_user">
                                <div class="form-group">
                                    <!--Nombre de usuario-->
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" class="form-control" id="usuario" value="<?php echo $usuario; ?>" placeholder="Usuario..." required>
                                    <!--Nombre y apellido-->
                                    <div class="row">
                                        <div class="col-md-12"><label for="nombre">Nombre y Apellido:</label></div>
                                        <div class="col-sm-6"><input type="text" class="form-control nombre" id="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre..." required></div>
                                        <div class="col-sm-6"><input type="text" class="form-control apellido" id="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido..." required></div>
                                    </div>
                                    <!--Correo electronico-->
                                    <label for="email">Correo electronico:</label>
                                    <input type="email" class="form-control" id="correo" value="<?php echo $email; ?>" placeholder="correo electronico..." required>
                                    <!--Contraseña-->
                                    <label for="clave">Contraseña:</label>
                                    <input type="text" class="form-control" id="clave" value="<?php echo $clave; ?>" placeholder="contraseña..." required>      
                                </div>
                                <button type="submit" class="btn btn-primary">Modíficar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <!--Panel de eliminacion del usuario-->
                    <div class="panel panel-default eliminacion">
                        <div class="panel-heading">Panel de eliminación:</div>
                        <div class="panel-body">
                            <h4>Sí desea eliminar este Usuario, pulse aquí.</h4>
                            <button type="submit" class="btn btn-danger">Elíminar</button>
                                <?php echo $_SESSION['id_usuario']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
