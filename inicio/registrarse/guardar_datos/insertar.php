<?php
	require('conexion.php');

	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$pw_encrip = md5($password);
	//$pw_encrip = password_hash($password, PASSWORD_DEFAULT);
	$password2 = $_POST['password2'];

	$sql1 = 'SELECT * FROM usuarios';
	$rec = mysqli_query($conn, $sql1);
	$verificar = 0;

	while ($resultado = mysqli_fetch_object($rec)){
		if ($resultado->usuario == $usuario) {
			$verificar = 1;
		}
	}

	if ($verificar == 0) {
		if($password === $password2){
		$sql2="INSERT into usuarios (usuario, nombre, apellido, password, tipo_usuario, email)
		values ('$usuario', '$nombre', '$apellido', '$pw_encrip', 'usuario', '$correo' )";
		mysqli_query($conn, $sql2);
		echo "Registro realizado con exíto.";
		}else{
			echo "Las contraseñas no coinciden, porvafor vuelva a intentarlo";
		}
	}else{
		echo "El usuario ya existe";
	}
	

	
?>