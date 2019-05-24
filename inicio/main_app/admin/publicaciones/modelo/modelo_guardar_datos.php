<?php
$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];


require '../conector/conexion.php';

$sql = 'SELECT * FROM usuarios';
$rec = mysqli_query($conn, $sql);


$sql1 = "UPDATE `usuarios` SET `usuario` = '$usuario', `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$correo', `tipo_usuario` = '$tipo'  WHERE `usuarios`.`id_usuario` = $id_usuario";

$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Edicion realizado";	
}


?>