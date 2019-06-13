<?php
//Id del usuario enviado desde el ajax.
$id_usuario = $_POST['id_usuario'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla usuarios mientras el id sea el resivido del ajax.
$sql_u = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql_u);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row_u = mysqli_fetch_object($rec);
//Elementos seleccionados de la base de datos.
$usuario = $row_u->{'usuario'};
$nombre = $row_u->{'nombre'};
$apellido = $row_u->{'apellido'};
$email = $row_u->{'email'};
$tipo = $row_u->{'tipo_usuario'};

?>
<!--Estructura de la vista para mostrar un usuario en el selector-->
<h4>Datos del Usuario</h4>
<table class="table table-condensed">
	<tr>
		<td>Usuario :</td>
		<td><?php echo $usuario;?></td>
	</tr>
	<tr>
		<td>Nombre :</td>
		<td><?php echo $nombre;?></td>
	</tr>
	<tr>
		<td>Apellido :</td>
		<td><?php echo $apellido;?></td>
	</tr>
	<tr>
		<td>Correo :</td>
		<td><?php echo $email;?></td>
	</tr>
	<tr>
		<td>tipo :</td>
		<td><?php echo $tipo;?></td>
	</tr>
</table>
<?php

?>