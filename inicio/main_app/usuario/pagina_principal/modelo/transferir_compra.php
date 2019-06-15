<?php
// variable para usar sesiones
session_start();
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];

//conexion con la base de datos.
require '../../conexion.php';
//Consulta.
$sql = 'SELECT * FROM publicaciones';
$rec = mysqli_query($conn, $sql);

//Consulta para la actualizaciones de elementos.
$sql1 = "UPDATE `publicaciones` SET `id_usuario` = " . $_SESSION['id_usuario'] . " WHERE `publicaciones`.`id_publicacion` = $id_publicacion";

$reg = mysqli_query($conn, $sql1);
//Condición.
if ($reg == TRUE) {
	echo "<br>Transaccion realizada";	
}else{
    echo "<br>Publicación no a podido ser transferida , lociento por las molestias.";
}


