<?php require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();

	switch ($accion) {
		case 'Editar':
			$rol->id= base64_decode($_POST['id']);
			$rol->titulo = $_POST['titulo'];
                        $rol->texto = $_POST['texto'];
			$rol->editar();
			break;
		case 'elim':
			$rol->id = base64_decode($_GET['id']);
			$rol->eliminar();
			break;
	}
}

header('Location: ../../perfil.php');