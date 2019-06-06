<?php

$id_publicacion = $_POST['id_publicacion'];

require '../conector/conexion.php';

$sql_u = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql_u);

$row_u = mysqli_fetch_object($rec);

$titulo = $row_u->{'titulo'};
$texto = $row_u->{'texto'};
$tipo = $row_u->{'tipo_publicacion'};


?>
<h4>Datos del Usuario</h4>
<table class="table table-condensed">
	<tr>
		<td>titulo :</td>
		<td><?php echo $titulo;?></td>
	</tr>
	<tr>
		<td>Relato :</td>
		<td><?php echo $texto;?></td>
	</tr>
	<tr>
		<td>Tipo de publicacion :</td>
		<td><?php echo $tipo;?></td>
	</tr>
</table>
<?php

?>