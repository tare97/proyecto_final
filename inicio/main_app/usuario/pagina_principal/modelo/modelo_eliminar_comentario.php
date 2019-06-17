<?php
// Dato resivido de el ajax.
$id_comentario = $_POST['id_comentario'];

//Conexion con la base de datos.
require '../../conexion.php';

        //Consulta para eliminar un elemento.
	$sql1 = "DELETE FROM `comentar` WHERE `comentar`.`id_comentario` = $id_comentario";
        //Condicion.
	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Borrado realizado.";	
	}else{
            echo "El borrado no a podido ser realizado, intentelo mas tarde.";
        }


?>
