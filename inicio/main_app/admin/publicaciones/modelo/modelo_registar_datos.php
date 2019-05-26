<?php
session_start();
$_SESSION['id_usuario'] = $_row['id_usuario']; 
$usuario = $_SESSION['id_usuario'];
//foto
$foto = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = "imagenes/".$foto;
copy($ruta,$destino);
//demas
$titulo = $_REQUEST['titulo'];
$tipo_publi = $_REQUEST['tipo_publi'];
$texto = $_REQUEST['texto'];

require '../conector/conexion.php';

$sql1 = "INSERT INTO `publicaciones` ( `id_usuario`, `titulo`, `imagen`, `tipo_publicacion`, `texto`) VALUES ('$usuario','$titulo','$destino','$tipo_publi','$texto')";
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
	echo "Registro realizado";	
}else{
    echo "Algo a salido mal";
}

?>