<?php
//Elemento que resive del ajax.
$id_publicacion = $_POST['id_publicacion'];
//Conexion con la base de datos.
require '../conector/conexion.php';
     //Consulta: Eliminar de la tabla mientras el id_publicacion se el mismo que el resivido del ajax.
	$sql1 = "DELETE FROM `publicaciones` WHERE `publicaciones`.`id_publicacion` = '$id_publicacion'";
        //Envia la consulta a la base datos.
	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
                //Mensaje de error positivo.
		echo "Borrado realizado";	
	}


?>