<?php /* Conectar el archivo  rol.php cin este */ require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();
        //Pueden ocurrir dos cosas:
	switch ($accion) {
                //Primer caso que selecciones el boton de edicion.
		case 'Editar':
			$rol->id= base64_decode($_POST['id']);
			$rol->titulo = $_POST['titulo'];
                        $rol->texto = $_POST['texto'];
			$rol->editar();
			break;
                //Segundo caso que seleccion el boton de eliminar.    
		case 'elim':
			$rol->id = base64_decode($_GET['id']);
			$rol->eliminar();
			break;
	}
}
//Seras reenviado a la pagína de perfíl.
header('Location: ../../perfil.php');