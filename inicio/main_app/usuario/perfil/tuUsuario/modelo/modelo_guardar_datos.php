<?php

session_start();
$id_usuario = $_POST["id_usuario"];
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$clave_cod = md5($clave);

require '../../../conexion.php';

$sql = 'SELECT * FROM usuarios';
$rec = mysqli_query($conn, $sql);


$sql1 = "UPDATE `usuarios` SET `usuario` = '$usuario',  `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$correo', `password` = '$clave_cod'   WHERE id_usuario = $id_usuario";

$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "<br>Usuario Modificado";	
}else{
    echo "<br>Uusario no a podido ser modificado.";
}



