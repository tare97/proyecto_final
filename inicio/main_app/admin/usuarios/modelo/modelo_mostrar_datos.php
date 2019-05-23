<?php

$id_usuario = $_POST['id_usuario'];

require '../conector/conexion.php';

$sql_u = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$rec = mysqli_query($conn, $sql_u);

$row_u = mysqli_fetch_object($rec);

$usuario = $row_u->{'usuario'};
$nombre = $row_u->{'nombre'};
$apellido = $row_u->{'apellido'};
$email = $row_u->{'email'};
$tipo = $row_u->{'tipo_usuario'};

?>
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