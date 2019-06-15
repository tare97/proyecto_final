<?php
// Dato resivido de el ajax.
$id_usuario = $_POST['id_usuario'];
// conexion con la base de datos.
require '../../../conexion.php';

$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);

 //Elementos que necesito.
        $usuario = $row->{'usuario'};
        $nombre = $row->{'nombre'};
        $apellido = $row->{'apellido'};
        $email = $row->{'email'};
?>
<!--Estructura de lo que aparecera en el panel-->
<!--Nombre de usuario-->
<label for="usuario">Usuario:</label>
    <input type="text" class="form-control" id="usuario" value="<?php echo $usuario; ?>" placeholder="Usuario..." required>
 <!--Nombre y apellido-->
 <div class="row">
    <div class="col-md-12"><label for="nombre">Nombre y Apellido:</label></div>
    <div class="col-sm-6"><input type="text" class="form-control nombre" id="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre..." required></div>
    <div class="col-sm-6"><input type="text" class="form-control apellido" id="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido..." required></div>
 </div>
 <!--Correo electronico-->
 <label for="email">Correo electronico:</label>
    <input type="email" class="form-control" id="correo" value="<?php echo $email; ?>" placeholder="correo electronico..." required>
 <!--Contraseña-->
 <label for="clave" class="clave">Introduzca nueva contraseña o la actual porfavor:</label>
    <input type="text" class="form-control" id="clave" placeholder="contraseña..." required>  
<!--boton-->    
<button type="submit" class="btn btn-primary" onclick="btn_editar_dato(<?php echo $id_usuario ?>);">Modíficar</button>
