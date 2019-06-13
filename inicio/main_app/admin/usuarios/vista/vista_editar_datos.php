<?php
//Id del usuario enviado desde el ajax.
$id_usuario = $_POST['id_usuario'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla usuarios mientras el id sea el resivido del ajax.
$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row = mysqli_fetch_object($rec);
//Elementos seleccionados de la base de datos.
 $usuario = $row->{'usuario'};
 $nombre = $row->{'nombre'};
 $apellido = $row->{'apellido'};
 $correo = $row->{'email'};
 $tipo = $row->{'tipo_usuario'};


?>
<!--Elemento oculto para conseguír el id del usuario deseado-->
<input type="hidden" id="id_usuario" value="<?php echo $id_usuario; ?>"></input>
<!--Panel de modificacion que aparecera en la vista-->
<!--Username del usuario-->
<label for="usuario">Usuario</label>
<input type="text" class="form-control" id="usuario_ed" placeholder="* Usuario " value="<?php echo $usuario; ?>">
<!--Nombre del usuario-->
<label for="nombre">Nombre</label>
<input type="text" class="form-control" id="nombre_ed" placeholder="* Nombre " value="<?php echo $nombre; ?>">
<!--Apellido del usuario-->
<label for="apellido">Apellido</label>
<input type="text" class="form-control" id="apellido_ed" placeholder="* Apellido " value="<?php echo $apellido; ?>">
<!--Correo electronico del usuario-->
<label for="correo">correo</label>
<input type="text" class="form-control" id="correo_ed" placeholder="* Correo " value="<?php echo $correo; ?>">
<!--Tipo de usuario (admin o usuario-->
<label for="tipo">tipo usuario</label>
<input type="text" class="form-control" id="tipo_ed" placeholder="* Tipo de usuario " value="<?php echo $tipo; ?>">