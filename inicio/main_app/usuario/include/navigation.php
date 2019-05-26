<!--Botones dinamicos que nos permiten movernos por la pagína-->
<div class = "container">
    <ul class="nav nav-pills">
        <li class="nav-item">
           <a class="nav-link <?php if($CURRENT_PAGE == "Index"){ ?> active <?php } ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
           <a class="nav-link <?php if($CURRENT_PAGE == "Perfil"){ ?> active <?php } ?>" href="perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
           <a class="nav-link <?php if($CURRENT_PAGE == "NewPublic"){ ?> active <?php } ?>" href="aniadirPublic.php">New Publicacion</a>  
        </li>
    </ul>
</div>

