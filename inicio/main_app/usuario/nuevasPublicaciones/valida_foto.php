<?php
//variable para usar sessiones.
session_start();
        //obtener la conexion con la base de datos.
	require_once '../conexion.php';
        //Datos resividos del formulario
	$nombre = $_POST["txtnom"];
        $modo = $_POST["modo"];
        $texto = $_POST["texto"];
	$foto = $_FILES["foto"]["name"];
        $id_usuario = $_SESSION['id_usuario'];
	$ruta = $_FILES["foto"]["tmp_name"];
        $destino_img = "../imag/".$foto;
	$destino = "imag/".$foto;
        //Copy es neceario para almacenar las fotos localmente y poder usarlas.
	copy($ruta,$destino_img);
        //Consulta insertar todos los datos para la creacion de una nueva publicacion.
	$sql1 = "INSERT INTO `publicaciones`(`id_usuario`, `titulo`, `imagen`, `tipo_publicacion`, `texto`) VALUES ($id_usuario,'$nombre','$destino','$modo','$texto')";
	$rec = mysqli_query($conn, $sql1);
	header("Location: ../index.php");
