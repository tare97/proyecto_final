<?php
session_start();
$id_publicacion = $_POST['id_publicacion'];



require '../../conexion.php';

$sql = 'SELECT * FROM puntuar';
$rec = mysqli_query($conn, $sql);


$sql1 = "INSERT INTO `puntuar`(`id_usuario`, `id_publicacion`, `puntuacion`) VALUES (" . $_SESSION['id_usuario'] . ", $id_publicacion, TRUE)";
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Like añadido";	
}else{
    echo "<br>Publicación no a podido ser Likeada.";
}


?>

