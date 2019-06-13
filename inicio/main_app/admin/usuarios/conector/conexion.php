<?php
        //Elementos necesarios para conectar a la base de datos.
        //LOCALHOST, Nombre del usuario, password y nombre de la base de datos.
	$conn = new mysqli('localhost', 'root', 'admin', 'proyecto');
        //Condición por si se da error al conectar a la base de datos.
	if ($conn->connect_errno){
		echo "Error al conectarse con MySQL debido al error: ".$conn->connect_error;
	}else{
		//echo "conexion realizada";
	}
?>