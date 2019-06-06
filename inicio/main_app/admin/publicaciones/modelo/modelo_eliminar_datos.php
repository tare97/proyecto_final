<?php

$id_publicacion = $_POST['id_publicacion'];


require '../conector/conexion.php';



	$sql1 = "DELETE FROM `publicaciones` WHERE `publicaciones`.`id_publicacion` = '$id_publicacion'";
        
	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Borrado realizado";	
	}


?>