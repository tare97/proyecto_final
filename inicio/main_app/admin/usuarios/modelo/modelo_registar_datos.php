<?php
//Elementos enviados desde el ajax.
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];
$clave = $_POST['clave'];
$clavec = md5($clave);
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Todos los elementos de la tabla usuarios.
$sql = 'SELECT * FROM usuarios';
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Variable necesario para saber si el usuario exíste.
$verificar = 0;
//Bucle : mietras exístan usuarios en la base de datos dara vueltas.
while ($resultado = mysqli_fetch_object($rec)){
	if ($resultado->usuario == $usuario) {
                //Si hay un usuario igual en la base de datos
                //el contador se vuelve a uno lo que impide que siga el regístro.
		$verificar = 1;
	}
}
//Si sale del if siendo cero el la varible ferificar hace el regístro.
if ($verificar == 0){
	$sql1 = "INSERT INTO `usuarios`(`usuario`, `nombre`, `apellido`, `email`, `tipo_usuario`, `password`) VALUES ('$usuario', '$nombre', '$apellido', '$correo', '$tipo' , '$clavec')";

	$reg = mysqli_query($conn, $sql1);
	if ($reg == TRUE) {
                //Mensaje de error satisfactorio.
		echo "Registro realizado";	
	}
}else{
        //De lo contrario envia el mesaje de error diciendo que el usuarfio exíste.
	echo "Usuario existente";
}


?>