<?php
$id_usuario = $_POST['id_usuario'];

require '../conector/conexion.php';

$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);

 echo "Desea Eliminar a ";
 echo $nombre = $row->{'nombre'};
 echo " "; echo $apellido = $row->{'apellido'};

 echo " ? ";

?>

<input type="hidden" id="id_usuario" value="<?php echo $id_usuario; ?>">