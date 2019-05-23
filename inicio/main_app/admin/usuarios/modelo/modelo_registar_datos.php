<?php
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];
$clave = $_POST['clave'];
$clavec = md5($clave);

require '../conector/conexion.php';

$sql = 'SELECT * FROM usuarios';
$rec = mysqli_query($conn, $sql);
$verificar = 0;

while ($resultado = mysqli_fetch_object($rec)){
	if ($resultado->usuario == $usuario) {
		$verificar = 1;
	}
}

if ($verificar == 0){
	$sql1 = "INSERT INTO `usuarios`(`usuario`, `nombre`, `apellido`, `email`, `tipo_usuario`, `password`) VALUES ('$usuario', '$nombre', '$apellido', '$correo', '$tipo' , '$clavec')";

	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
		echo "Registro realizado";	
	}
}else{
	echo "Usuario existente";
}


?>