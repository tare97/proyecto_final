<?php
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];

//Conexion con la base de datos.
require '../../conexion.php';

        //Consulta para eliminar un elemento.
	$sql1 = "DELETE FROM `publicaciones` WHERE `publicaciones`.`id_publicacion` = $id_publicacion";
        //Condicion.
	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Borrado realizado";	
	}


?>