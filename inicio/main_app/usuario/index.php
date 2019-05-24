
<?php
    session_start();
    //error_reporting(0);
    $varsesion = $_SESSION['login_user'];
    
    if($varsesion == NULL || $versesion = ''){
        echo 'Usted no tiene autorización';
        die();
    }
?>



<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <!--La vista de compatibilidad(permite visualizar páginas web que no cumple con los estandares)-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Permite añadir estilos compatibles con dispositivos móviles-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Título de la pestaña del navegador y breve descripción-->
        <title>Enjoy2Art -Pagína Principal</title>
        <meta name="description" content="Pagína principal de mi aplicación web aquí estara el contenido principal" />
        <!--Enlaces de los Estilos (CSS)-->
        <link rel="stylesheet" href="css/glyphicons.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!--BARRA DE NAVEGACIÓN SUPERIOR-->
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="col-md-1">
                <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"><span class="glyphicon glyphicon-list"></span></a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()"><span class="glyphicon glyphicon-list"></span></a>
            </div>
            <div class="col-md-9">
                <h1>EnjoyArt</h1>
            </div>
            <!--Segunda columna - dudas y log out-->
            <div class="col-md-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-light d-none d-md-block x" data-toggle="tooltip" title="Preguntas frecuentes!">Help?</button>
                    <a class="btn btn-light x"href="logout.php"><span class="glyphicon glyphicon-log-out"></span><span class="nav-label"> Log Out</span></a>
                </div>
            </div>
        </nav>
        <!--BARRA LATERAL O SIDEBAR-->
        <div id="sidebar" class="sidebar">
            <!--Parte superior - Información del usuario-->
            <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
            <img class="icon" src="img/icono.ico" />
            <h5><a class="nombreuser" href="#"><?php echo $_SESSION['login_user']; ?></a></h5>
            <img class="conect" src="img/conectado.png" />
            <p class="conect-text">conectado</p>
            <!--Parte inferior - Buscador y enlaces de navegación-->
            <ul>
                <li>
                    <input type="text" id="buscador" placeholder="search..." />
                </li>
                <li>
                    <a href="">
                        <div class="barra"></div>
                        <p class="menu">Inicio</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="barra"></div>
                        <p class="menu">Perfil</p>
                    </a>
                </li>
            </ul>
        </div>
        <!--CONTENIDO PRINCIPAL DE LA PAGÍNA-->
        <div id="contenido">
            pepitpooooo
        </div>
        <!--Enlaces de scripts (JS)-->
        <script src="scripts/jquery.slim.min.js"></script>
        <script src="scripts/popper.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/main2.js"></script>
    </body>
</html> 