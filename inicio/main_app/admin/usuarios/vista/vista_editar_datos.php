<?php

$id_usuario = $_POST['id_usuario'];

require '../conector/conexion.php';

$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);

 $usuario = $row->{'usuario'};
 $nombre = $row->{'nombre'};
 $apellido = $row->{'apellido'};
 $correo = $row->{'email'};
 $tipo = $row->{'tipo_usuario'};


?>
<input type="hidden" id="id_usuario" value="<?php echo $id_usuario; ?>"></input>

<label for="usuario">Usuario</label>
<input type="text" class="form-control" id="usuario_ed" placeholder="* Usuario " value="<?php echo $usuario; ?>">

<label for="nombre">Nombre</label>
<input type="text" class="form-control" id="nombre_ed" placeholder="* Nombre " value="<?php echo $nombre; ?>">

<label for="apellido">Apellido</label>
<input type="text" class="form-control" id="apellido_ed" placeholder="* Apellido " value="<?php echo $apellido; ?>">

<label for="correo">correo</label>
<input type="text" class="form-control" id="correo_ed" placeholder="* Correo " value="<?php echo $correo; ?>">

<label for="tipo">tipo usuario</label>
<input type="text" class="form-control" id="tipo_ed" placeholder="* Tipo de usuario " value="<?php echo $tipo; ?>">