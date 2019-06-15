<?php
// Dato resivido de el ajax.
$id_usuario = $_POST['id_usuario'];

// conexion con la base de datos.
require '../../../conexion.php';


        // Consulta para eliminar el usuario.
	$sql1 = "DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $id_usuario";

	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Borrado realizado";	
	}




