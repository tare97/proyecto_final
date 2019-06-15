<?php
        //variable para usar sesiones
        session_start();
        //obtenemos la conexion con la base de datos.
	require('conexion.php');
        // datos a guardar o verificar.
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$pw_encrip = md5($password);
        $texto = $_POST['captcha'];
	$password2 = $_POST['password2'];
        //Consulta: Selecionamos todos os datos de la tabla usuarios.
	$sql1 = 'SELECT * FROM usuarios';
	$rec = mysqli_query($conn, $sql1);
	$verificar = 0;

	while ($resultado = mysqli_fetch_object($rec)){
		if ($resultado->usuario == $usuario) {
			$verificar = 1;
		}
	}
        
        if($texto!=$_SESSION['custom_captcha'])
	{
	 $error = "CAPTCHA INVALIDO, INTENTELO DE NUEVO";
	 echo $error;
	 //Error del captchar.
	} else {
            if ($verificar == 0) {
                $sql2="INSERT into usuarios (usuario, nombre, apellido, password, tipo_usuario, email)
                values ('$usuario', '$nombre', '$apellido', '$pw_encrip', 'usuario', '$correo' )";
                mysqli_query($conn, $sql2);
                echo "Registro realizado con exíto.";
            }else{
                echo "El usuario ya existe";
            }
	}
	
