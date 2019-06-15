<?php
//Id de la publicacion enviado desde el ajax.
$id_publicacion = $_POST['id_publicacion'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla publicaciones mientras el id sea el resivido del ajax.
$sql_u = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql_u);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row_u = mysqli_fetch_object($rec);
//Elementos seleccionados de la base de datos.
$titulo = $row_u->{'titulo'};
$texto = $row_u->{'texto'};
$tipo = $row_u->{'tipo_publicacion'};


?>
<!--Estructura de la vista para mostrar una publicacion en el selector-->
<h4>Datos de la publicacion</h4>
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