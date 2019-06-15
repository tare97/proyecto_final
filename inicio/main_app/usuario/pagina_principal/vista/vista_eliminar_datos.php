<?php
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];
//conexion con la base de datos.
require '../../conexion.php';
//Consulta.
$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);
//Mensaje que muestra la vista.
 echo "</br>";
 echo "Desea Eliminar a la publicacion con el id: ";
 echo $publicacion = $row->{'id_publicacion'};
 echo " ? ";
 echo "</br>";
?>
<!--Input oculto para concer el elemento a eliminar.-->
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>">