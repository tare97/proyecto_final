<?php
	$conn = new mysqli('localhost', 'root', 'admin', 'proyecto');
	if ($conn->connect_errno){
		echo "Error al conectarse con MySQL debido al error: ".$conn->connect_error;
	}else{
		//echo "conexion realizada";
	}
        
        /* cambio del juego de caracteres a utf8 */
        if (!$conn->set_charset("utf8")) {
            printf("Error cambiando el juego de caracteres utf8: %s\n", $conn->error);
        } else {
            $conn->character_set_name();
        }
?>