<?php
	require_once 'conexion.php';
	$nombre = $_POST["txtnom"];
        $modo = $_POST["modo"];
        $texto = $_POST["texto"];
	$foto = $_FILES["foto"]["name"];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino = "imag/".$foto;
	copy($ruta,$destino);

	$sql1 = "INSERT INTO `publicaciones`(`id_usuario`, `titulo`, `imagen`, `tipo_publicacion`, `texto`) VALUES (2,'$nombre','$destino','$modo','$texto')";
	$rec = mysqli_query($conn, $sql1);
	header("Location: index.php");
