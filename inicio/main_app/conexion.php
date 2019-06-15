<?php
        //Conexion de datos. (Puerto, nombre, password y nombre del la base de datos.
	$conn = new mysqli('localhost', 'root', 'admin', 'proyecto');
        //mensaje de error por si no se conecta.
	if ($conn->connect_errno):
		echo "Error al conectarse con MySQL debido al error: ".$conn->connect_error;
	endif;


