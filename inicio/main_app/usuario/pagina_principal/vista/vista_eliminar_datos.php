<?php
$id_publicacion = $_POST['id_publicacion'];

require '../../conexion.php';

$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);
 echo "</br>";
 echo "Desea Eliminar a la publicacion con el id: ";
 echo $publicacion = $row->{'id_publicacion'};
 echo " ? ";
 echo "</br>";
?>

<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>">