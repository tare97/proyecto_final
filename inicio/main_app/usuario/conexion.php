<?php
        /* Conexión con la base de datos */
	$conn = new mysqli('localhost', 'root', 'admin', 'proyecto');
	if ($conn->connect_errno):
		echo "Error al conectarse con MySQL debido al error: ".$conn->connect_error;
	endif;
        
        /* cambio del juego de caracteres a utf8 */
        if (!$conn->set_charset("utf8")) {
            printf("Error cambiando el juego de caracteres utf8: %s\n", $conn->error);
        } else {
            printf("caracteres actual: %s\n", $conn->character_set_name());
        }
 
?>