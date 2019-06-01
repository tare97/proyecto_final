<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Roles.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="titulo" placeholder="Titulo" value="<?= $rol[2] ?>" required autofocus />
                <textarea name="texto" placeholder="texto" rows="20" cols="80" required><?= $rol[5] ?></textarea>
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>