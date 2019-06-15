<?php
// Datos resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

//Conexion con la base de datos.
require '../../conexion.php';
//Consulta
$sql = 'SELECT * FROM publicaciones';
$rec = mysqli_query($conn, $sql);

//Consulta para actualizar elementos.
$sql1 = "UPDATE `publicaciones` SET `titulo` = '$titulo',  `texto` = '$texto'  WHERE `publicaciones`.`id_publicacion` = $id_publicacion";
//Condicion.
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "<br>Edicion realizado";	
}else{
    echo "<br>Publicación no a podido ser editada.";
}


?>