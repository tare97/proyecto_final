<?php
//Elementos que resive del ajax.
$id_publicacion = $_POST['id_publicacion'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

//Conexion con la base de datos.
require '../conector/conexion.php';
//Consulta:Seleccionar todos los elementos de la tabla usuarios.
$sql = 'SELECT * FROM publicaciones';
$rec = mysqli_query($conn, $sql);
//Consulta: Modifica todos los elementos de la tabla publicaciones que tengan el mismo id_usuario  que el resivido del ajax.
$sql1 = "UPDATE `publicaciones` SET `titulo` = '$titulo',  `texto` = '$texto'  WHERE `publicaciones`.`id_publicacion` = $id_publicacion";
//Envia la consulta a la base datos.
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Edicion realizado";	
}


?>