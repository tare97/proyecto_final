<?php
session_start();
	require_once '../conector/conexion.php';
	$nombre = $_POST["txtnom"];
        $modo = $_POST["modo"];
        $texto = $_POST["texto"];
	$foto = $_FILES["foto"]["name"];
        $id_usuario = $_SESSION['id_usuario'];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino = "imag/".$foto;
        $destino_imag = "../../../usuario/imag/".$foto;
	copy($ruta,$destino_imag);

	$sql1 = "INSERT INTO `publicaciones`(`id_usuario`, `titulo`, `imagen`, `tipo_publicacion`, `texto`) VALUES ($id_usuario,'$nombre','$destino','$modo','$texto')";
	$rec = mysqli_query($conn, $sql1);
	header("Location: vista_menu.php");
