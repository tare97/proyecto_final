<?php
//Variable para usar sesiones.
session_start();
// Dato resivido de el ajax.
$id_puntuacion = $_POST['id_puntuacion'];

//Conexion con la base de datos.
require '../../conexion.php';

//Consulta de eliminacion.
$sql1 = "DELETE FROM puntuar WHERE id_puntuacion = $id_puntuacion";
$reg = mysqli_query($conn, $sql1);
//Condicion.
if ($reg == TRUE) {
	echo "Like borrado";	
}else{
    echo "<br>Publicación no a podido ser likeado.";
}


?>

