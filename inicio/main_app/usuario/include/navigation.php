<!--Botones dinamicos que nos permiten movernos por la pagína-->
<div class="sidebar">
    <h2>Menú</h2>
    <ul>
        <li class="">
           <a class=" <?php if($CURRENT_PAGE == "Index"){ ?> active <?php } ?>" href="index.php">Home</a>
        </li>
        <li class="">
           <a class=" <?php if($CURRENT_PAGE == "Perfil"){ ?> active <?php } ?>" href="perfil.php">Perfil</a>
        </li>
        <li class="">
           <a class="<?php if($CURRENT_PAGE == "NewPublic"){ ?> active <?php } ?>" href="aniadirPublic.php">New Publicacion</a>  
        </li>
    </ul>
</div>

