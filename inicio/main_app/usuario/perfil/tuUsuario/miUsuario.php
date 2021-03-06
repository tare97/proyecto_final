<?php
session_start();
?>
<html>
    <header>
        <!--Titulo de la pagína-->
        <title>EnjoyArt - Mi perfil</title>
        <!--Enlaces y librerías para el funcionamiento de la pagína-->
        <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/glyphicons.css">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap.min.css">
        <script src="librerias/jquery.min.js"></script>
        <script src="librerias/bootstrap.min.js"></script>
            <!--Enlaces personales de js y css-->
            <link rel="stylesheet" type="text/css" href="css/estilos.css">
            <script src="controlador/control_usuario.js"></script>
    </header>
    <body>
        <!--BARRA DE NAVEGACIÓN-->
        <div id="panel_cambio_usuario"></div>
        <div id="eliminar_user"></div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../perfil.php"><span class="glyphicon glyphicon-chevron-left"></span> Atras</a>
                </div>
            </div>
        </nav>
        <!--Breadcrumb-->
        <div class="migaDePan"><span class="glyphicon glyphicon-user"></span> Perfíl > <span class="glyphicon glyphicon-list"></span> Panel de Perfíl.</div>
        <!--Contenido de la pagína-->
        <div class="container">
            <div class="row parte1">
                <!--Titulo-->
                <h1>Pagína Personal</h1>
            </div>
            <div class="row parte2">
                <!--Boton de salida-->
                <div class="col-xs-12 col-md-6">
                    <!--Panel de edición del usuario-->
                    <div class="panel panel-default edicion">
                        <div class="panel-heading">Panel del Usuario: <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['login_user']; ?></div>
                        <div class="panel-body">
                            <button class="btn btn-success" onclick="btn_editar(<?php echo $_SESSION['id_usuario']; ?>);"><span class="glyphicon glyphicon-edit"></span></button>
                            <div id="elementos_modificar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 panel-elim">
                    <div class="row">
                        <!--Panel de eliminacion del usuario-->
                        <div class="panel panel-default eliminacion">
                            <div class="panel-heading">Panel de eliminación:</div>
                            <div class="panel-body">
                                <h4>Sí desea eliminar este Usuario, pulse aquí.</h4>
                                <button type="submit" class="btn btn-danger" onclick="btn_eliminar_usuario(<?php echo $_SESSION['id_usuario']; ?>);"><span class="glyphicon glyphicon-remove-sign"></span> Elíminar</button>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Panel de compras realizados por el usuario-->
                    <div class="panel panel-default detalles-compra">
                        <div class="panel-heading">Panel de compras:</div>
                        <div class="panel-body">
                            <button class="btn btn-info" onclick="btn_mis_compras();"><span class="glyphicon glyphicon-shopping-cart"></span> Mis Compras</button>
                            <div id="elementos_comprados"></div>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>
