<?php
//Id del usuario enviado desde el ajax.
$id_usuario = $_POST['id_usuario'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla usuarios mientras el id sea el recivido del ajax.
$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row = mysqli_fetch_object($rec);
 //Mensaje de eliminación que aparecera en la vista-->
 echo "Desea Eliminar a ";
 echo $nombre = $row->{'nombre'};
 echo " "; echo $apellido = $row->{'apellido'};

 echo " ? ";

?>
<!--Elemento oculto para conseguír el id del usuario deseado-->
<input type="hidden" id="id_usuario" value="<?php echo $id_usuario; ?>">