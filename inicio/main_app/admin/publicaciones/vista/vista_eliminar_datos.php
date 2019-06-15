<?php
//Id de la publicacion enviado desde el ajax.
$id_publicacion = $_POST['id_publicacion'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla publicaciones mientras el id sea el recivido del ajax.
$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row = mysqli_fetch_object($rec);
//Mensaje de eliminación que aparecera en la vista-->
 echo "Desea Eliminar a ";
 echo $id_publicacio = $row->{'id_publicacion'};

 echo " ? ";

?>
<!--Elemento oculto para conseguír el id de la publicacion deseado-->
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>">