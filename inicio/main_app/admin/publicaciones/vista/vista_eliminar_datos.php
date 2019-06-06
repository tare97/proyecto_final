<?php
$id_publicacion = $_POST['id_publicacion'];

require '../conector/conexion.php';

$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);

 echo "Desea Eliminar a ";
 echo $id_publicacion = $row->{'id_publicacion'};

 echo " ? ";

?>

<input type="hidden" id="id_publicac" value="<?php echo id_publicacion; ?>">