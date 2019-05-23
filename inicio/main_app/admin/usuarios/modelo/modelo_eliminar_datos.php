<?php

$id_usuario = $_POST['id_usuario'];


require '../conector/conexion.php';



	$sql1 = "DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $id_usuario";

	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Borrado realizado";	
	}


?>