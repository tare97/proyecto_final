<?php
session_start();
$id_publicacion = $_POST['id_publicacion'];
$comentario = $_POST['comentario'];



require '../../conexion.php';

$sql = 'SELECT * FROM comentar';
$rec = mysqli_query($conn, $sql);


$sql1 = "INSERT INTO `comentar`(`id_publicacion`, `id_usuario`, `comentario`) VALUES ($id_publicacion," . $_SESSION['id_usuario'] . ",'$comentario')";

$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "<br>Comentario añadido";	
}else{
    echo "<br>Publicación no a podido ser comentada.";
}


?>

