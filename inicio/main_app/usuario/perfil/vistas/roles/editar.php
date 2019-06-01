<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>EnjoyArt - Editar Publicación</title>
        <link rel="stylesheet" type="text/css" href="estilos_editar.css">
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
            <textarea name="texto" placeholder="texto" required><?= $rol[5] ?></textarea>
            <input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>