<?php
	$conn = new mysqli('localhost', 'root', 'admin', 'proyecto');
	if ($conn->connect_errno):
		echo "Error al conectarse con MySQL debido al error: ".$conn->connect_error;
	endif;
?>