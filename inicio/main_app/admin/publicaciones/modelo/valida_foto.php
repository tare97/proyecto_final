<?php
//variable de session.
session_start();
        // La conexion de datos.
	require_once '../conector/conexion.php';
        //Datos resividos del formulario
	$nombre = $_POST["txtnom"];
        $modo = $_POST["modo"];
        $texto = $_POST["texto"];
	$foto = $_FILES["foto"]["name"];
        $id_usuario = $_SESSION['id_usuario'];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino = "imag/".$foto;
        $destino_imag = "../../../usuario/imag/".$foto;
        //Copy es neceario para almacenar las fotos localmente y poder usarlas.
	copy($ruta,$destino_imag);
        //Consulta insertar todos los datos para la creacion de una nueva publicacion.
	$sql1 = "INSERT INTO `publicaciones`(`id_usuario`, `titulo`, `imagen`, `tipo_publicacion`, `texto`) VALUES ($id_usuario,'$nombre','$destino','$modo','$texto')";
	$rec = mysqli_query($conn, $sql1);
	header("Location: ../vista/vista_menu.php");
