<?php
require 'conexion.php';
session_start();
sleep(1);
$usuario = $_POST['username'];
$pass = $_POST['password'];
$pw_encrip = md5($pass);

$usuarios = $conn->query("SELECT * 
	FROM usuarios 
	WHERE usuario = '".$usuario."'
	AND password = '".$pw_encrip."'");

if($usuarios->num_rows > 0):
        $datos = $usuarios->fetch_assoc();
        $_SESSION['login_user'] = $datos{'usuario'};
        $_SESSION['id_usuario'] = $datos{'id_usuario'};
	
	echo json_encode(array('error' => false, 'tipo' => $datos['tipo_usuario']));
else:
	echo json_encode(array('error' => true));
endif;

$conn->close();


