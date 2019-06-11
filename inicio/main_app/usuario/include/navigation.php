<!--Botones dinamicos que nos permiten movernos por la pagína-->
<div class="sidebar">
    <!--PHP: Nombre y apellido del usuario actual-->
    <?php
    require '../conexion.php';
    session_start();
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
    $rec = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($rec);

        //Elementos que necesito.
        $nombre = $row->{'nombre'};
        $apellido = $row->{'apellido'};
        
        //Defininos unas cualidades para que siempre,
        // los dos elementos esten en minusculas 
        // y con la primera letra en mayusculas.
        $nombre_c = ucwords(strtolower($nombre));
        $apellido_c = ucwords(strtolower($apellido));
    ?>
    <!--Enlaces dinamicos a lo largo de la pagína-->
    <h2>Menú.</h2>
    <h4><img src="../usuario/css/circulo_conectado.png"> Conectado: <?php echo $nombre_c; ?>, <?php echo $apellido_c; ?>.</h4>
    <ul>
        <li class="">
           <a class=" <?php if($CURRENT_PAGE == "Index"){ ?> active <?php } ?>" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
        </li>
        <li class="">
           <a class=" <?php if($CURRENT_PAGE == "Perfil"){ ?> active <?php } ?>" href="perfil.php"><span class="glyphicon glyphicon-list-alt"></span> Perfil</a>
        </li>
        <li class="">
           <a class="<?php if($CURRENT_PAGE == "NewPublic"){ ?> active <?php } ?>" href="aniadirPublic.php"><span class="glyphicon glyphicon-plus-sign"></span> Nueva Publicacion</a>  
        </li>
    </ul>
</div>

