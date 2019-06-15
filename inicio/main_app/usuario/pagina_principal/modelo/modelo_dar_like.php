<?php
//Varibale para usar sessiones.
session_start();
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];

//conexion con la base de datos.
require '../../conexion.php';
//Consulta.
$sql = 'SELECT * FROM puntuar';
$rec = mysqli_query($conn, $sql);

//Consulta para insertar nueva compra.
$sql1 = "INSERT INTO `puntuar`(`id_usuario`, `id_publicacion`, `puntuacion`) VALUES (" . $_SESSION['id_usuario'] . ", $id_publicacion, TRUE)";
$reg = mysqli_query($conn, $sql1);
//Condicion.
if ($reg == TRUE) {
	echo "Like añadido";	
}else{
    echo "<br>Publicación no a podido ser Likeada.";
}


?>

