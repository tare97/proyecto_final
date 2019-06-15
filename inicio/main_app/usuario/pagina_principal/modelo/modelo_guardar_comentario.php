<?php
//Variable àra usar sesiones.
session_start();
// Datos resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];
$comentario = $_POST['comentario'];

//Conexion con la base de datos.
require '../../conexion.php';
//Consulta.
$sql = 'SELECT * FROM comentar';
$rec = mysqli_query($conn, $sql);

//Consulta para actualizar los datos.
$sql1 = "INSERT INTO `comentar`(`id_publicacion`, `id_usuario`, `comentario`) VALUES ($id_publicacion," . $_SESSION['id_usuario'] . ",'$comentario')";
//Condicion.
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "<br>Comentario añadido";	
}else{
    echo "<br>Publicación no a podido ser comentada.";
}


?>

