<?php
//Elementos que resive del ajax.
$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];
//Conexion con la base de datos.
require '../conector/conexion.php';
//Consulta:Seleccionar todos los elementos de la tabla usuarios.
$sql = 'SELECT * FROM usuarios';
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Consulta: Modifica todos los elementos de la tabla usuarios que tengan el mismo id_usuario  que el resivido del ajax.
$sql1 = "UPDATE `usuarios` SET `usuario` = '$usuario', `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$correo', `tipo_usuario` = '$tipo'  WHERE `usuarios`.`id_usuario` = $id_usuario";
//Envia la consulta a la base datos.
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
        //Mensaje de error positivo.
	echo "Edicion realizado";	
}else{
    //Mensaje de error negativo.
    echo "La edicion no a podido ser realizado, intentelo mas tarde.";
}

