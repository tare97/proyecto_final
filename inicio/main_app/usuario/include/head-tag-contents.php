<?php
    session_start();
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
        
        




