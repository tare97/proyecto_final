<?php
$id_publicacion = $_POST['id_publicacion'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];



require '../conector/conexion.php';

$sql = 'SELECT * FROM publicaciones';
$rec = mysqli_query($conn, $sql);


$sql1 = "UPDATE `publicaciones` SET `titulo` = '$titulo',  `texto` = '$texto'  WHERE `publicaciones`.`id_publicacion` = $id_publicacion";

$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Edicion realizado";	
}


?>