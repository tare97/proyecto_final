<?php
    session_start();
    // Estructura de seguridad para que no se puede acceder introduciendo la url.
    error_reporting(0);
    //Se cra una variable con el nombre de usuario.
    $varsesion = $_SESSION['login_user'];
    //Condición : Si el usuario es nulo o vacío sera rechazado y no podra acceder.
    if($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización, no se a logeado correctamente. <a href="../../index.php">Volver</a>';
        die();
    }
    require_once 'perfil/modelos/Rol.php' ;
?>
<title><?php echo $PAGE_TITLE ?></title>


<?php

    /* 
    * Contiene todas las etiquetas HEAD
    */
    
    if($CURRENT_PAGE == "Index"){ ?>
        <meta name="descripcion" content="">
        <meta name="keywords" content="">
       
    <?php 
    }
    ?>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Enlaces-->
        <link rel="stylesheet" type="text/css" href="../usuario/librerias/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../usuario/librerias/bootstrap/css/glyphicons.css">
        <link rel="stylesheet" type="text/css" href="../usuario/css/styles.css">
        <script src="../usuario/js/jquery.min.js"></script>
        <script src="../usuario/js/popper.min.js"></script>
        <script src="../usuario/js/bootstrap.min.js"></script>
        <script src="../comentarios/controlador/comentarios.js"></script>
        
        




