<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>EnjoyArt - Editar Publicación</title>
        <!--Librerias-->
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <script src="../../../js/jquery.min.js"></script>
        <script src="../../../js/popper.min.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <!--Links propios-->
        <link rel="stylesheet" type="text/css" href="estilos_editar.css">
            <!--Enlace script para el contador de caracteres-->
        <script src="../../../nuevasPublicaciones/contarCaracteres.js"></script>
</head>
<body>
	<header>
            <h1>Pagína de Edición.</h1>
	</header>
	<form action="../../controladores/Roles.php" method="post">
            <h3>Panel de edición.</h3>
            <!--Input escondido que guarda la id de la publicacion en cuestion-->
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
            <!--TITULO-->
            <input name="titulo" placeholder="Titulo" value="<?= $rol[2] ?>" required autofocus />
            <!--RELATO CORTO-->
            <textarea name="texto" id="texto" onpaste="contarcaracteres();" onkeyup="contarcaracteres();" placeholder="texto" maxlength="630" required><?= $rol[5] ?></textarea>
            <div id="res">O caractere/s</div>
            <br>
            <input name="a" type="submit" value="Editar" />
            <a class="btn btn-success" href="../../../perfil.php">Atras</a>
	</form>
</body>
</html>