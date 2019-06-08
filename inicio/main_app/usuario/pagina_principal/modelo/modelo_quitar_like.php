<?php
session_start();
$id_puntuacion = $_POST['id_puntuacion'];



require '../../conexion.php';


$sql1 = "DELETE FROM puntuar WHERE id_puntuacion = $id_puntuacion";
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Like borrado";	
}else{
    echo "<br>Publicación no a podido ser likeado.";
}


?>

