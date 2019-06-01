<?php include('include/a_config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('include/head-tag-contents.php'); ?>
	</head>
	<body>
            <?php include('include/design-top.php'); ?>
            <?php include('include/navigation.php'); ?>
            <div class="main-content">
                <!--Estructura de las publicaciones-->
                <?php foreach (Rol::listar() as $fila) { ?>
                    <!--PUBLICACIONES-->
                    <div class="row public-perfil">
                        <!--INFORMACION DE LA PUBLICACION-->
                        <div class="row superior">
                            <div class="col-xs-6 num-usuario">
                                <h5><span class="glyphicon glyphicon-user"></span> <?= $fila[1] ?></h5>
                            </div>
                            <div class="col-xs-6 fecha-publicacion">
                                <h5><?= $fila[6] ?></h5>
                            </div>
                        </div>
                        <!--TITULO-->
                        <div class="row titulo">
                            <div class="col-xs-12">
                                <h2><?= $fila[2] ?></h2>
                            </div>
                        </div>
                        <!--IMAGEN-->
                        <div class="row imagen">
                            <div class="col-xs-12">
                                <img src="<?= $fila[3] ?>">
                            </div>
                        </div>
                        <div class="row texto">
                            <div class="col-xs-12">
                                <p><?= $fila[5] ?></p>
                            </div>
                        </div>
                        <div class="row botones">
                            <div class="col-xs-12">
                                <a class="btn btn-primary" href="perfil/vistas/roles/editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
                                <a class="btn btn-danger" href="perfil/controladores/Roles.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!--Pie de pagína de la pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>

