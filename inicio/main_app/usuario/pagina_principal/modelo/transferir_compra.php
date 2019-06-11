<?php
session_start();
$id_publicacion = $_POST['id_publicacion'];



require '../../conexion.php';

$sql = 'SELECT * FROM publicaciones';
$rec = mysqli_query($conn, $sql);


$sql1 = "UPDATE `publicaciones` SET `id_usuario` = " . $_SESSION['id_usuario'] . " WHERE `publicaciones`.`id_publicacion` = $id_publicacion";

$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "<br>Transaccion realizada";	
}else{
    echo "<br>Publicación no a podido ser transferida , lociento por las molestias.";
}


